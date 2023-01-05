@extends('auth.dashboard')
@section('content')
<!-- <div class="container text-center bg-primary" style="margin-bottom: 0.5rem;">
            <h2 class="text-white p-3">Add Movie in List</h2>
        </div> -->
<center>
<!-- Button trigger modal -->
<button type="button" class="btn btn-outline-primary fw-bold fs-4 mt-5 btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add Movie
</button>


<!-- Modal Movie -->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Movie</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insertData" method="POST" enctype="multipart/form-data">
        @csrf
            <div class="mb-2">
                <input type="text" placeholder="Movie Title" class="form-control" name="mtitle" id="">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Movie Description" class="form-control" name="mdes" id="">
            </div>
            <div class="mb-2">
                <input type="text" placeholder="Trailer Link" class="form-control" name="mtrailer" id="">

            </div>
            <div class="mb-2">
                <input type="text" placeholder="Available" class="form-control" name="mavailable" id="">
                
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
</center>
<div class="container">
  <table id= "mytable" class="mt-5 table " >
    <thead class="bg-primary text-white fw-bold">
      <th>Id</th>
      <th>Title</th>
      <th>Description</th>
      <th>Trailer</th>
      <th>Avialable</th>
      <th>Image</th>
      <th>Update</th>
      <th>Delete</th>
      
    </thead>
    <tbody class="text-dark bg-light fs-4">
      @foreach($data as $item)
      <tr>
        <form action="updateordelete" method="GET">
        <td class="pt-2 " style="font-size: 18px ;"><input type="hidden" name="id" value="{{$item['Id']}}">{{$item['Id']}}</td>
        <td class="pt-2"style="font-size: 16px ; font-weight: bold;"><input type="hidden" name="title" value="{{$item['mtitle']}}">{{$item['mtitle']}}</td>
        <td class="pt-2"style="font-size: 16px ;"><input type="hidden" name="desc" value="{{$item['mdes']}}">{{$item['mdes']}}</td>
        <td class="pt-2"style="font-size: 16px ;"><input type="hidden" name="trailer" value="{{$item['mtrailer']}}">{{$item['mtrailer']}}</td>
        <td class="pt-2"style="font-size: 16px ;font-weight: bold;"><input type="hidden" name="available" value="{{$item['mavailable']}}">{{$item['mavailable']}}</td>
        <td><img src="images/{{$item['mimage']}}" width="100px" height="100px" alt=""></td>
        <td class="pt-2"><input type="submit" class="btn btn-outline-primary rounded-pill" value="Update" name="update"></td> 
       <td class="pt-2"><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete" name="Delete"></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
<script>
  $(document).ready(function() {
    $('#mytable').DataTable();
} );
 </script>
@endsection
