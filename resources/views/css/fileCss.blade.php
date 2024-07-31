@extends('layouts.app')

@push('js')
<link rel="stylesheet" type="text/css" href="{{ asset('lined-textarea/jquery-linedtextarea.css') }}">
<script src="{{ asset('lined-textarea/jquery-linedtextarea.js') }}"></script>
@endpush

@section('content')
    <?php 
        $page = ['homecs.css', 'categorycs.css', 'detailscs.css'];
    ?>

    <style type="text/css">
        
        .main-header{
            position: static !important;
        }

        textarea {
            outline: none;
        }
        textarea {
            -webkit-box-shadow: none !important;
            box-shadow: none !important;
        }

        textarea:focus {
            outline: none;
        }

    </style>
    File {{ $page[$id] }}


    <form method="post" action="{{ route('saveCss') }}">
        @csrf
         <button type="submit">Lưu lại</button>


        <input type="hidden" name="file" value="{{ $page[$id] }}">  

        <textarea class="lined"  style="width: 800px; height: 1900px;" name="css" spellcheck="false">{!! $contents  !!}</textarea>

         <br>
        

       
    </form>

    <script type="text/javascript">
        $(function() {
            $(".lined").linedtextarea();
        });
    </script>
    
@endsection


