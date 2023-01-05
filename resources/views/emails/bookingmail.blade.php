<x-mail::message>
Thanks For Booking From Bookit

<div>
First Namme: {{$firstName}} <br>
Last name: {{$lastName}}<br>
Email: {{$email}}<br>
Cnic No: {{$cnic}}<br>
Phone No: {{$phone}}<br>
Seats: {{$seatcount}}<br>
Movie: {{$mtitle}}<br>
Show Time: {{$showtime}}<br>
Hall: {{$shall}}<br>
Day Time: {{$daytime}}<br>
Show Date: {{$showdate}}<br>
Total Payment : {{$totalPayment}}<br>
Cold Drinks: {{$cd_count}}<br>
PopCorns: {{$pc_count}}<br>
Seat Price:{{$seatPrice}}<br>
PopCorn Price:{{$popcornPrice}}<br>
Cold Drink Price:{{$cdprice}}<br>
</div>

<x-mail::button :url="'github.com/azhar61/'">
Thanks To
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
