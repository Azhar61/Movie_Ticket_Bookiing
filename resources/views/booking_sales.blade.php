@extends('auth.dashboard')
@section('content')

<div class="col-lg-13">
  <table id= "mytable" class="mt-3 table " >
    <thead class="bg-primary text-white fw-bold">
      <th>Id</th>
      <th>Title</th>
      <th>Show Time</th>
      <th>Day Time</th>
      <th>Show Date</th>
      <th>Seats</th>
      <th>Name</th>
      <th>L Name</th>
      <th>Contact</th>
      <th>Cnic</th>
      <th>Email</th>
      <th>Drink</th>
      <th>PopCorn</th>
      <th>Drink Price</th>
      <th>PopCorn Price</th>
      <th>Seat price</th>
      <th>Total</th>
      <th>Delete</th>
      
    </thead>
    <tbody class="text-dark bg-light fs-4">
      @foreach($data as $item)
      <tr>
        <form action="delete" method="GET">
        <td class="pt-1 " style="font-size: 18px ;"><input type="hidden" name="id" value="{{$item['id']}}">{{$item['id']}}</td>
        <td class="pt-1"style="font-size: 16px ; font-weight: bold;">{{$item['movie']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['show_time']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['show_daytime']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['show_date']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['seats']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['name']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['last_name']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['contact_no']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['cnic_no']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['email']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['drinks']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['popcorn']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['drinks_price']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['popcorn_price']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['seats_price']}}</td>
        <td class="pt-1"style="font-size: 16px ;">{{$item['total_payment']}}</td>
       <td class="pt-1"><input type="submit" class="btn btn-outline-danger rounded-pill" value="Delete" name="Delete"></td>
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