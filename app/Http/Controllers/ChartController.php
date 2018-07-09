<?php

namespace App\Http\Controllers;

use App\Order;
use App\UserMember;
use ConsoleTVs\Charts\Builder\Chart;
use ConsoleTVs\Charts\Facades\Charts;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index(){
//        $chart = Charts::database(UserMember::all(),'line','highcharts')
//            ->elementLabel("Total")
//            ->dimensions(1000,500)
//            ->responsive(false)
//            ->groupBy('fullname');



        $chart = Charts::multi('line','material')
            ->title("Order")
            ->dimensions(0,300)
            ->template("material")
           ->colors(['#2196F3','#F44336','#FFC107'])
            ->dataset('Element1',[5,30,100,130,230,140,200,70])
            ->dataset('Element1',[10,20,80,170,180,100,160,400])
            ->dataset('Element1',[17,40,90,100,240,180,140,150])
            ->labels(['1','2','3','4','5','6','7','8']);
        return view('admin.listAdmin.Chart.HighChart',['chart'=> $chart]);
    }
}
