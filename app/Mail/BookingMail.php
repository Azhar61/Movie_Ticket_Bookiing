<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Queue\SerializesModels;

class BookingMail extends Mailable
{    
    public $firstName ;
    public $lastName ;
public $email;
public  $cnic ;
public       $phone ;
public       $seatcount;
public     $mtitle ;
public     $showtime;
public     $shall;
public     $daytime;
public     $showdate;
public     $totalPayment;
public    $cd_count;
public    $pc_count;
public   $seatPrice;
public   $popcornPrice ;
public $cdprice ;
         
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($firstName,$lastName,$email,$cnic,$phone,$seatcount, $mtitle,$showtime,$shall,$daytime ,$showdate,$totalPayment,$cd_count,$pc_count,$seatPrice,$popcornPrice,$cdprice )
    {
       $this->firstName =$firstName;
       $this->lastName=$lastName;
       $this->email= $email;
       $this->cnic= $cnic;
       $this->phone= $phone;
      $this->seatcount=  $seatcount; 
      $this->mtitle=  $mtitle;
      $this->showtime=  $showtime;
      $this->shall=  $shall;
      $this->daytime=  $daytime ;
      $this->showdate = $showdate;
     $this->totalPayment=   $totalPayment;
      $this->cd_count=  $cd_count;
      $this->pc_count=  $pc_count;
      $this->seatPrice=  $seatPrice;
       $this->popcornPrice= $popcornPrice;
      $this->cdprice= $cdprice ;
    }

    /**
     * Get the message envelope.
     *
     * @return \Illuminate\Mail\Mailables\Envelope
     */
    public function envelope()
    {
        return new Envelope(
            from: new Address('jeffrey@example.com', 'Jeffrey Way'),
            subject: 'Booking Mail',
        );
    }

    /**
     * Get the message content definition.
     *
     * @return \Illuminate\Mail\Mailables\Content
     */
    public function content()
    {
        return new Content(
            markdown: 'emails.bookingmail',
        );
    }
    

    /**
     * Get the attachments for the message.
     *
     * @return array
     */
    public function attachments()
    {
        return [];
    }
}
