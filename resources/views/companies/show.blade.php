@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-md-9 col-sm-9 col-lg-9 pull-left">
<div class="jumbotron">
	<h1>{{$showcompanies->name}}</h1>
	<p class="lead">{{$showcompanies->description}}</p>
	<!-- <button class="btn btn-success">Get started today</button> -->
</div>
<div class="row py-3" style="background: white;">

    @foreach($showcompanies->projects as $project)
	<div class="col-md-4 col-lg-4 mb-2">
		<h3>{{ $project->name }}</h3>
		<span>{{ $project->description }}</span><br><br>
		<button class="btn btn-primary">
		<a style="color: black" href="/showcompanies/{{$showcompanies->id}}">View Info››</a>
	    </button>
		
	</div>
	@endforeach

</div>
</div>
<div class="col-md-3 col-sm-3 col-lg-3 pull-right">
	<h4>Actions</h4>
	<ol class="list-unstyled">
		<li><a href="/companies/{{ $company->id }}/edit">Edit</a></li>
		<li><a href="#">Delete</a></li>
		<li><a href="#">Add new member</a></li>
	</ol>

<!-- 	<h4>Members</h4>
	<ol class="list-unstyled">
		<li><a href="#">User 1</a></li>
		<li><a href="#">User 2</a></li>
		<li><a href="#">User 3</a></li>
	</ol>	
	 -->
</div>
</div>
@endsection