<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Scrabble Scoreboard</title>
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}">
</head>
<body>
	<div class="welcome">
		<a href="http://laravel.com" title="Scrabble Leaderboard"><img src="{{ URL::asset('image/scrabble.png') }}" alt="Scrabble Logo"></a>
		<h1 class="highlight">Welcome to Scrabble Score! {{ $theLocation }} on {{ date('d M Y')}}.</h1>
		@if($theWeather)
			<p>It's a {{$theWeather}} day.</p>
		@else
			<p>No forecast</p>
		@endif
		<p>Don't miss:</p>

		{{ Form::open(array('url' => 'thanks')) }}
			{{ Form::text('email', '', array('placeholder' => 'Username')) }}
			{{ Form::password('password', '', array('placeholder' => 'Password')) }}
     		{{ Form::submit('Login')}}
		{{ Form::close() }}


		<ul style="text-align:left">
			@foreach($theLandmarks as $landmark)
				@unless ($landmark == 'Dog')
					<li>{{$landmark}}</li>
				@endunless
			@endforeach
		</ul>
	</div>
</body>
</html>
