<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login - Portfolio Admin</title>
</head>
<body>
    <form action="{{ route('register')}}" method="POST">
        @csrf
        <input type="text" placeholder="Enter Name" name="name"><br>
        <input type="email" placeholder="Enter Email" name="email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <button>Register</button>
    </form>
</body>
</html>