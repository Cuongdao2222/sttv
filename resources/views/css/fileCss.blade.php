@extends('layouts.app')

@push('js')


<link rel="stylesheet" type="text/css" href="{{ asset('lined-textarea/jquery-linedtextarea.css') }}">
<script src="{{ asset('lined-textarea/jquery-linedtextarea.js') }}"></script>
<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>

<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">

 <script type="text/javascript">
        $(function() {
            $(".lined").linedtextarea();
        });
    </script>


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


    
@endsection


