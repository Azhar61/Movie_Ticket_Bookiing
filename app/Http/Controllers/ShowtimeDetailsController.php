<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ShowtimeDetailsController extends Controller
{
    function  showtimedata(){
        
        $showtimedata = DB::table('showtimes')
            ->select('morning_show', 'afternoon_show' ,'night_show','screen_hall')
            ->where('movie_title', 'Babe Bhangra Paunde Ne')
            ->get();
            return view('movie_page')->with('showtimedata', $showtimedata);
    }
}
