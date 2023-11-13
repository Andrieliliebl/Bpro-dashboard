<?php

namespace App\Http\Controllers;

use App\Charts\ActivityChart;
use App\Charts\MensurationChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(ActivityChart $activityChart, MensurationChart $mensurationChart)
    {
        return view(
            'welcome',
            [
                'activityChart' => $activityChart->build(),
                'mensurationChart' => $mensurationChart->build(),
            ]
        );
    }
}
