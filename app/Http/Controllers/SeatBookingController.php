<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
use Hamcrest\Core\HasToString;
use Illuminate\Console\View\Components\Alert;

class SeatBookingController extends Controller
{
    public function sendSeatPage1(Request $req){
        $title = $req->get('m_title');
        $showhall = $req->get('show_hall');
        $showtime1 = $req->get('time1');  
        //$showtime2 = $req->get('time2');  
       // $showtime3 = $req->get('time3');  
        $session = $req->get('session');
        //$session2 = $req->get('session2');
       // $session3 = $req->get('session3');
        $sdate = $req->get('show_date');
        $data= food::all();
        return view('seat_booking',['m_title'=>$title,'show_date'=>$sdate,'show_hall'=>$showhall,'show_time1'=>$showtime1,'show_session'=>$session,'fdata'=>$data ]);
        // if($req->get('time1')==  $showtime1){
            
        //     return view('seat_booking',['m_title'=>$title,'show_date'=>$sdate,'show_hall'=>$showhall,'show_time1'=>$showtime1,'show_session'=>$session,'fdata'=>$data ]);
        //    }
        // elseif($req->get('time2')== $showtime2){
            
        //     return view('seat_booking',['m_title'=>$title,'show_date'=>$sdate,'show_hall'=>$showhall,'show_time1'=>$showtime2,'show_session'=>$session2,'fdata'=>$data ]);
        // }
        // elseif($req->get('time3')== $showtime3){
        //     return view('seat_booking',['m_title'=>$title,'show_date'=>$sdate,'show_hall'=>$showhall,'show_time1'=>$showtime3,'show_session'=>$session3,'fdata'=>$data ]);
        // }
        // else {
        //     return redirect()->back();
        // }
    }
    public function sendSeatPage2(Request $req){
        $title = $req->get('m_title2');
        $showhall = $req->get('show_hall');
        $showtime2 = $req->get('time2');  
        $session = $req->get('session2');
        $shdate = $req->get('show_date2');
        $data= food::all();
        $enddate = "2023-01-06";
        return view('seat_booking',['m_title'=>$title,'show_date'=>$shdate,'show_hall'=>$showhall,'show_time1'=>$showtime2,'show_session'=>$session,'fdata'=>$data,'enddate'=>$enddate ]);



    }
    public function sendSeatPage3(Request $req){
        $title = $req->get('m_title3');
        $showhall = $req->get('show_hall');
        $showtime3 = $req->get('time3');  
        $session3 = $req->get('session3');
        $shdate = $req->get('show_date3');
        $data= food::all();
        return view('seat_booking',['m_title'=>$title,'show_date'=>$shdate,'show_hall'=>$showhall,'show_time1'=>$showtime3,'show_session'=>$session3,'fdata'=>$data ]);



    }
   
}
