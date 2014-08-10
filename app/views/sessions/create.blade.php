<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login Page</title>
</head>
<body>
	<div>
		@if (Session::has('login_errors'))
  	 <span class="error">Username or password incorrect.</span>
	 @endif
	 {{ Form::open(['route' => 'sessions.store']) }}
	 		<div>
				{{ Form::label('email', 'Email:') }}
				{{ Form::email('email') }}
			</div>

			<div>
				{{ Form::label('password', 'Password:') }}
				{{ Form::password('password') }}
			</div>

			<div>
				{{ Form::submit('Login') }}
			</div>
			{{ Form::close() }}
	</div>
</body>
</html>