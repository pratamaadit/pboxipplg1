@extends('template.user')

@section('title')
    Profile
@endsection

@section('style')
  <link rel="stylesheet" href="{{asset('css/home.css')}}">
@endsection

@section('content')
<div class="container">
  <!-- Success Message -->
  
<div class="row justify-content-center">
  <div class="col-md-4">
      <img class="img-profile" src="/img/monyet.jpg" alt="no-image">
  </div>
  <div class="offset-md-2 col-md-6">
      <div class="content">
        <!-- Data User -->
      <label for="">Name</label>
      <p>{{ Auth::user()->name }}</p>
      <p></p>
      <label for="">Email</label>
      <p>{{ Auth::user()->email }}</p>
      <p></p>
      <label for="">Address</label>
      <p>{{ Auth::user()->address }}</p>
      <p></p>
      <label for="">Phone Number</label>
      <p>{{ Auth::user()->phone }}</p>
      <!-- TopUp -->
      {{-- @if($topup == null)
      <p style="color:red">Havent top up yet</p>
      @else
      <p style="color:green">Rp{{number_format($topup->amount)}}</p>
      @endif --}}
      <button class="btn btn-topup" data-toggle="modal" data-target="#exampleModal">Top-Up Now</button>
          </div>
      </div>

@endsection
