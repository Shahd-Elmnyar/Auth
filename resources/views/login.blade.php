<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset("css/style.css")}}">
    <title>login</title>
</head>

<body>
    <div class="container">
        <div class="heading">login</div>
        <form method="POST" action="{{ url("/login") }}" class="form">
            @csrf
            <input required="" class="input" type="email" name="email" id="email" placeholder="E-mail">
            <input required="" class="input" type="password" name="password" id="password" placeholder="Password">
            <input class="login-button" type="submit" value="login">
        </form>
    </div>
</body>

</html>
