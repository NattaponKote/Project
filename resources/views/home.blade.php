
@extends('app')

@if(Auth::user()->level==1)

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<div class="panel panel-default">
				<div class="panel-heading">Doctor</div>

				<div class="panel-body">
					@foreach($name as $name)
						{{$name->name}}
						<button  class="btn btn-success" onclick="window.location.href='/updatePatients/{{$name->id}}'">Update</button><br>
						@endforeach
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
