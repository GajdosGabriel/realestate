<?php

namespace App\Classes\Contracts;

use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Mpdf\Mpdf as PDF;
use Storage;
use DocuSign;
use App\Order;

class Contract {
    protected $objOrder;

    protected $objPDF;

    protected function __construct(Order $objOrder, $strView) {
        $this->objOrder = $objOrder;

        try {
            $this->objPDF = new PDF([
                'margin_top' => 30,
                'margin_bottom' => 30
            ]);

            $this->objPDF->SetAuthor('CEE Real Estate Group s.r.o.');
            $this->objPDF->SetCreator('CEE Real Estate Group s.r.o.');
            $this->objPDF->SetTitle('CEE Real Estate Group contract');
            $this->objPDF->SetSubject('CEE Real Estate Group contract');

            $this->objPDF->DefHTMLHeaderByName('cee', view('member/contracts/_header'));
            $this->objPDF->DefHTMLFooterByName('cee', view('member/contracts/_footer'));
            $this->objPDF->WriteHTML(view('member/contracts/' . $strView, ['objOrder' => $this->objOrder]));
        } catch (\Mpdf\MpdfException $objException) {

        }
    }

    public function output($download = null) {
        try {
            if ($download == true) return $this->objPDF->Output('contract.pdf', \Mpdf\Output\Destination::DOWNLOAD);
            else return $this->objPDF->Output();
        } catch (\Mpdf\MpdfException $objException) {

        }
    }

    public function save() {
        try {
            $strPDF = $this->objPDF->Output('/contract.pdf', \Mpdf\Output\Destination::STRING_RETURN);

            return Storage::disk('local')->put('public/users/' . $this->objOrder->user_id . '/contracts/' . $this->objOrder->contract, $strPDF);
        } catch (\Mpdf\MpdfException $objException) {

        }
    }

    public function send($bolLive = false) {
        if ($bolLive == true) {
            $accountId = env('DOCUSIGN_ACCOUNT_ID');
            $username = env('DOCUSIGN_USERNAME');
            $password = env('DOCUSIGN_PASSWORD');
            $host = env('DOCUSIGN_HOST');
        } else {
            $accountId = env('DOCUSIGN_DEMO_ACCOUNT_ID');
            $username = env('DOCUSIGN_DEMO_USERNAME');
            $password = env('DOCUSIGN_DEMO_PASSWORD');
            $host = env('DOCUSIGN_DEMO_HOST');
        }

        $integrator_key = env('DOCUSIGN_INTEGRATOR_KEY');

        // create configuration object and configure custom auth header
        $config = new DocuSign\eSign\Configuration();
        $config->setHost($host);
        $config->addDefaultHeader("X-DocuSign-Authentication", "{\"Username\":\"" . $username . "\",\"Password\":\"" . $password . "\",\"IntegratorKey\":\"" . $integrator_key . "\"}");

        // instantiate a new docusign api client
        $apiClient = new DocuSign\eSign\ApiClient($config);

        try {
            // Instantiate a new envelopeApi object
            $envelopeApi = new DocuSign\eSign\Api\EnvelopesApi($apiClient);

            // Add a document to the envelope
            $document = new DocuSign\eSign\Model\Document();
            $document->setDocumentBase64(base64_encode(Storage::disk('local')->get('public/users/' . $this->objOrder->user_id . '/contracts/' . $this->objOrder->contract)));
            $document->setName('cee_real_estate_contract.pdf');
            $document->setDocumentId("1");

            // CLIENT
            $signer = $this->signer_client();

            // CEE
            $signer2 = $this->signer_cee();

            // Add a recipients to sign the document
            $recipients = new DocuSign\eSign\Model\Recipients();
            $recipients->setSigners([$signer, $signer2]);

            $envelop_definition = new DocuSign\eSign\Model\EnvelopeDefinition();
            $envelop_definition->setEmailSubject("Please DocuSign: cee_real_estate_contract.pdf");

            // Set envelope status to "sent" to immediately send the signature request
            $envelop_definition->setStatus("sent");
            $envelop_definition->setRecipients($recipients);
            $envelop_definition->setDocuments(array($document));

            // Create and send the envelope! (aka signature request)
            return $envelopeApi->createEnvelope($accountId, $envelop_definition, null);
        } catch (DocuSign\eSign\ApiException $e) {
            return "Exception: " . $e->getMessage() . "\n";
        } catch (FileNotFoundException $e) {
            return "Exception: " . $e->getMessage() . "\n";
        }
    }

    protected function signer_cee() {
        $signHere = new DocuSign\eSign\Model\SignHere();
        $signHere->setAnchorString('DSS2........................................');
        $signHere->setAnchorYOffset(-20);
        $signHere->setAnchorXOffset(50);
        $signHere->setDocumentId("1");
        $signHere->setRecipientId("2");
        $signs2[] = $signHere;

        $init = new DocuSign\eSign\Model\InitialHere();
        $init->setAnchorString('DSI2....................');
        $init->setAnchorYOffset(-10);
        $init->setAnchorXOffset(50);
        $init->setDocumentId("1");
        $init->setRecipientId("2");
        $inits2[] = $init;

        $tabs = new DocuSign\eSign\Model\Tabs();
        $tabs->setSignHereTabs($signs2);
        $tabs->setInitialHereTabs($inits2);

        $signer = new DocuSign\eSign\Model\Signer();
        $signer->setEmail((config('app.env') == 'production') ? 'contracts@cee-realestate.com' : 'lukas@lumi-wd.com');
        $signer->setName(config('cee.director'));
        $signer->setRecipientId("2");
        $signer->setRoutingOrder('2');
        $signer->setTabs($tabs);

        return $signer;
    }

    protected function signer_client() {
        $signHere = new DocuSign\eSign\Model\SignHere();
        $signHere->setAnchorString('DSS1........................................');
        $signHere->setAnchorYOffset(-20);
        $signHere->setAnchorXOffset(50);
        $signHere->setDocumentId("1");
        $signHere->setRecipientId("1");
        $signs[] = $signHere;

        $init = new DocuSign\eSign\Model\InitialHere();
        $init->setAnchorString('DSI1....................');
        $init->setAnchorYOffset(-10);
        $init->setAnchorXOffset(50);
        $init->setDocumentId("1");
        $init->setRecipientId("1");
        $inits[] = $init;

        $tabs = new DocuSign\eSign\Model\Tabs();
        $tabs->setSignHereTabs($signs);
        $tabs->setInitialHereTabs($inits);

        // Add a signer to the envelope
        $signer = new DocuSign\eSign\Model\Signer();
        $signer->setEmail($this->objOrder->email);
        $signer->setName($this->objOrder->name . ' ' . $this->objOrder->surname);
        $signer->setRecipientId("1");
        $signer->setRoutingOrder('1');
        $signer->setTabs($tabs);

        return $signer;
    }
}