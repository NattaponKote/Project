
@extends('app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">


                <div class="panel-body">

{{$name->name}}


<form method="post" action="/ckupdatePatients/{{$name->id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="iduser" value="{{$name->id}}">
    <br>
    <br>
fbs : <input type="text" name="fbs" value="{{$test[0]['fbs']}}">
    <br>
    <br>
bp : <input type="text" name="bp" value="{{$test[0]['bp']}}">/<input type="text" name="bp2" value="{{$test[0]['bp2']}}">
    <br>
    <br>
    <input type="checkbox" name="complication" value="1" {{ $test[0]['complication'] == '1' ? 'มี': 'ไม่มี'}}> โรคแทรกซ้อน
    <br>
    <br>
suggesion: <br><textarea type="text" name="suggesion">{{$test[0]['suggesion']}}</textarea>
    <input type="submit">
</form>

<?php echo $fill;?>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
