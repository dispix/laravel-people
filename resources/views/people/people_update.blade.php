<button type="button" class="edit-btn btn btn-warning btn-sm" data-toggle="modal" data-target="#edit_people_{{ $someone -> id }}">
	<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
</button>
<div class="modal fade" id="edit_people_{{ $someone -> id }}" tabindex="-1" role="dialog" aria-labelledby="edit_people_label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="edit_people_label">Update people</h4>
			</div>
			<form action="{{ route('people') }}" method="put">
				<div class="modal-body">
					<div class="row">
						<div class="form-group col-xs-12 col-sm-6">
							<label for="name">Name</label>
							<input required minlength="2" maxlength="63" type="text" class="form-control" id="name" name="name" placeholder="Name" value="{{ $someone -> name }}">
						</div>
						<div class="form-group col-xs-12 col-sm-6">
							<label for="lastname">Last Name</label>
							<input required minlength="2" maxlength="63" type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name" value="{{ $someone -> lastname }}">
						</div>
						<div class="form-group col-xs-12 col-sm-6">
							<label for="email">Email address</label>
							<input required maxlength="127" type="email" class="form-control" id="email" name="email" placeholder="Email" value="{{ $someone -> email }}">
						</div>
						<div class="form-group col-xs-12 col-sm-6">
							<label for="birthday">Birthday</label>
							<input required type="date" class="form-control" id="birthday" name="birthday" value="{{ $someone -> birthday -> format('Y-m-d') }}">
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{ $someone -> id }}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-warning">Save changes</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>