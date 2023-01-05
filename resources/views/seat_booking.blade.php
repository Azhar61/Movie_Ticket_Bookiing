@extends('layout')
@section('content')

<div class="container-fluid bg-primary p-4 " style="margin-top: 3rem;">
        <h3 class="text-white">{{$m_title}}</h3>
    </div>
    
<!-- Seat Booking Section-->
<div class="row">
    <div class="col-lg-9">
       <div class="bg-light shadow-md rounded p-3 p-sm-4 ">
       <!-- <div class="d-flex flex-inline-block">
       <h6 class=" p-1 border-right  border-primary">{{$show_hall}}</h6>
       <h6 class=" p-1 border-right border-primary">{{$show_date}}</h6>
       <h6 class=" p-1 border-right border-primary">{{$show_session}}</h6>
       <h6 class=" p-1 border-right border-primary">{{$show_time1}}</h6></div> -->
       <h2 class="text-6 mb-3">Book Seats</h2>
          <div class="d-flex justify-content-between">
             <p class="font-weight-400">Regular Seat</p>
             <p class="font-weight-600 text-primary">Rs 1000.00 <span class="text-muted">/Seat</span></p>
          </div>
          <div class="col-md-8 order-md-1">
          <h4 class="mb-3">Movie Details </h4>
          <form class="needs-validation" novalidate="" action="SeatBooking" method="POST" >
          @csrf
            <div class="row">
            <div class="col-md-6 mb-3">
                <label for="mTitle">Movie title</label>
                <input type="hidden" name="mTitle" value="{{$m_title}}"  >
                <input type="text" class="form-control" name="Title" id="mTitle" placeholder="" value="{{$m_title}}" required="" disabled>
                <div class="invalid-feedback">
                  Valid movie title is required.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="showtime">Show time</label>
                <input type="hidden" name="ShowTime" value="{{$show_time1}}"  >
                <input type="text" class="form-control" name="showime" id="showtime" placeholder="" value="{{$show_time1}}" required=""  disabled >
                <div class="invalid-feedback">
                  Valid show time is required.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="showHall">Cinema hall</label>
                <input type="hidden" name="showHall" value="{{$show_hall}}"  >
                <input type="text" class="form-control" name="show" id="showHall" placeholder="" value="{{$show_hall}}" required=""  disabled>
                <div class="invalid-feedback">
                  Valid show hall is required.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="dayTime">Day time</label>
                <input type="hidden" name="dayTime" value="{{$show_session}}" >
                <input type="text" class="form-control" name="dayttime" id="dayTime" placeholder="" value="{{$show_session}}" required=""  disabled >
                <div class="invalid-feedback">
                  Valid show hall is required.
                </div>
              </div>
              <div class="col-md-5 mb-3">
              <label for="showdate">Pick a date</label>
            <select name="showdate" id="" class="form-control" required="">
              
            </select>
              </div>
              
              <div class="col-md-3 mb-3">
                <label for="seatCount">Number of Seats</label>
                <input type="number" class="form-control" name="seatCount" id="seatCount" placeholder="" value="" required="" pattern="[0-9]">
                <div class="invalid-feedback">
                  Seats is required.
                </div>
              </div>
              

              
              <div class="col-md-6 mb-3">
              <label for="firstName">First name</label>
                <input type="text" class="form-control" name="firstName" id="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid first name is required.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Last name</label>
                <input type="text" class="form-control" name="lastName" id="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Valid last name is required.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="phoneNO">Contact no</label>
              <input type="text" class="form-control" name="phoneNo" id="phoneNo" placeholder="03121212112" required="">
              <div class="invalid-feedback">
                Please enter a valid Phone No.
              </div>
            </div>
            <div class="mb-3">
              <label for="cnicNO">CNIC no</label>
              <input type="text" class="form-control" name="cnicNo" id="cnicNO" placeholder="371030000000" required="">
              <div class="invalid-feedback">
                Please enter CNIC No.
              </div>
            </div>
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" name="email" id="email" placeholder="you@example.com" required="">
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

           

            

            
            <!-- <hr class="mb-4">
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="same-address">
              <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
            </div>
            <div class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="save-info">
              <label class="custom-control-label" for="save-info">Save this information for next time</label>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Payment</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
                <label class="custom-control-label" for="credit">Credit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="debit" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="debit">Debit card</label>
              </div>
              <div class="custom-control custom-radio">
                <input id="paypal" name="paymentMethod" type="radio" class="custom-control-input" required="">
                <label class="custom-control-label" for="paypal">Paypal</label>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="cc-name">Name on card</label>
                <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                <small class="text-muted">Full name as displayed on card</small>
                <div class="invalid-feedback">
                  Name on card is required
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="cc-number">Credit card number</label>
                <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                <div class="invalid-feedback">
                  Credit card number is required
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">Expiration</label>
                <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                <div class="invalid-feedback">
                  Expiration date required
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="cc-expiration">CVV</label>
                <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                <div class="invalid-feedback">
                  Security code required
                </div>
              </div>
            </div>  -->
            <!-- <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form> -->
        </div>
          <!-- <div class="card">
             <div class="card-body">
                <div class="d-flex justify-content-center">
                   <div class="seat-info mx-2 mx-md-3">
                      <div class="m-0 mx-auto border border-primary rounded-l"></div>
                      <p class="small">Available</p>
                   </div>
                   <div class="seat-info mx-2 mx-md-3">
                      <div class="m-0 mx-auto border bg-warning rounded-l"></div>
                      <p class="small">Booked</p>
                   
                    <div class="seat-info mx-2 mx-md-3">
                      <div class="m-0 mx-auto border bg-light-4 rounded-l"></div>
                      <p class="small">Unavailable</p>
                   </div> 
                </div>
                </div>
                  
               
                
             </div> 
          </div> -->
       </div>
    </div>
    
    <aside class="col-lg-3 mt-4 mt-lg-0">
       <div class="bg-light shadow-md rounded p-3">
          <h3 class="text-4 mb-3">Price Details</h3>
          <ul class="list-unstyled">
            @foreach($fdata as $item)
          <li class="mb-2">PopCorn Price <span class="text-muted  " id="popcornprice">{{$item['popcorn_price']}}</span> <span class="text-primary float-right"> RS</span><span class="float-right text-3 font-weight-800 text-primary" id = "rpopcornprice" >0</span><input type="hidden" name="popcprice" id="popcPrice" value=""></li>
          <li class="mb-2">Cold Drink Price <span class="text-muted" id="colddrinkprice">{{$item['drink_price']}}</span><span class="text-primary float-right"> RS</span><span class="float-right text-3 font-weight-800 text-primary" id = "rdrinkprice">0</span><input type="hidden" name="colddrinkprice" id="coldDrinkPrice" value=""></li>
          @endforeach
           <li class="mb-2">Seat Price<span class="text-primary float-right"> RS</span><span class="float-right text-3 font-weight-500 text-primary" id="seatprice">0</span><input type="hidden" name="seatprice" id="tseatsprice" value=""></li>
             <li class="mb-2"> 
               <div class="d-flex justify-content-between">
               <!-- <div class="form-check"> -->
               <!-- <input class="form-check-input" type="checkbox" value ="" id="flexCheckIndeterminate"> -->
               <label class="form-check-label" for="flexCheckIndeterminate">
                 Popcorn
               </label>
             <!-- </div> -->
             <div> 
            <i class="fas fa-plus" style="margin-left: 5rem; color:green " id = "rp1" onclick="onClickP()" ></i>
             </div>
             <div> 
               <p id="RP" value ="">0</p><input type="hidden" name="pccount" id="popcorncount" value="">
             </div>
             <div> 
               <i class=" 	fas fa-minus" style="margin-right: 1rem; color:red" onclick="onClick2()"></i>
             </div>
            </div></li>
             <li class="mb-2"> 
               <div class="d-flex justify-content-between">
               <!-- <div class="form-check"> -->
               <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckIndeterminate"> -->
               <label class="form-check-label" for="flexCheckIndeterminate">
                 Cold Drink
               </label>
             <!-- </div> -->
             <div> 
                 <i class=" fas fa-plus " style="margin-left: 4rem; color:green ;" id ="rd1" onclick="onClick()" ></i> 
             </div>
            <div> 
               <p id="RD" value="">0</p><input type="hidden" name="cdcount" id="coldCount" value="">
             </div>
             <div> 
               <i class="	fas fa-minus " style="margin-right: 1rem; color:red " onclick="onClick1()" ></i>
             </div>
            </div>
              
             </li>
             <!-- <li class="mb-2">Discount <span class="float-right text-3 font-weight-500 text-primary">Rs 0</span></li> -->
          </ul>
          <div class="text-primary bg-light-4 text-3 font-weight-600 p-3"> Total Amount <span class="float-right text-5 " id="total"></span><input type="hidden" name="totalpayment" id="totalprice" value=""></div>
          <button type="submit" class="btn btn-primary btn-block">Bookit</button>
         </form>
       </div>
    </aside>
