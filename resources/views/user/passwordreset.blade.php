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
@if (Session::get('error'))
  <div class="alert alert-error">
    {{ Session::get('error') }}
  </div>
@endif

{!! Form::open(['route' => ['passwordreset', $user], 'method' => 'put']) !!}
  {{ Form::password('old_password', array('placeholder'=>'current password', 'required'=>'required')) }}
  {{ Form::password('password', array('placeholder'=>'new password', 'required'=>'required')) }}
  {{ Form::password('password_confirmation', array('placeholder'=>'new password confirmation', 'required'=>'required')) }}
  {{ Form::submit('Reset Password', array('class' => 'btn')) }}
{{ Form::close() }}
</body>
</html>

