<?php

namespace App\Http\Controllers;

use App\Models\showtime;
use App\Models\movie_list;
use Illuminate\Http\Request;

class ShowTimeController extends Controller
{
    function insertShow(Request $req){
        $title= $req->get('mtitle');
        $shall= $req->get('showhall');
        $sdate= $req->get('date');
        $mtime= $req->get('morning');
        $atime= $req->get('afternoon');
        $ntime= $req->get('night');

        $stime=new showtime();
        $stime->movie_title= $title;
        $stime->screen_hall= $shall;
        $stime->show_date= $sdate;
        $stime->morning_show= $mtime;
        $stime->afternoon_show= $atime;
        $stime->night_show= $ntime;
        $stime->save();
        return redirect('add_showtime');
    }


    public function readdata (){
        $mdata= showtime::all();
        $moviesList = movie_list::select('Id', 'mtitle')->get();
        return view('add_showtime')->with(['data' => $mdata, 'moviesList' => $moviesList]);
        //return view('add_showtime', ['data'=>$mdata]);
    }

    ///public function MoviesList()
       //{
       /// $moviesList = movie_list::select('Id', 'mtitle')->get();
       // return view('add_showtime',compact('moviesList'));
        
      // }
       

}
