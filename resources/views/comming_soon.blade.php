@extends('layout')
@section('content')
    <section>
        <div class="container-fluid text-center bg-primary " style="margin-top: 3rem;">
            <h2 class="text-white p-3">Commimg Soon Movies</h2>
        </div>
    </section>
    <div class="container d-flex p-5 flex-wrap ">
    @foreach($cmdata as $item)
        <div class="card p-2 m-3" style="width: 16rem; ">
            <img class="card-img-top" src="images/{{$item['mimage']}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$item['mtitle']}}</h5>
             <p class="card-text text-muted">{{$item['mdes']}}</p>
              <a href="{{$item['mtrailer']}}" target="_blank" rel="noopener noreferrer" class="btn btn-primary" ><i class="fa fa-play-circle m-1" aria-hidden="true"></i>Trailer</a>
              
            </div>
          </div>
          @endforeach 
    </div>
    @endsection