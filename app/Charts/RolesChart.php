<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class RolesChart extends Chart {
    public function __construct($arrData) {
        parent::__construct();

        $this->labels($arrData->pluck('name'))->options([
            'responsive' => true,
            'legend' => ['display' => false],
            'scales' => [
                'yAxes' => [
                    'display' => false
                ]
            ]
        ]);

        $this->dataset('Sample', 'pie', $arrData->pluck('users_count'))->options([
            'backgroundColor' => ['#C6B477', '#F2F0E8']
        ]);
    }
}
