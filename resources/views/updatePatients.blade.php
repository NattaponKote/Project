@extends('app')
@section('content')
    @foreach($id as $id)

    @endforeach
    <div class="col-lg-12">
        <form method="post" action="/ckupdatePatients/{{$name->id}}">
            <div class="col-md-6 col-sm-4">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <label>Name : {{$name->name}}</label>
                    </div>
                    <div class="panel-body">
                        <div class="form-group">
                            <input type="hidden" class="form-control" name="_token" value="{{ csrf_token() }}">
                            <input type="hidden" class="form-control" name="iduser" value="{{$name->id}}">
                            <label for="fbs">FBS :</label>
                            <input type="text" class="form-control" name="fbs" value="{{$test[0]['fbs']}}">
                        </div>
                        <div class="form-group">
                            <label for="bp">BP :</label>
                            <input type="text" class="form-control" name="bp" value="{{$test[0]['bp']}}">
                            <input type="text" class="form-control" name="bp2" value="{{$test[0]['bp2']}}">
                        </div>
                        <div class="form-group">
                            <label>Complication :</label>
                            <input type="checkbox" name="complication"
                                   value="1" {{ $test[0]['complication'] == '1' ? 'checked': ''}}>
                        </div>
                        <div class="form-group">
                            <label for="suggesion">suggesion :</label>
                            <textarea type="text" class="form-control"
                                      name="suggesion">{{$test[0]['suggesion']}}</textarea>
                            <br>
                            <button type="submit" class="btn btn-success">Save</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="col-md-6 col-sm-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Status
                </div>
                <div class="panel-body">
                    <center> <?php echo $fill;?> </center>
                </div>
            </div>

        </div>
    </div>
    </div>
@stop

@section('javascript')
@stop
