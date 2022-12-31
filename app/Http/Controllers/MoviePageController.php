<?php

namespace App\Http\Controllers;

use App\Models\showtime;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;
class MoviePageController extends Controller
{    




    function sendmoviepage(Request $req){
        $title = $req->get('m_title');
        $desc = $req->get('m_desc');
        $image = $req->get('m_image');
        $showtimedata = DB::table('showtimes')
            ->select('show_date','morning_show', 'afternoon_show' ,'night_show','screen_hall')
            ->where('movie_title', $title = $req->get ('m_title'))
           ->get();
        return view('movie_page')->with(['mtitle'=>$title,'mdes'=>$desc, 'mimage'=>$image ,'showtimedata'=>$showtimedata]);
        }
      
    
    public function  showtimedataa(){
      $showtimedata = DB::table('showtimes')
           ->select('morning_show', 'afternoon_show' ,'night_show','screen_hall')
            ->where('movie_title', 'Babe Bhangra Paunde Ne')
           ->get();
           return view('movie_page', compact('showtimedata'));
    }
        
    
     
}
