<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vovin</title>
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>
<body>
	<div class="welcome">
		<h1 class="highlight">Welcome to Vovin</h1>
	</div>
	<nav>
		<ul>
			<li><a href="{{ URL::to('login') }}">Login</a></li>
			<li><a href="{{ URL::to('register') }}">Register</a></li>
			<li><a href="{{ URL::to('leaderboard') }}">Leaderboard</a></li>
			<li><a href="{{ URL::to('game') }}">Add Game</a></li>
		</ul>
	</nav>
</body>
</html>
