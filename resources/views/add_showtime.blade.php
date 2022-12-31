@extends('welcome')
@section('content')


<center>
<button type="button" class="btn btn-outline-primary fw-bold fs-4 mt-5 btn-block" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Add ShowTime
</button>

<!-- Add ShowTime Model-->
<div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
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
            <select name="mtitle" id="" class="form-select form-select-m  text-primary border-primary" >
              @foreach($moviesList as $item1)
              <option  value="{{$item1->mtitle}}">{{$item1->mtitle}}
              </option>
              @endforeach
            </select>
            </div>
            <div class="mb-2">
            <select name="showhall" id="" class="form-select form-select-m  text-primary border-primary" >
              <option  value="Grand Hall">Grand Hall
              </option>
              <option  value="Yellow Hall">Yellow Hall
              </option>
              <option  value="Red Hall">Red Hall
              </option>
              
            </select>
            </div>
            <div class="mb-2">
            <label for="date">Date</label>
                <input type="date"  class="form-control" name="date" id="">
            </div>
            <div class="mb-2">
              <label for="morning">Morning</label>
                <input type="time" placeholder="Morning" class="form-control" name="morning" id="">
            </div>
              
            <div class="mb-2">
            <label for="afternoon">Afternoon</label>
                <input type="time" placeholder="Afternoon" class="form-control" name="afternoon" id="">
            </div>
            <div class="mb-2">
            <label for="night">Evening</label>
                <input type="time" placeholder="Night" class="form-control" name="night" id="">
            </div class="mt-2">
            <button type="submit" class="btn btn-outline-primary fw-bold fs-4 block-pill">Add Show Time</button>
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
      <th>Hall</th>
      <th>Date</th>
      <th>Morning</th>
      <th>Afternoon</th>
      <th>Night</th>
      <th>Update</th>
      <th>Delete</th>
      
    </thead>
    <tbody class="text-dark bg-light fs-4">
      @foreach($data as $item2)
      <tr>
        <form action="" method="">
        <td class="pt-2 " style="font-size: 18px ;"><input type="hidden" name="id" value="{{$item2['id']}}">{{$item2['id']}}</td>
        <td class="pt-2"style="font-size: 16px ; font-weight: bold;"><input type="hidden" name="title" value="{{$item2['movie_title']}}">{{$item2['movie_title']}}</td>
        <td class="pt-2"style="font-size: 16px ;" ><input type="hidden" name="desc" value="{{$item2['screen_hall']}}">{{$item2['screen_hall']}}</td>
        <td class="pt-2"style="font-size: 16px ;"><input type="hidden" name="desc" value="{{$item2['show_date']}}">{{$item2['show_date']}}</td>
        <td class="pt-2 time1"style="font-size: 16px ;" ><input type="hidden" name="trailer" value="{{$item2['morning_show']}} "id="mtime" class="times1">{{$item2['morning_show']}}</td>
        <td class="pt-2 time2"style="font-size: 16px ;" ><input type="hidden" name="trailer" value="{{$item2['afternoon_show']}}" id="atime">{{$item2['afternoon_show']}}</td>
        <td class="pt-2 time3"style="font-size: 16px ;" ><input type="hidden" name="trailer" value="{{$item2['night_show']}}" id="ntime">{{$item2['night_show']}}</td>
    
        <td class="pt-2"><input type="submit" class="btn btn-outline-primary block-pill" value="Update" name="update"></td> 
       <td class="pt-2"><input type="submit" class="btn btn-outline-danger block-pill" value="Delete" name="Delete"></td>
        </form>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script>
  function convertTime(timeString) {
  const timeParts = timeString.split(":");
  let hours = timeParts[0];
  let minutes = timeParts[1];
  let seconds = timeParts[2];

  if (hours > 12) {
    hours -= 12;
    timeString = hours + ":" + minutes + ":" + seconds + " PM";
  } else {
    timeString = hours + ":" + minutes + ":" + seconds + " AM";
  }

  return timeString;
  }
const timeString1 = document.getElementById("mtime").value;;
const convertedTime1 = convertTime(timeString1);
const timeString2 = document.getElementById("atime").value;;
const convertedTime2 = convertTime(timeString2);
const timeString3 = document.getElementById("ntime").value;;
const convertedTime3 = convertTime(timeString3);

//const timeElement1 = document.querySelector('.time1');
//const timeElement2 = document.querySelector('.time2');
//const timeElement3 = document.querySelector('.time3');
//timeElement1.textContent = convertedTime1;
//timeElement2.textContent = convertedTime2;
//timeElement3.textContent = convertedTime3;

const item1 = document.querySelectorAll('.time1');
item1.forEach(function(time1) {
 // time1.textContent = convertedTime1;
});
const item2 = document.querySelectorAll('.time2');
item2.forEach(function(time2) {
  //time2.textContent = convertedTime2;
});
const item3 = document.querySelectorAll('.time3');
item3.forEach(function(time3) {
  //time3.textContent = convertedTime3;
});
</script>



@endsection