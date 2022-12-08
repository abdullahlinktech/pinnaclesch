<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="{{ asset('css/login.css') }}">
</head>
<body>
	<form class="box" method="POST" action="{{ route('login') }}">
    <div class="alert alert-warning">
      <strong>Warning!</strong> .
    </div>
		@csrf
          <div class="logo">
            <img src="user.png">
          </div>
        <h1>Admin Login</h1>
        <input type="text" name="username" placeholder="username" required>
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" value="Login">
    </form>
</body>
</html>