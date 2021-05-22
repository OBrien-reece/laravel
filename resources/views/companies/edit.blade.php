@extends('layouts.app')

@section('content')
<div class="row">
	<div class="col-md-9 col-lg-9 col-sm-9 pull-left">
		
	</div>
	<div class="col-md-3 col-lg-3 col-sm-3 pull-right">
	<h4>Actions</h4>
	<ol class="list-unstyled">
		<li><a href="companies/{{ $editcompanies->id }}/edit">Edit</a></li>
		<li><a href="#">Delete</a></li>
		<li><a href="#">Add new member</a></li>
	</ol>		
	</div>	
	
</div>
@endsection