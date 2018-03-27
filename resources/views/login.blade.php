<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
</head>
<body>
<br><br>
    <form action="auth-login">
        <input type="hidden" name="{{ csrf_field() }}"> 
        <div class="form-group col-md-12 offset-4">
            <div class="col-md-4">
            <span>Email</span> <input type="text" name="email" > 
            </div>
            <div class="col-md-4">
             <span>Password</span> <input type="password" name="password" > 
            </div>
            <br>
        <button type="submit" class="btn btn-success offset-2" >Login</button>
            
        </div>

    </form>
</body>
</html>