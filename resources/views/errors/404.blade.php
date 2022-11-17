@extends('layouts.errors.master')
@section('title', 'Error 404')

@section('css')
@endsection

@section('style')
@endsection


@section('content')
<div class="page-wrapper compact-wrapper" id="pageWrapper">
  <!-- error-404 start-->
  <div class="error-wrapper">
    <div class="container"><img class="img-100" src="{{asset('assets/images/other-images/sad.png')}}" alt="">
      <div class="error-heading">
        <h2 class="headline font-danger" style="color: var(--theme-deafult) !important">404</h2>
      </div>
      <div class="col-md-8 offset-md-2">
        <p class="sub-content">Ups! Halaman yang Anda kunjungi tidak ada.</p>
      </div>
      <div><a class="btn btn-danger-gradien btn-lg" href="{{route('/')}}" style="background: var(--theme-deafult) !important">KEMBALI</a></div>
    </div>
  </div>
  <!-- error-404 end      -->
</div>
@endsection

@section('script')

@endsection