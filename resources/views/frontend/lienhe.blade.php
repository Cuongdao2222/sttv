@extends('frontend.layouts.apps')
@section('content')

@push('style')
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