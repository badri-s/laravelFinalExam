@extends("layouts.master")

@section("content")


<div class="col-md-6 offset-3">
	<form action="/dashboard/cat/create" method="post">
		<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="name">
		</div>
		<div>
			@csrf
			<button name="submit" class="btn btn-success">Create</button>
		</div>
	</form>
</div>

@endsection