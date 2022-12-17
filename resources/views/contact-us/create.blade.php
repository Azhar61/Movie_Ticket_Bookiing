@extends('layout')
@section('content')
<div class="container-fluid text-center bg-primary" style="margin-top: 3rem;">
    <h2 class="text-white p-3">Contact BookiT</h2>
</div>

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
   
<div class="bg-light shadow-md rounded p-4 h-100 ">
  <div class="row">
     <div class="col-md-8 mx-auto">
     
        <form class="contact-form" action="/contact-us" method="post" enctype="multipart/form-data">
        @csrf
           <div class="form-row">
              <div class="col-lg-6 form-group"> <label for="name">Your Name</label> <input type="text" value="{{ old('name') }}" required name="name" class="form-control"> </div>
              <div class="col-lg-6 form-group"> <label for="email">Your Email</label> <input type="email"  name="email" class="form-control" value="{{ old('email') }}" required pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*"> </div>
           </div>
           <div class="form-row">
              <div class="col-lg-12 form-group"> <label for="message">Your Message</label> <textarea name="message" required="required" rows="6" class="form-control" placeholder="Write message here" maxlength="1000" >{{ old('message') }}</textarea> </div>
           </div>
           <div class="form-row"> <button type="submit" class="btn btn-primary btn-block">Submit</button> </div>
        </form>
     </div>
  </div>
</div>

@endsection