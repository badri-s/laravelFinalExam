<!DOCTYPE html>
<html>
<head>
	<title>shop app</title>
	<meta charset="utf-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>

	<ul>
		<li>
			<a href="/dashboard">dashboard</a>
		</li>
		<li>
			<a href="/dashboard/product/create">Create new product</a>
		</li>
		<li>
			<a href="/dashboard/cat/create">Create new category</a>
		</li>
	</ul>

	@yield("content")

</body>
</html>