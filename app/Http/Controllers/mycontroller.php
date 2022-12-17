<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\movie_list;
use Illuminate\Http\Resources\Json\PaginatedResourceResponse;

class mycontroller extends Controller
{
    function insert(Request $req){
        $title= $req->get('mtitle');
        $des= $req->get('mdes');
        $trailer= $req->get('mtrailer');
        $avialable= $req->get('mavailable');
        $images= $req->file('mimage')->getClientOriginalName();
        //move uploaded file
        $req->mimage->move(public_path('images'), $images);

        $mov=new movie_list();
        $mov->mtitle= $title;
        $mov->mdes= $des;
        $mov->mtrailer= $trailer;
        $mov->mavailable= $avialable;
        $mov->mimage= $images;
        $mov->save();
        return redirect('/');
    }

    function readdata(){
        $mdata= movie_list::all();
        return view('create', ['data'=>$mdata]);
    }
    function show_movies(){
        $mdata = movie_list::where('mavailable', 'no')->get();
              return view('comming_soon', ['cmdata'=>$mdata]);
       }
    


       
       public function now_show_movies()
        {
               $nowmdata = movie_list::where('mavailable', 'yes')->get();
              return view('now_showing', ['cmdata'=>$nowmdata]);
                    }
       public function index(){
        return movie_list::all();
       }
       public function MoviesList()
       {
        $moviesList = movie_list::select('Id', 'mtitle')->get();
        return view('test',compact('moviesList'));
        
       }
      





    function updateordelete(Request $req){
         $id = $req->get('id');
         $title = $req->get('title');
         $desc = $req->get('desc');
         $trailer = $req->get('trailer');
         $available = $req->get('available');
         if($req->get('update')=='Update'){
            return view('update',['mid'=>$id,'mtitle'=>$title,'mdes'=>$desc,'mtrailer'=>$trailer,'mavailable'=>$available]);
         }
       else{
        $mov = movie_list::find($id);
        $mov->delete();
       }
       return redirect('create');
    }
       function update(Request $req){
        $ID = $req->get('id');
        $TITLE = $req->get('title');
        $DESC = $req->get('desc');
        $TRAILER = $req->get('trailer');
        $AVAILABLE = $req->get('available');
        $mov = movie_list::find($ID);
        $mov->mtitle= $TITLE;
        $mov->mdes= $DESC;
        $mov->mtrailer= $TRAILER;
        $mov->mavailable= $AVAILABLE;
        $mov->save();
        return redirect('/');
       }


       
    }

