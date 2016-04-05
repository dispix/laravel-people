<!-- Button trigger modal -->
<div class="col-xs-12">
	<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#people_create">
		<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
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
			<form action="{{ route('create_someone') }}" method="post">
				<div class="modal-body">
					<div class="row">
							<div class="form-group col-xs-12 col-sm-6">
								<label for="name">Name</label>
								<input required minlength="2" maxlength="63" type="text" class="form-control" id="name" name="name" placeholder="Name">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="lastname">Last Name</label>
								<input required minlength="2" maxlength="63" type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="email">Email address</label>
								<input required maxlength="127" type="email" class="form-control" id="email" name="email" placeholder="Email">
							</div>
							<div class="form-group col-xs-12 col-sm-6">
								<label for="birthday">Birthday</label>
								<input required type="date" class="form-control" id="birthday" name="birthday">
							</div>
							<input type="hidden" name="_token" value="{{ csrf_token() }}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-primary">Create</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				</div>
			</form>
		</div>
	</div>
</div>