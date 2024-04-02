<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>register</title>
</head>

<body>
    <div class="container">
        <div class="heading">register</div>
        <form method="POST" action="{{ url("/register") }}" class="form">
            @csrf
            <input required="" class="input" type="name" name="name" id="name" placeholder="name">
            <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
            <input required="" class="input" type="password" name="password_confirmation" id="password" placeholder="confirm Password">
            <input class="login-button" type="submit" value="register">
            <input class="login-button" value="login" href="{{ url("/login") }}>
        </form>
    </div>
</body>

</html>
