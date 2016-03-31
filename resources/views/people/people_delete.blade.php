<button type="button" class="delete-btn btn btn-danger btn-sm" data-toggle="modal" data-target="#delete_people_{{ $someone -> id }}">
	<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
</button>
<div class="modal fade" id="delete_people_{{ $someone -> id }}" tabindex="-1" role="dialog" aria-labelledby="delete_people_label">
	<div class="modal-dialog modal-sm" role="document">
		<div class="modal-content">

			<form action="{{ route('people') }}" method="delete">
				<div class="modal-body">
					<div class="row">
						<div class="col-xs-12">
							<p class="text-danger">
								Are you sure you want to delete this person ? This cannot be undone.
							</p>
						</div>
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="id" value="{{ $someone -> id }}">
					</div>
				</div>
				<div class="modal-footer">
					<button type="submit" class="btn btn-danger">Delete</button>
					<button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
				</div>
			</form>
		</div>
	</div>
</div>