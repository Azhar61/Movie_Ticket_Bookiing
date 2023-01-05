<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\food;
class FoodController extends Controller
{
    function insertPrice(Request $req){
        $drinkprice= $req->get('cdprice');
        $popcornprice= $req->get('pcprice');
        
//Save data to the table
        $mov=new food();
        $mov->drink_price= $drinkprice;
        $mov->popcorn_price= $popcornprice;
        $mov->save();
        return redirect('fastFood');
    }
//Read Data from table
          function readdata(){
               $data= food::all();
               return view('fastFood', ['fdata'=>$data]);
                  }
                  function foodprice(){
                    $data= food::all();
                    return view('seat_booking', ['fdata'=>$data]);
                       }
}
