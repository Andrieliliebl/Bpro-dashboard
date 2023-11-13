<?php

namespace App\Charts;

use ArielMejiaDev\LarapexCharts\LarapexChart;

class ActivityChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\DonutChart
    {
        return $this->chart->donutChart()
            ->setTitle('')
            ->setSubtitle('')
            ->setColors(['#03B2E0', '#faa919', '#79c04a','#ee4475'])
            ->setFontColor('#faf3e8')
            ->addData([04, 02, 03, 01])
            ->setLabels(['Pendentes', 'Concluidas', 'Aprovadas', 'Reprovadas']);
    }
}
