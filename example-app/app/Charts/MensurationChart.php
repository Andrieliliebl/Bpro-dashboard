<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class MensurationChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\PieChart
    {
        return $this->chart->pieChart()
            ->setTitle('')
            ->setSubtitle('')
            ->setColors(['#03B2E0', '#faa919','#79c04a'])
            ->setFontColor('#faf3e8')
            ->addData([10, 5, 4])
            ->setLabels(['Planejadas', 'Executadas', 'Aprovadas']);
    }
}
