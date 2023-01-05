<?php

namespace App\Http\Controllers;

use App\Models\Bookings;
use Illuminate\Http\Request;
use App\Mail\BookingMail;
use Illuminate\Support\Facades\Mail;
class BookingController extends Controller
{
    public function bookSeat(Request $request){
        $request->validate([
            'firstName' => 'required',
            'lastName' => 'required',
            'email' => 'required|email',
            'cnicNo' => 'required',
            'phoneNo' => 'required',
            'seatCount' => 'required',
            'showdate' => 'required',
        ]);
        $firstName = $request->get('firstName');
        $lastName = $request->get('lastName');
        $email = $request->get('email');
        $cnic = $request->get('cnicNo');
        $phone = $request->get('phoneNo');
        $seatcount = $request->get('seatCount');
        $mtitle = $request->get('mTitle');
        $showtime = $request->get('ShowTime');
        $shall = $request->get('showHall');
        $daytime = $request->get('dayTime');
        $showdate = $request->get('showdate');
        $totalPayment = $request->get('totalpayment');
        $cd_count = $request->get('cdcount');
        $pc_count = $request->get('pccount');
        $seatPrice = $request->get('seatprice');
        $popcornPrice = $request->get('popcprice');
        $cdprice = $request->get('colddrinkprice');
         
        ///
        $book=new Bookings();
        $book->name= $firstName;
        $book->last_name= $lastName;
        $book->email= $email;
        $book->cnic_no= $cnic;
        $book->contact_no= $phone;
        $book->movie= $mtitle;
        $book->show_hall= $shall;
        $book->seats= $seatcount;
        $book->show_time= $showtime;
        $book->show_daytime= $daytime;
        $book->show_date= $showdate;
        $book->total_payment= $totalPayment;
        $book->drinks= $cd_count;
        $book->popcorn= $pc_count;
        $book->seats_price= $seatPrice;
        $book->popcorn_price= $popcornPrice;
        $book->drinks_price= $cdprice;
        $book->save();
        // return view('booking_done');




        // $dataa = [
        // 'firstname' => $request->firstName,
        // 'lastname' => $request->lastName,
        // 'emails' => $request->email,
        // 'cnic' => $request->cnicNo,
        // 'phone' =>$request->phoneNo,
        // 'seatcount' => $request->seatCount,
        // 'mtitl' => $request->mTitle,
        // 'showtime' => $request->ShowTime,
        // 'shall' => $request->showHall,
        // 'daytime' => $request->dayTime,
        // 'showDate' => $request->showdate,
        // 'totalPayment' => $request->totalpayment,
        // 'cd_count' => $request->cdcount,
        // 'pc_count' => $request->pccount,
        // 'seatPrice' => $request->seatprice,
        // 'popcornPrice' => $request->popcprice,
        // 'colddrinkPrice' => $request->colddrinkprice,
        // ];
       
        // $book=new Bookings();
        // $book->name= $data['firstName'];
        // $book->last_name= $data['lastName'];
        // $book->email= $data['email'];
        // $book->cnic_no= $data['cnic'];
        // $book->contact_no= $data['phone'];
        // $book->movie= $data['mtitle'];
        // $book->show_hall= $data['shall'];
        // $book->seats= $data['seatcount'];
        // $book->show_time= $data['showtime'];
        // $book->show_daytime= $data['daytime'];
        // $book->show_date= $data['showdate'];
        // $book->total_payment= $data['totalPayment'];
        // $book->drinks= $data['cd_count'];
        // $book->popcorn= $data['pc_count'];
        // $book->seats_price= $data['seatPrice'];
        // $book->popcorn_price= $data['popcornPrice'];
        // $book->drinks_price= $data['colddrinkPrice'];
        // $book->save();
        // $data = [
        //     'fname' =>$firstName,
        //     'lname' => $lastName,
        //     'cnicn' => $cnic,
        //     'contactn' => $phone,
        //     'seatcount' => $seatcount,
        //     'movie' => $mtitle,
        //     'showtime' => $showtime,
        //     'showhall' => $shall,
        //     'dtime' => $daytime,
        //     'sdate' => $showdate,
        //      'email' => $email,
        //      'tpayment' => $totalPayment,
        //      'cdcount' => $cd_count,
        //      'pccount' => $pc_count,
        //      'seatprice' => $seatPrice,
        //      'popprice' => $popcornPrice,
        //      'cdprice' => $cdprice,
        // ];
        
        // Mail::send('BookingEmail_Template', $data, function($message) use ($data) {
        //     $message->from('redlions289@gmail.com');
        //     $message->to($data['email']);
        //     $message->subject('Booking Confirmation');
        // });
        Mail::to($email)->send(new BookingMail($firstName,$lastName,$email,$cnic,$phone,$seatcount, $mtitle,$showtime,$shall,$daytime ,$showdate,$totalPayment,$cd_count,$pc_count,$seatPrice,$popcornPrice,$cdprice ));
        return view('booking_done',['emaildata'=>$email]);
    

    }
    public function readdata (){
        $sales= Bookings::all();
        return view('booking_sales', ['data'=>$sales]);
    }
    

}
