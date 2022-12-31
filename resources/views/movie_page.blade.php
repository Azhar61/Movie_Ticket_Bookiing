@extends('layout')
@section('content')
<div class="container-fluid bg-primary p-4 ">
	<h3 class="text-white">{{$mtitle}}</h3> </div>
<div class="container">
	<div class="bg-light shadow-md rounded p-4">
		<div class="row p-3">
			<div class="col-md-4"> <img src="images/{{$mimage}}" class="img-fluid rounded animate__animated animate__zoomIn"> </div>
			<div class="col-md-8">
				<h3 class="text-5 font-weight-600 d-block text-dark animate__animated animate__bounceInLeft">{{$mtitle}}</h3>
				<div class="d-flex justify-content-between align-items-center">
					<!--<div class="movie-duration"> <span class="text-muted">02:15 AM duration</span> </div>  -->
					<!-- <div class="d-flex justify-content-start align-items-center"> <img src="https://BookiTpk.s3.eu-central-1.amazonaws.com/static/images/imdb.jpg" alt="" class="imdb_image img-fluid"> <span class="text-muted ml-1">6.4</span> </div> -->
				</div>
				<div class="genre mt-2"> <span class="badge badge-light p-2 mx-1 rounded font-weight-400">Action</span> <span class="badge badge-light p-2 mx-1 rounded font-weight-400">Thriller</span> <span class="badge badge-light p-2 mx-1 rounded font-weight-400">Adventure</span> </div>
				<div class="row mt-3">
					<div class="col-md-12">
						<ul id="myTab" role="tablist" class="nav nav-tabs sticky-top smooth-scroll bg-white">
							<li class="nav-item px-2"><a id="first-tab" data-toggle="tab" href="#first" role="tab" aria-controls="first" aria-selected="true" class="nav-link active">Book Ticket</a> </li>
							<li class="nav-item px-2"><a id="second-tab" data-toggle="tab" href="#second" role="tab" aria-controls="second" aria-selected="false" class="nav-link">Movie Details</a> </li>
						</ul>
						@foreach($showtimedata as $item)
						<div id="myTabContent" class="tab-content my-3">
							<div id="first" role="tabpanel" aria-labelledby="first-tab" class="tab-pane fade show active">
								<div class="form-row py-3 openDetailPanelA">
									<div class="col-md-12">
										<select name="date" class="form-control">
											<option value="">{{$item->show_date}}</option>
											<!-- <option value="">20 October, 2022</option> -->
										</select>
									</div>
								</div>
								
								<div class="openDetailPanelA">
									<h4 class="text-4 font-weight-600 d-block text-dark">Morning Show</h4>
									<p class="text-muted mt-2 mb-1">{{$item->screen_hall}}</p>
									<div class="form-row movie-time">
										<div class="form-check col-md-3 col-4">
											<label class="form-check-label border rounded-lg p-2 w-100 text-center mb-2" id="time1.1">
												<input type="radio" id="time1" name="time1" class="form-check-input animate__animated animate__bounceIn" value="{{$item->morning_show}}"></label>
										</div>
									</div>
									<!---->
									<h4 class="text-4 font-weight-600 d-block text-dark">Afternoon Show</h4>
									<p class="text-muted mt-2 mb-1">{{$item->screen_hall}}</p>
									<div class="form-row movie-time">
										<div class="form-check col-md-3 col-4">
											<label class="form-check-label border rounded-lg p-2 w-100 text-center mb-2" id="time2.1">
												<input type="radio" id="time2"  name="time2" class="form-check-input animate__animated animate__bounceIn" value="{{$item->afternoon_show}}"></label>
										</div>
									</div>
									<!---->
									<!---->
									<!---->
									<h4 class="text-4 font-weight-600 d-block text-dark">Night Show</h4>
									<p class="text-muted mt-2 mb-1">{{$item->screen_hall}}</p>
									<div class="form-row movie-time">
										<div class="form-check col-md-3 col-4">
											<label class=" form-check-label border rounded-lg p-2 w-100 text-center mb-2" id="time3.1">
												<input type="radio" id="time3" name="time3" class="form-check-input animate__animated animate__bounceIn" value="{{$item->night_show}}"></label>
										</div>
									</div>
									
									
								</div>
								@endforeach
								<!---->
							</div>
							<div id="second" role="tabpanel" aria-labelledby="second-tab" class="tab-pane fade">
								<div class="row">
									<div class="col-md-12">
										<h3 class="text-5 font-weight-600 d-block text-dark">Synoposis</h3>
										<p>{{$mdes}}</p>
									</div>
								</div>
								<!---->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<h1 class="h2">Book Movie Tickets and Refreshment Online Through BookiT</h1>
				<p>BookiT offers movie tickets online for a variety of cinemas across major cities of Pakistan. With BookiT, you can check movie schedules in different cinemas, review real-time seating plans to select your desired seat, and even watch movie trailers on our website. Now you don’t have to worry about standing in long queues or missing a movie show by reaching the cinema late.</p>
				<h2 class="h3">Methods of Payment to Get Online Movie Tickets</h2>
				<p>BookiT offers different methods of payment to buy movie tickets online. Some of the methods to pay for movie tickets are mentioned below:</p>
				<ul>
					<li>
						<p>Jazz Cash</p>
					</li>
					<li>
						<p>Easy Paisa</p>
					</li>
					<li>
						<p>Credit/Debit Cards</p>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<script>
function convertTime(timeString) {
  const timeParts = timeString.split(":");
  let hours = timeParts[0];
  let minutes = timeParts[1];
  //let seconds = timeParts[2];

  if (hours > 12) {
    hours -= 12;
    timeString = hours + ":" + minutes + " PM";
  } else {
    timeString = hours + ":" + minutes + " AM";
  }

  return timeString;
  }
const timeString1 = document.getElementById("time1").value;
const convertedTime1 = convertTime(timeString1);
document.getElementById('time1.1').innerHTML = convertedTime1;
const timeString2 = document.getElementById("time2").value;
const convertedTime2 = convertTime(timeString2);
document.getElementById('time2.1').innerHTML = convertedTime2;
const timeString3 = document.getElementById("time3").value;
const convertedTime3 = convertTime(timeString3);
document.getElementById('time3.1').innerHTML = convertedTime3;
console.log(convertedTime1);
console.log(convertedTime2);
console.log(convertedTime3);
</script>
@endsection