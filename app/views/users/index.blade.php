<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Laravel Exercise</title>
	</head>
	<body>
		<h1>All users.</h1>

		@if (count($users) < 1)
			<p>
				there are no users
			</p>
		@endif

		@foreach ($users as $user)
			<li>{{ link_to("/users/{$user->username}", $user->username) }}</li>
		@endforeach
	</body>
</html>
