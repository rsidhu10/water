@extends('topbar')
@section('mainContent')
	{!! Form::open(['route' =>'f.submit'])!!}
		<div class ='form-group'>
			{!! Form::text('fname') !!}
			{!! Form::text('lname') !!}
			{!! Form::submit('submit') !!}
		</div>
	{!!Form::close()!!}
	<?php 
	echo ($errors->first('lname', "<li class='error'>:message</li>"));
	 
	?>
@endsection