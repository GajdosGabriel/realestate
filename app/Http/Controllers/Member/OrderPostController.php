<?php

namespace App\Http\Controllers\Member;

use App\Http\Controllers\Controller;
use App\Http\Requests\Step1Request;
use App\Http\Requests\Step2Request;
use App\Http\Requests\Step3Request;
use App\Order;
use Auth;
use DB;
use Exception;
use App\Classes\Contracts\PRContract;
use App\Classes\Contracts\TDO2Contract;
use App\Classes\Contracts\SPContract;
use Mail;
use App\PRSerial;
use App\Mail\OrderMail;

class OrderPostController extends Controller {
    public function step1(Step1Request $objRequest) {

        // Store Order in DB
        try {
            $objOrder = $this->step1Store($objRequest);
        }
        catch (Exception $objException) {
            flash('<p class="text-center"><span class="lead">Oops. Something went wrong!</span><br>We received the error message and are working on the fix.<br>Please try again later.</p>')->error()->important();

            return back();
        }

        // Create and store contract PDF on hosting
        if ($objOrder->tdo) $objContract = new TDO2Contract($objOrder);
        elseif ($objOrder->sp) $objContract = new SPContract($objOrder);
        else $objContract = new PRContract($objOrder);

        $objContract->save();

        // Send contract to DocuSign
        $objContract->send((config('app.env') == 'production') ? true : false);

        // Move User to STEP 2
        Auth::user()->step = 2;
        Auth::user()->save();

        // Notification
        Mail::to((config('app.env') == 'production') ? 'info@cee-realestate.com' : 'gabriel@cee-realestate.com')->send(new OrderMail($objOrder));

        return redirect(route('member.invest'));
    }

    public function step2(Step2Request $objRequest) {
        Auth::user()->step = 3;
        Auth::user()->save();

        return redirect(route('member.invest'));
    }

    public function step3(Step3Request $objRequest) {
        Auth::user()->step = 1;
        Auth::user()->save();

        return redirect(route('member.investments'));
    }

    private function step1Store($objRequest) {
        $objOrder = DB::transaction(function () use ($objRequest) {
            $strDatetime = date('Y-m-d H:i:s');

            $objOrder = Order::create([
                'user_id' => Auth::user()->id,
                'name' => $objRequest->name,
                'surname' => $objRequest->surname,
                'street' => $objRequest->street,
                'zip' => $objRequest->zip,
                'city' => $objRequest->city,
                'region' => $objRequest->region,
                'country' => $objRequest->country,
                'nationality' => $objRequest->nationality,
                'email' => (config('app.env') == 'production') ? $objRequest->email : 'lukas@cee-realestate.com',
                'government_id' => $objRequest->government_id,
                'phone_code' => $objRequest->phone_code,
                'phone' => $objRequest->phone,
                'created_at' => $strDatetime,
                'contract' => $strDatetime . '.pdf'
            ]);


            // Company details
            if (isset($objRequest->company['details']) and $objRequest->company['details'] == 'on') {
                $objOrder->company()->create([
                    'name' => $objRequest->company['name'],
                    'id_number' => $objRequest->company['id_number'],
                    'street' => $objRequest->company['street'],
                    'zip' => $objRequest->company['zip'],
                    'city' => $objRequest->company['city'],
                    'region' => $objRequest->company['region'],
                    'country' => $objRequest->company['country'],
                ]);
            }

            // Joint details
            if (isset($objRequest->joint['details']) and $objRequest->joint['details'] == 'on') {
                $objOrder->joint()->create([
                    'name' => $objRequest->joint['name'],
                    'government_id' => $objRequest->joint['id'],
                ]);
            }

            // Title Deed Ownership
            if ($objRequest->type == 'tdo') {
                $objOrder->tdo()->create([
                    'project_id' => $objRequest->tdo['project'],
                    'shares' => $objRequest->tdo['shares']
                ]);
            }

            // Silent partner
            if ($objRequest->type == 'sp') {
                $objOrder->sp()->create([
                    'project_id' => $objRequest->sp['project'],
                    'shares' => $objRequest->sp['shares'],
                    'per_share' => $objRequest->input('per_share')
                ]);
            }

            // Pooled resources
            if ($objRequest->type == 'pr') {
                $objOrder->pr()->create([
                    'number' => $objRequest->pr['number'],
                    'duration' => $objRequest->pr['duration'],
                ]);

                if ($objRequest->pr['duration'] == 2) $series = 'A';
                elseif ($objRequest->pr['duration'] == 3) $series = 'B';
                else $series = 'C';

                // Assign serial numbers
                $intMax = PRSerial::where('series', $series)->max('number') ?? 249;
                $intFirst = $intMax + 1;
                for ($i = $intFirst; $i <= $intMax + $objRequest->pr['number']; $i++) {
                    $arr[] = [
                        'pr_id' => $objOrder->pr->id,
                        'series' => $series,
                        'number' => $i
                    ];
                }

                PRSerial::insert($arr);
            }
            return $objOrder;
        });
        return $objOrder->load(['company', 'joint', 'tdo.project', 'sp.project', 'pr.serials']);
    }
}