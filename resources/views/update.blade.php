@extends('welcome')
@section('content')
<div class="container text-center bg-primary" style="margin-bottom: 0.5rem;">
            <h2 class="text-white p-3">Update Movie</h2>
        </div>
        <div class="col-md-4 m-auto  mt-3 p-2">
           
            <form action="updatedata" method="get">
            <div>
                <label for="">Movie Title</label>
                <input type="text" name="title" value="{{$mtitle}}" class="form-control" id="">
            </div>
            <div>
                <label for="">Movie Description</label>
                <input type="text" name="desc" value="{{$mdes}}"class="form-control" id="">
            </div>
            <div>
                <label for="">Movie Trailer</label>
                <input type="text" name="trailer"value="{{$mtrailer}}" class="form-control" id="">
            </div>
            <div>
                <label for="">Movie Avialable</label>
                <input type="text" name="available"value="{{$mavailable}}" class="form-control" id="">
            </div>
            <div>
                <input type="hidden" name="id"value="{{$mid}}" class="form-control" id="">
            </div>
            <br>
            <button type="submit" class="btn btn-outline-primary rounded-pill">Update</button>
            
            </form>
        </div>
@endsection