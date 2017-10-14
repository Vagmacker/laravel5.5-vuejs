
<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
	<div id="app">
		<myheader></myheader>
			<div class="container">
				<router-view></router-view>
			</div>
		<myfooter></myfooter>
	</div>
	<script src="{{ asset('js/app.js') }}"></script>
</body>