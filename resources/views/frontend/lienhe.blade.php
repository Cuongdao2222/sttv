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

    
<div class="category">
    <h1>Liên Hệ</h1>
</div>

@if(session()->has('success'))
<p>{{ session('success') }}</p>

@endif

<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.877950066217!2d105.86306907576858!3d20.99752898884952!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac059f749033%3A0x86d4bd61d20ad365!2zMzc1IFAuIE1pbmggS2hhaSwgVsSpbmggVHV5LCBIYWkgQsOgIFRyxrBuZywgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1737277623042!5m2!1svi!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


@endsection