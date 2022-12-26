@extends('layout')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide pointer-event mt-4" data-ride="carousel">
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="d-block w-100" src="{{asset('/home_images/qAHhNCosiF8hd.jpg')}}" data-src="" alt="900x400" style="width: 900px; height: fit-content;" data-holder-rendered="true">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="{{asset('/home_images/pEWqOAcYgpQhd.jpg')}}" data-src="" alt="900x400" style="width: 900px; height:fit-content;" data-holder-rendered="true">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
  <div class="col-lg-12 m-3 p-2" style="font-family: Poppins ;"> <h1 class="h2">Book Movie Tickets and Refreshment Online Through Bookit</h1> 
    <p>Bookit offers movie tickets online for a variety of cinemas across major cities of Pakistan. With Bookit, you can check movie schedules in different cinemas, review real-time seating plans to select your desired seat, and even watch movie trailers on our website. Now you don’t have to worry about standing in long queues or missing a movie show by reaching the cinema late.</p> 
    <h2 class="h3">Methods of Payment On BookiT</h2> <p>Bookit offers different methods of payment to buy movie tickets online. Some of the methods to pay for movie tickets are mentioned below:</p> 
    <ul> 
      <li> 
        <p >Jazz Cash</p> </li> 
        <li> <p >Easy Paisa</p> 
        </li> 
        <li> <p >Credit/Debit Cards</p> 
      </li> 
      </ul>
     </div>   

@endsection