@extends('welcome')
@section('content')
<nav class="navbar navbar-light  bg-primary navbar-expand-lg mb-5" style="background-color: #e3f2fd;">
<div class="container">
<a class="navbar-brand mr-auto text-light" href="#">Admin</a>
<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNav">
<ul class="navbar-nav">
@guest
<li class="nav-item">
<a class="nav-link" href="{{ route('login') }}">Login</a>
</li>
<li class="nav-item">
<a class="nav-link" href="{{ route('register-user') }}">Register</a>
</li>
@else
<li class="nav-item">
<a class="nav-link text-light text-bold" href="create">Add Movies</a>
<li class="nav-item">
<a class="nav-link" href="{{ route('signout') }}">Logout</a>
</li>
@endguest
</ul>
</div>
</div>
</nav>
<div class="container">
  <h3>Actions</h3>
  <ul class="nav nav-tabs text-white">
    <li class="active p-3"><a href="dasboard">Home</a></li>
    <li class="p-3"><a href="create">Add Movie</a></li>
    <li class="p-3"><a href="fastFood">Add Food Price</a></li>
    <li class="p-3"><a href="#">Add Show Time</a></li>
  </ul>
  <br>
  <p><strong>Note:</strong> This example shows how to create a basic navigation tab. It is not toggleable/dynamic yet (you can't click on the links to display different content)- see the last example in the Bootstrap Tabs and Pills Tutorial to find out how this can be done.</p>
</div>
@endsection