<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="/css/app.css">
	<title>Post por web service</title>
</head>
<body>
	<div class="container">
		<h1>Publicaciones</h1>
		@foreach($posts as $post)
			<div class="panel panel-default">
				<div class="panel-body">
					<a href="ws/{{ $post->id }}">
					{{ $post->title }}
					</a>
				</div>
			</div>
		@endforeach
	</div>
</body>
</html>