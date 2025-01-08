@extends('frontend.layouts.apps')
@section('content')

@push('style')
         <link href="{{ asset('assets/75a5fa0c/css/progressive-media.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/35deb2b4/css/bootstrap.css') }}" rel="stylesheet">
        <link href="{{ asset('bulma/css/bulma.min.css') }}" rel="stylesheet">
        <link href="{{ asset('bulma/css/all.min.css') }}" rel="stylesheet">
        <link href="{{ asset('swiper@8.4.2/swiper-bundle.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/owl.theme.default.min.css')}}  " rel="stylesheet">
        <link href="{{ asset('css/icofont.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/slick.css')}}" rel="stylesheet">
        <link href="{{ asset('css/slick-theme.css')}}" rel="stylesheet">
        <link href="{{ asset('css/site.css')}}" rel="stylesheet">
       
        <link rel="stylesheet" type="text/css" href="{{ asset('css/category.css') }}"> 

        <link rel="stylesheet" type="text/css" href="{{ asset('css/categories.css') }}"> 
         <link rel="stylesheet" type="text/css" href="{{ asset('css/dienmay.css') }}"> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>
         <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
 @endpush  

    
<div class="container page-content">
    <h1>Liên Hệ</h1>
</div>

@if(session()->has('success'))
<p>{{ session('success') }}</p>

@endif


@endsection