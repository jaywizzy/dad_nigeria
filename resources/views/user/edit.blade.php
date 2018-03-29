<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
</head>
<body>
{!! Form::open(['route' => ['update', $user->id], 'method' => 'put']) !!}

<div class="form-group">
    {{ Form::label('first_name', 'First_name') }}
    {{ Form::text('first_name', $user->first_name, array('class' => 'form-control')) }}
</div>

 <div class="form-group">
    {{ Form::label('last_name', 'Last_name') }}
    {{ Form::text('last_name', $user->last_name, array('class' => 'form-control')) }}
</div>

 <div class="form-group">
    {{ Form::label('organisation', 'Organisation') }}
    {{ Form::text('organisation', $user->organisation, array('class' => 'form-control')) }}
</div>

 <div class="form-group">
    {{ Form::label('title', 'Title') }}
    {{ Form::text('title', $user->title, array('class' => 'form-control')) }}
</div>
 <div class="form-group">
    {{ Form::label('department', 'Department') }}
    {{ Form::text('department', $user->department, array('class' => 'form-control')) }}
</div>
 <div class="form-group">
    {{ Form::label('position', 'Position') }}
    {{ Form::text('position', $user->position, array('class' => 'form-control')) }}
</div>
 <div class="form-group">
    {{ Form::label('postal_address', 'Postal_adress') }}
    {{ Form::text('postal_address', $user->postal_address, array('class' => 'form-control')) }}
</div>
 <div class="form-group">
    {{ Form::label('phone', 'Phone') }}
    {{ Form::text('phone', $user->phone, array('class' => 'form-control')) }}
</div>
<div class="form-group">
    {{ Form::label('email', 'Email') }}
    {{ Form::email('email', $user->email, array('class' => 'form-control')) }}
</div>

{{ Form::submit('Edit User!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
<li><a href="{{ URL::to('resetpassword') }}">reset password</a></li>
</body>
</html>

