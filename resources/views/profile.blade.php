<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/profile.css")}}">
    <title>profile</title>
</head>
<body>
<div class="card-container">
	<img class="round" src="https://randomuser.me/api/portraits/women/79.jpg" alt="user" />
	<h3>{{$user->name}}</h3>
	<h3>{{$user->email}}</h3>
	<div class="buttons">
    <button onclick="location.href='{{ url("/logout")}}'" class="primary ghost">Logout</button>
	</div>
</div>

</body>
</html>
