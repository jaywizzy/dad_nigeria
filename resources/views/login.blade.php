<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
</head>
<body>
    <div class="container">
    

        <div class="col-md-4">
        <br>
        {!! Form::open(['url' =>  'auth-login', 'method' => 'post']) !!}

            <div class="form-group">
                <label for="">Email</label>
                {!! Form::email('email', null, array('class' => 'form-control')) !!} <br>
            </div>
            <div class="form-group">
                <label for="">Password</label><br>
                {!! Form::password('password', array('class' => 'form-control')) !!}
            </div>
            <br><br>
            <button type="submit" class="btn btn-primary"> Login</button>

        {!! Form::close() !!}

        <p>Don't have an account?</p><a href="register"> Signup</a>
        </div>
    </div>
    <!-- <form action="auth-login">
    
    {{ csrf_field() }}
    
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

    </form> -->
    
</body>
</html>
