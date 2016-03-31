@extends('skel')

@section('content')

	<div class="row">
		@include('people/people_create')
	</div>

	<div class="row">
		<div class="page-header col-xs-12">
			<h1>Full people list</h1>
		</div>
		<div class="col-xs-12">
			<table id="people_table">
				<thead>
					<tr>
						<th>Name</th>
						<th>Last Name</th>
						<th>Email</th>
						<th>Birth date</th>
						<th>Actions</th>
					</tr>
				</thead>
				<tbody>
					@foreach($people as $someone)
						<tr>
							<td>
								<a href="{{ route('people') }}/{{ $someone -> id}}">{{ $someone -> name }}</a>
							</td>
							<td>
								<a href="{{ route('people') }}/{{ $someone -> id}}">{{ $someone -> lastname }}</a>
							</td>
							<td>
								<a href="mailto:{{ $someone -> email }}">{{ $someone -> email }}</a>
							</td>
							<td>
								{{ $someone -> birthday -> format('d/m/Y') }}
							</td>
							<td>
								@include('people/people_update')
								@include('people/people_delete')
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<script type="text/javascript">
		window.onload = function()
		{
			$('#people_table').DataTable()
		}
	</script>
@endsection