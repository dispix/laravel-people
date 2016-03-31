@extends('skel')

@section('content')

	<div class="row">
		@include('people/people_create')
	</div>

	<div class="row">
		<div class="page-header col-xs-12">
			<h1>{{ $someone -> name }} {{ $someone -> lastname }} </h1>
			@include('people/people_update')
			@include('people/people_delete')
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Name</h3>
				</div>
				<div class="panel-body">
					{{ $someone -> name }}
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Last name</h3>
				</div>
				<div class="panel-body">
					{{ $someone -> lastname }}
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Email</h3>
				</div>
				<div class="panel-body">
					<a href="mailto:{{ $someone -> email }}">{{ $someone -> email }}</a>
				</div>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6">
			<div class="panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Birth date</h3>
				</div>
				<div class="panel-body">
					{{ $someone -> birthday -> format('d/m/Y') }}
				</div>
			</div>
		</div>
	</div>

@endsection