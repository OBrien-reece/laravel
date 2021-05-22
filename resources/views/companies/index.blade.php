@extends('layouts.app')


@section('content')

<div class="row">

    @foreach($companies as $company)
	<div class="col-md-6">
		<div class="card-header bg-dark text-light">
		 <span>Company Name: <code><a href="/companies/{{$company->id}}">{{$company -> name}}</a></code></span>
		</div>

	<!-- 	<div class="card-body">
			{{$company -> description}}
		</div> -->
		
		<div class="card-footer text-light bg-dark">
			<span>Laravel CRUD application</span>
		</div>
		
	</div>
	@endforeach
	
</div>
@endsection