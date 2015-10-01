@extends('layouts.interaction')

@section('content')
    <div class=" container">
        <div class="center-block">
            <img class="img-responsive center-block" src="{{asset('img').'/'.$data['imagen'] }}" alt="Enera Portal">
        </div>
        <div class="bottom-container">
            <button id="navegar" type="button" class="btn btn-primary btn-block" data="{{$data['link']}}"> Navegar en
                internet
            </button>
        </div>
    </div>

@stop

@section('footer_scripts')

    <script>
        $(document).ready(function () {
            var _token = '{!! csrf_token() !!}';
            //var elArray = new Array();
            //var elArray = "{{ json_encode($data) }}";
            var link = "{!! $data['link'] !!}";
            var idCamp = "{!! $id !!}";
            console.log("id campaña: " + idCamp);
            console.log(link);
            var myLog = new logs();
            console.log("ready!");

            myLog.loaded(_token,'loaded');


            $("#navegar").click(function () {
                console.log('click en el boton');
                myLog.completed(_token,link,'completed');
            });


        });

    </script>
    <script language="JavaScript" type="text/javascript" src="{{ URL::asset('js/ajax/logs.js') }}"></script>
@stop