


@foreach($products as $product)
	<div>
		<h2>title: {{ $product->title }}</h2>
		<p>price: {{ $product->price }}</p>
	</div>
	<br><br>
@endforeach