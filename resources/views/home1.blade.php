@extends('layouts.app')
@include('layouts.navbar')
@section('content')
<div class="container">
   <section class="home-slider js-fullheight owl-carousel">
    <div class="slider-item js-fullheight" style="background-image:url(images/bg_1.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Attorneys Fighting For Your Freedom</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
          <p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3" data-toggle="modal" data-target="#modalRequest">Make an Appointment</a></p>
        </div>
      </div>
      </div>
    </div>

    <div class="slider-item js-fullheight" style="background-image:url(images/bg_2.jpg);">
        <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-end" data-scrollax-parent="true">
        <div class="col-md-7 text ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
          <h1 class="mb-4" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">We are specialist in legal Criminal &amp; Business Law</h1>
          <p data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.</p><p><a href="#" class="btn btn-white btn-outline-white px-4 py-3 mt-3" data-toggle="modal" data-target="#modalRequest">Make an Appointment</a></p>
        </div>
      </div>
      </div>
    </div>

  <div>
  @endsection
