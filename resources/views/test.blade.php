@extends('welcome')
@section('content')



<h2>Input Button</h2>

<input type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop2" value="Click Me!">
<div class="modal fade" id="staticBackdrop2" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Add Movie Show Time</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertShowData" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-2">
            <select name="" id="" class="form-select form-select-m  text-primary border-primary" >
              @foreach($moviesList as $item)
              <option  value="{{$item->Id}}">{{$item->mtitle}}
              </option>
              @endforeach
            </select>
            </div>
            <div class="mb-2">
                <input type="date"  class="form-control" name="" id="">
            </div>
           
            <div class="mb-2">
                <label for="" class="fw-bold"> Add Show Time</label></br>
            <input type="radio" id="vehicle1" name="vehicle1" value="Bike">
                    <label for="vehicle1">12:00 PM </label><br>
                     <input type="radio" id="vehicle2" name="vehicle2" value="Car">
                    <label for="vehicle2">3:00 PM </label><br>
                    <input type="radio" id="vehicle3" name="vehicle3" value="Boat">
                    <label for="vehicle3">6:30 PM</label>
                    </div>
            <div class="mb-2">
                <input type="text" placeholder="Available" class="form-control" name="" id="">
                
            </div>
            <div class="mb-2">
                <input type="file" name="mimage" class="form-control" name="" id="">
            </div>
            <button type="submit" class="btn btn-outline-primary fw-bold fs-4 rounded-pill">Add Movie</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<aside>
<button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">Hello</button><br>
<button type="button" name="" id="" class="btn btn-primary btn-lg btn-block">Log out</button>
</div>
</aside>



@endsection