@extends('welcome')
@section('content')
<div class="container text-center bg-primary" style="margin-bottom: 0.5rem;">
            <h2 class="text-white p-3">Add Foods Price's</h2>
        </div>
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary fw-bold fs-4 mt-5 btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Price
</button>

<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Fast Foods Items</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertPriceData" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-2">
                <input type="number" placeholder="Cold Drink Price" class="form-control" name="cdprice" id="">
            </div>
            <div class="mb-2">
                <input type="number" placeholder="PopCorn Price" class="form-control" name="pcprice" id="">
            </div>
            <button type="submit" class="btn btn-outline-primary fw-bold fs-4 ">Add Price</button>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
</center>
<div class="container">
  <table class="table mt-5">
    <thead class="bg-primary text-white fw-bold">
      <th>Id</th>
      <th>ColdDrink Price</th>
      <th>PopCorn Price</th>
      <th>Action</th>
      <th>Action</th>
      
    </thead>
    <tbody class="text-dark bg-light fs-4">
      @foreach($fdata as $item)
      <tr>
        <form action="UpdateorDelete" method="get">
        <td class="pt-2 " style="font-size: 18px ;"><input type="hidden" name="id" value="{{$item['Id']}}">{{$item['id']}}</td>
        <td class="pt-2"style="font-size: 16px ; font-weight: bold;"><input type="number" name="cdprice" value="{{$item['drink_price']}}">{{$item['drink_price']}}</td>
        <td class="pt-2"style="font-size: 16px ; font-weight: bold;"><input type="number" name="pcornprice" value="{{$item['popcorn_price']}}">{{$item['popcorn_price']}}</td>
        <td class="pt-2"><input type="submit" class="btn btn-outline-primary rounded-pill" value="Update" name="update"></td> 
       <td class="pt-2"><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete" name="update">
    </td>
    </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>









@endsection