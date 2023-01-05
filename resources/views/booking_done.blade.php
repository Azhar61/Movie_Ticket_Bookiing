@extends('layout')
@section('content')

<section class="jumbotron text-center mt-4">
        <div class="container">
          <!-- <h1 class="jumbotron-heading " style="color: blue;"><i class="fas fa-ticket-alt me-3 m-1"></i>Bookit</h1> -->
          <img src="{{asset('/home_images/Bookit copy-1.jpg')}}" alt="" srcset="" style="width: 300px; height:300px">
          <p class="lead text-muted">Your Booking Has Been Placed Please Check Your {{$emaildata}}</p>
          <p>
            <a href="contact" class="btn btn-primary my-2">Contact us</a>
            <a href="/" class="btn btn-secondary my-2">Home</a>
          </p>
        </div>
      </section>

@endsection