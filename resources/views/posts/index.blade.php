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
			<div class="panel panel-default">
				<div class="panel-header">
					<h1>{{ $post['usuario'] }}</h1>
				</div>
				<div class="panel-body">
					{{ $post['jefatura'] }}
				</div>
			</div>
	</div>
</body>
</html>