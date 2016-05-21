<!DOCTYPE html>
<html>
<head>
	<title>{{ $new->title }}</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
	<div class="container">
		<h1>{{ $new->title }}</h1>
		<h5>{{ $new->published_at }}</h5>
		<hr>
			{{ $new->content }}
		<hr>
		<button class="btn btn-primary" onclick="history.go(-1)">
			<<返回
		</button>
	</div>
</body>
</html>