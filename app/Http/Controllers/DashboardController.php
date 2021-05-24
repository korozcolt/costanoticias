<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visitor;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function dashboard(){
        $visitors = Visitor::select('date', DB::raw('count(*) as total'))->where('date', '>', today()->subMonth())->groupBy('date')->get();
        $chart_data = array();
        foreach ($visitors as $data)
        {
            array_push($chart_data, array($data->date->format('d.m.Y'), $data->total));
        }

        return view('dashboard', compact(['visitors', 'chart_data']));
    }
}
