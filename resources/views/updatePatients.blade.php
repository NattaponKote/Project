
{{$name->name}}
@foreach($id as $id)
        {{$id->iduser}}
@endforeach

<form method="post" action="/ckupdatePatients/{{$name->id}}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <input type="hidden" name="iduser" value="{{$name->id}}">
fbs : <input type="text" name="fbs" value="{{$test[0]['fbs']}}">
bp : <input type="text" name="bp" value="{{$test[0]['bp']}}">/<input type="text" name="bp2" value="{{$test[0]['bp2']}}">
    <input type="checkbox" name="complication" value="1" {{ $test[0]['complication'] == '1' ? 'checked': ''}}> โรคแทรกซ้อน
suggesion: <textarea type="text" name="suggesion">{{$test[0]['suggesion']}}</textarea>
    <input type="submit">
</form>

<?php echo $fill;?>

{{$test[0]['complication']}}
