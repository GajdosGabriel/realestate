<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class MostVisitedPagesChart extends Chart {
    public function __construct($arrData) {
        parent::__construct();

        $this->labels(array_keys($arrData))->options([
            'responsive' => true,
            'legend' => ['display' => false],
            'scales' => [
                'yAxes' => [
                    'display' => false
                ]
            ]
        ]);

        $this->dataset('Sample', 'pie', array_values($arrData))->options([
            'backgroundColor' => ['#C6B477', '#F2F0E8']
        ]);
    }
}
