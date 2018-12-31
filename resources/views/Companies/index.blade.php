@extends('layouts.app')
@section('content')

	
		<div class="col-md-12 col-lg-12 col-md-offset-2 col-lg-offset-2" >
			<ul class="list-group">
				<li class="list-group-item active">Companies</li>
				
				@foreach($companies as $company)
					<li class="list-group-item"><a href="/companies/{{$company->id}}"> {{ $company->name }}</a></li>
				@endforeach
			</ul>
		</div>
	

@endsection