</div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        let countrp = 0;
        let countrd = 0;
        let pricerd = 0;
        let pricerp = 0;
       // pricerd = document.getElementById('rdrinkprice').innerHTML;
       // pricerp = document.getElementById('rpopconprice').innerHTML;
        function onClick(){
            value = Math.min(countrd, 20);
            if (value === 20) {
                return  document.getElementById('RD').innerHTML=countrd;
            }    countrd +=1;
        
        document.getElementById('RD').innerHTML=countrd;
        document.getElementById('coldCount').value=countrd;
        var cdpricedb = document.getElementById('colddrinkprice').innerHTML;
        var cdPrice = countrd*cdpricedb;
        
       document.getElementById('rdrinkprice').innerHTML= cdPrice;
       document.getElementById('coldDrinkPrice').value= cdPrice;
       /////
       var sp= document.getElementById('seatprice').innerHTML;
   var dprice=document.getElementById('rdrinkprice').innerHTML;

   var pcprice= document.getElementById('rpopcornprice').innerHTML;
   var a = parseInt(sp);
   var b = parseInt(dprice);
  var c =  parseInt(pcprice);
   var total = a + b + c;

   document.getElementById('total').innerHTML= total;
   document.getElementById('totalprice').value= total;
   
        }
        function onClickP(){
            value = Math.min(countrd, 20);
            if (value === 20) {
            return document.getElementById('RP').innerHTML=countrd;
            }
        countrp +=1;
        document.getElementById('RP').innerHTML=countrp;
        document.getElementById('popcorncount').value=countrp;

        var pcpricedb = document.getElementById('popcornprice').innerHTML;
        var pcPrice = countrp*pcpricedb;
        
       document.getElementById('rpopcornprice').innerHTML= pcPrice;
       document.getElementById('popcPrice').value= pcPrice;
       /////
       var sp= document.getElementById('seatprice').innerHTML;
   var dprice=document.getElementById('rdrinkprice').innerHTML;

   var pcprice= document.getElementById('rpopcornprice').innerHTML;
   var a = parseInt(sp);
   var b = parseInt(dprice);
  var c =  parseInt(pcprice);
   var total = a + b + c;
   
   document.getElementById('total').innerHTML= total;
   document.getElementById('totalprice').value= total;

        }
        function onClick1(){
            value = Math.max(countrd, 0);
            if (value === 0) {
            return document.getElementById('RD').innerHTML=countrd;
            }
        countrd -=1;
        document.getElementById('RD').innerHTML=countrd;
        document.getElementById('coldCount').value=countrd;
        var cdpricedb = document.getElementById('colddrinkprice').innerHTML;
        var cdPrice = countrd*cdpricedb;
        
       document.getElementById('rdrinkprice').innerHTML= cdPrice;
       document.getElementById('coldDrinkPrice').value= cdPrice;
       ///
       var sp= document.getElementById('seatprice').innerHTML;
   var dprice=document.getElementById('rdrinkprice').innerHTML;

   var pcprice= document.getElementById('rpopcornprice').innerHTML;
   var a = parseInt(sp);
   var b = parseInt(dprice);
  var c =  parseInt(pcprice);
   var total = a + b + c;

   document.getElementById('total').innerHTML= total;
   document.getElementById('totalprice').value= total;
        }
        function onClick2(){
            value = Math.max(countrp, 0);
            if (value === 0) {
            return document.getElementById('RP').innerHTML=countrp;
            }
        countrp -=1;
        var pcpricedb = document.getElementById('popcornprice').innerHTML;
        document.getElementById('popcPrice').value= pcPrice;
        var pcPrice = countrp*pcpricedb;
        
       document.getElementById('rpopcornprice').innerHTML= pcPrice;
        document.getElementById('RP').innerHTML=countrp;
        document.getElementById('popcorncount').value=countrp;
        ////
        var sp= document.getElementById('seatprice').innerHTML;
   var dprice=document.getElementById('rdrinkprice').innerHTML;

   var pcprice= document.getElementById('rpopcornprice').innerHTML;
   var a = parseInt(sp);
   var b = parseInt(dprice);
  var c =  parseInt(pcprice);
   var total = a + b + c;

   document.getElementById('total').innerHTML= total;
   document.getElementById('totalprice').value= total;
        }

         //date Function 
         var today = new Date();
