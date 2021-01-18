@extends("layouts.master")

@section("content")


<div class="col-md-6 offset-3">
	<form action="/dashboard/product/create" method="post">
		<div class="form-group">
			<input type="text" name="product_name" class="form-control" placeholder="name">
		</div>
		<div class="form-group">
			<input type="text" name="price" class="form-control" placeholder="price">
		</div>
		<div class="form-group">
			<input type="text" name="desc" class="form-control" placeholder="desc">
		</div>
		<div class="form-group">
			<select name="cats[]" class="form-control" multiple>
				@foreach($category as $cat)
					<option value="{{ $cat->id }}">{{ $cat->title }}</option>
				@endforeach
			</select>
		</div>
		<div class="form-group">
			<input type="file" name="image" class="form-control">
		</div>
		<div>
			@csrf
			<button name="submit" class="btn btn-success">Create</button>
		</div>
	</form>
</div>

@endsection