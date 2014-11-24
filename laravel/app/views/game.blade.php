<!doctype html>
<html>
	<head>
		<title> Add Game </title>
	</head>
	<body>
		<h1> Add Game </h1>
		<p> Welcome back {{ Auth::user()->name }} </p>
		<p> Please enter the details of the game </p>

		<!-- Game resuls submission form -->
		{{ Form::open(array('url' => 'game')) }}

	     {{ Form::text('location', '', array('placeholder' => 'Location')) }}

	     {{ Form::select('player1_id', $players, '0') }}
	     {{ Form::select('player2_id', $players, '0') }}

	     {{ Form::text('player1_score', '', array('placeholder' => 'Player 1 Score')) }}
	     {{ Form::text('player2_score', '', array('placeholder' => 'Player 2 Score')) }}

	     {{ Form::submit('Create Game')}}

	{{ Form::close() }}

	</body>
</html>