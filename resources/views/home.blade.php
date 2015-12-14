@extends('app')

@if(Auth::user()->level==1)
@section('content')
    <div class="container">
        <div class="row" >
            <div class="col-md-12" >
                <div class="panel panel-default">
                    <div class="panel-heading"><h5>Doctor</h5></div>

                    <div class="panel-body">
                        <table class="table table-striped table-hover">
                            <tbody>
                            @foreach($name as $name)
                            <tr>
                               <td style="width: 50%">
                                    {{$name->name}}
                                   </td>
                                <td style="width: 50%">
                                    <button class="btn btn-success"
                                            onclick="window.location.href='/updatePatients/{{$name->id}}'">Update
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



@elseif(Auth::user()->level==0)
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">User Status</div>
                    <div class="panel-body">
                        <?php echo $fill;?>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@endif
