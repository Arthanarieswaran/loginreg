


@extends('auth.layouts')
@section('content')
  


@if(session('message'))
  
@endif


@foreach($users as $user)    
   
@extends('layouts.css')
<div class="cards">
<div class="container">
    <div class="cover-photo">
      <img src="https://images.unsplash.com/photo-1565464027194-7957a2295fb7?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=80" class="profile">
    </div>
    <div class="profile-name">{{ $user->name }}</div>
    <p class="about">{{ $user->email }}<br>front-end developer</p>
    <button class="msg-btn">Message</button>
    <button class="follow-btn">Following</button>
    <div>
      <i class="fab fa-facebook-f"></i>
      <i class="fab fa-instagram"></i>
      <i class="fab fa-youtube"></i>
      <i class="fab fa-twitter"></i>
    </div>
  </div>
</div>
@endforeach

@endsection 
