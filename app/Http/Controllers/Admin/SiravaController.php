<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use GuzzleHttp;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Charts\MostVisitedPagesChart;

class SiravaController extends Controller {
    public function index() {

        // Most visited pages
        $objGuzzle = new GuzzleHttp\Client();
        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/activity');
        $arrData = json_decode($objResponse->getBody(), true);
        $arrChartData = collect($arrData)->mapWithKeys(function ($item) {
            return [$item['page']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Leads glamping
        if (isset($_GET['search'])) $url = 'https://www.siravapark.com/api/leads?search=' . $_GET['search'];
        else $url = 'https://www.siravapark.com/api/leads?page=' . ($_GET['page'] ?? 1);
        $objResponse = $objGuzzle->request('GET', $url);
        $arrLeads = json_decode($objResponse->getBody(), true);
        $objPaginator = new LengthAwarePaginator($arrLeads['data'], $arrLeads['total'], 50);
        $objPaginator->setPath('/admin/sirava');

        return view('admin/sirava/index')->with([
            'arrData' => $arrData,
            'objPaginator' => $objPaginator,
            'objChart' => $objChart
        ]);
    }

    public function glamping() {

        // Most visited pages
        $objGuzzle = new GuzzleHttp\Client();
        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/activity');
        $arrData = json_decode($objResponse->getBody(), true);
        $arrChartData = collect($arrData)->mapWithKeys(function ($item) {
            return [$item['page']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Leads glamping
        if (isset($_GET['search'])) $url = 'https://www.siravapark.com/api/glamping?search=' . $_GET['search'];
        else $url = 'https://www.siravapark.com/api/glamping?page=' . ($_GET['page'] ?? 1);
        $objResponse = $objGuzzle->request('GET', $url);
        $arrLeads = json_decode($objResponse->getBody(), true);
        $objPaginator = new LengthAwarePaginator($arrLeads['data'], $arrLeads['total'], 50);
        $objPaginator->setPath('/admin/sirava');

        return view('admin/sirava/glamping')->with([
            'arrData' => $arrData,
            'objPaginator' => $objPaginator,
            'objChart' => $objChart
        ]);
    }


    public function holiday() {

        // Most visited pages
        $objGuzzle = new GuzzleHttp\Client();
        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/activity');
        $arrData = json_decode($objResponse->getBody(), true);
        $arrChartData = collect($arrData)->mapWithKeys(function ($item) {
            return [$item['page']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Leads
        if (isset($_GET['search'])) $url = 'https://www.siravapark.com/api/leadsBoulevard?search=' . $_GET['search'];
        else $url = 'https://www.siravapark.com/api/leadsBoulevard?page=' . ($_GET['page'] ?? 1);
        $objResponse = $objGuzzle->request('GET', $url);
        $arrLeads = json_decode($objResponse->getBody(), true);
        $objPaginator = new LengthAwarePaginator($arrLeads['data'], $arrLeads['total'], 50);
        $objPaginator->setPath('/admin/sirava/holiday');

        return view('admin/sirava/holiday')->with([
            'arrData' => $arrData,
            'objPaginator' => $objPaginator,
            'objChart' => $objChart
        ]);
    }

    public function re() {

        // Most visited pages
        $objGuzzle = new GuzzleHttp\Client();
        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/activity');
        $arrData = json_decode($objResponse->getBody(), true);
        $arrChartData = collect($arrData)->mapWithKeys(function ($item) {
            return [$item['page']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Real Estate sign ups
        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/sign-ups?page=' . ($_GET['page'] ?? 1));
        $arrRE = json_decode($objResponse->getBody(), true);
        $objPaginator = new LengthAwarePaginator($arrRE['data'], $arrRE['total'], 50);
        $objPaginator->setPath('/admin/sirava');

        return view('admin/sirava/re')->with([
            'arrData' => $arrData,
            'objPaginator' => $objPaginator,
            'objChart' => $objChart
        ]);
    }

    public function thermalSpa() {

        // Most visited pages
        $objGuzzle = new GuzzleHttp\Client();
        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/activity');
        $arrData = json_decode($objResponse->getBody(), true);
        $arrChartData = collect($arrData)->mapWithKeys(function ($item) {
            return [$item['page']['name'] => $item['count']];
        });
        $objChart = new MostVisitedPagesChart($arrChartData->toArray());

        // Real Estate sign ups
        $objResponse = \DB::table('leads_spa')->orderBy('id','desc')->paginate(50);
//        $objResponse = $objGuzzle->request('GET', 'https://www.siravapark.com/api/sign-ups?page=' . ($_GET['page'] ?? 1));
        $arrRE = $objResponse;
        $objPaginator = new LengthAwarePaginator($arrRE['data'], $arrRE['total'], 50);
        $objPaginator->setPath('/admin/sirava');

        return view('admin/sirava/thermal')->with([
            'arrData' => $arrData,
            'objPaginator' => $objResponse,
            'objChart' => $objChart
        ]);
    }
}