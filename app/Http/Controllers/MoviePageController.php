<?php

namespace App\Http\Controllers;

use Illuminate\Console\View\Components\Alert;
use Illuminate\Http\Request;

class MoviePageController extends Controller
{
    function sendmoviepage(Request $req){
        $title = $req->get('m_title');
        $desc = $req->get('m_desc');
        $image = $req->get('m_image');
        return view('movie_page',['mtitle'=>$title,'mdes'=>$desc, 'mimage'=>$image]);
        }
     
}
