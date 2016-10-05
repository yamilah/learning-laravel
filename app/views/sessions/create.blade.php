<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	{{ Form::open(['route' => 'sessions.store']) }}
	<div>
		{{ Form::label('email', 'Email:') }}
		{{ Form::email('email') }}
	</div>

	<div>
		{{ Form::label('password', 'Password:') }}
		{{ Form::text('password') }}
	</div>

	<div>
		{{ Form::submit('Login') }}
	</div>
	{{ Form::close() }}
</body>
</html>
