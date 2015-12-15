
@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">


                    <div class="panel-body">

                        {{$name->name}}



                            <br>
                            <br>
                            fbs :{{$test[0]['fbs']}}
                            <br>
                            <br>
                            bp : {{$test[0]['bp']}}/{{$test[0]['bp2']}}
                            <br>
                            <br>
                            โรคแทรกซ้อน {{ $test[0]['complication'] == '1' ? 'checked': ''}}
                            <br>
                            <br>
                            suggesion: <div class="well">{{$test[0]['suggesion']}}</div>


                        <?php echo $fill;?>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
