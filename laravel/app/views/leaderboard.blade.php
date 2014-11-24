<!doctype html>
<html>
	<head>
		<title> Leaderboard </title>
	</head>
	<body>
		<h1> Leaderboard </h1>
		<table>
			@foreach ($leaders as $leader)
				<tr> <td> {{ $leader->name }} </td> <td> {{ $leader->wins }} </td> </tr>
			@endforeach
		</table>
	</body>
</html>