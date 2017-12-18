<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TestController extends Controller
{
    public function date(){
        $dates = new \DateTime('+ 1week');
        echo $dates->format('d/m/Y');
        $now = Carbon::now()->addDay(10)->diffForHumans();
        echo "<br>";
        echo $now;
        echo "<br>";
        echo Carbon::now()->subMonth(5)->diffForHumans();
        echo "<br>";
        echo Carbon::now()->yesterday()->diffForHumans();
    }
}
