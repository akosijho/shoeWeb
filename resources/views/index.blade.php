@extends('layout.master')
@section('content')  

      @include('layout.header')
      @include('layout.home.home')
      @include('layout.home.howitworks')
      @include('layout.home.features')
      @include('layout.home.testimonials')
      @include('layout.home.contactus')
      @include('layout.home.whatareyouwaiting')
      @include('layout.footer')
      <div class="loader-wrapper">
      <span class="loader"><span class="loader-inner"></span></span>
    </div>

      
@endsection



