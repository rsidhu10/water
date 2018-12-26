@extends('topbar')
@section('mainContent')
	{!! Form::open(['route' =>'f.submit'])!!}
		
		{!! Form::text('fname') !!}
		{!! Form::submit('submit') !!}
	{!!Form::close()!!}
@endsection