var month = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"]

for(var i=0; i<3; i++){
	var tDate = new Date();
  tDate.setDate(today.getDate()+i);
	var optionDate = tDate.getDate() + " " + month[tDate.getMonth()] + " " + tDate.getFullYear();
	$('select').append('<option>' + optionDate + '</option');
}
//Seat Count Function
        function inputChanged() {
        var seatcount = document.getElementById('seatCount').value;
        var seatPrice = seatcount*1000;
       document.getElementById('seatprice').innerHTML= seatPrice;
       document.getElementById('tseatsprice').value= seatPrice;
       ////
       var sp= document.getElementById('seatprice').innerHTML;
   var dprice=document.getElementById('rdrinkprice').innerHTML;

   var pcprice= document.getElementById('rpopcornprice').innerHTML;
   var a = parseInt(sp);
   var b = parseInt(dprice);
  var c =  parseInt(pcprice);
   var total = a + b + c;

   document.getElementById('total').innerHTML= total;
   document.getElementById('totalprice').value= total;
        }
  // Get a reference to the input field
  const bt1 = document.getElementById('seatCount');

  // Add an event listener for the change event
  bt1.addEventListener('change', inputChanged);


  //ColdDrink Price
  function inputChanged1() {
   const sp= document.getElementById('seatprice').innerHTML;
   const dprice=document.getElementById('rdrinkprice').innerHTML;

   const pcprice= document.getElementById('rpopcornprice').innerHTML;
   const total = 0;
   total = sp + dprice + pcprice;

   document.getElementById('total').innerHTML= total;
   document.getElementById('totalprice').value= total;

   console.log(total);
        }
  // Get a reference to the input field
  const bt2 = document.getElementById('rpopcornprice');

  // Add an event listener for the change event
  bt2.addEventListener('change', inputChanged1);

    </script>



@endsection