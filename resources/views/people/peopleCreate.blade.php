<!-- Button trigger modal -->
<div class="col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#people_create">
		Add new
	</button>
</div>

<!-- Modal -->
<div class="modal fade" id="people_create" tabindex="-1" role="dialog" aria-labelledby="people_create_label">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="people_create_label">Add People</h4>
			</div>
			<form action="{{ route('people') }}" method="post">
				<div class="modal-body">
					<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<label for="people_name">Name</label>
								<input type="text" class="form-control" id="people_name" name="people_name" placeholder="Name">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="people_lastname">Last Name</label>
								<input type="text" class="form-control" id="people_lastname" name="people_lastname" placeholder="Last Name">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="people_email">Email address</label>
								<input type="email" class="form-control" id="people_email" name="people_email" placeholder="Email">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="people_birthday">Birthday</label>
								<input type="date" class="form-control" id="people_birthday" name="people_birthday">
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Submit</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>