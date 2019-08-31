<?php

namespace App\Charts;

use ConsoleTVs\Charts\Classes\Chartjs\Chart;

class NewestUsersChart extends Chart {
    public function __construct($arrData) {
        parent::__construct();

        $this->labels(array_keys($arrData))->options([
            'responsive' => true,
            'legend' => ['display' => false]
        ]);

        $this->dataset('Sign-ups', 'line', array_values($arrData))->options([
            'borderColor' => '#C6B477'
        ]);
    }
}
