@extends('layout')
@section('content')
<div class="container-fluid text-center bg-primary" style="margin-top: 3rem;">
    <h2 class="text-white p-3">Contact BookiT</h2>
</div>
   
<div class="bg-light shadow-md rounded p-4 h-100 ">
  <div class="row">
     <div class="col-md-8 mx-auto">
        <form class="contact-form" action="" method="post">
           <input type="hidden" name="_token" value="baLhWCDx2AxS1HUpOeVb0ZnoGOnYpD738PE2BfxR"> 
           <div class="form-row">
              <div class="col-lg-6 form-group"> <label for="name">Your Name</label> <input type="text" required="required" name="name" class="form-control" value=""> </div>
              <div class="col-lg-6 form-group"> <label for="email">Your Email</label> <input type="email" required="required" name="email" class="form-control" value="" pattern="[a-zA-Z0-9!#$%&amp;'*+/=?^_`{|}~.-]+@[a-zA-Z0-9-]+(.[a-zA-Z0-9-]+)*"> </div>
           </div>
           <div class="form-row">
              <div class="col-lg-12 form-group"> <label for="message">Your Message</label> <textarea name="message" required="required" rows="6" class="form-control" placeholder="Write message here" maxlength="1000"></textarea> </div>
           </div>
           <div class="form-row"> <button type="submit" class="btn btn-primary btn-block">Submit</button> </div>
        </form>
     </div>
  </div>
</div>

@endsection