<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
	<!-- <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}"> -->
	<!-- <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css"> -->
</head>
<body>




<div class="container">
	
	@if($errors)
		<!-- <div class="alert alert-danger"> -->
			<ul>
				@foreach($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		<!-- </div> -->
	@endif
		{{csrf_field()}}

	{!! Form::open(['url' => 'save', 'method' => 'post']) !!}

		<div class="form-group">
			{{ Form::label('first_name', 'First_name') }}
			{{ Form::text('first_name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('last_name', 'Last_name') }}
			{{ Form::text('last_name', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('title', 'Title') }}
			{{ Form::text('title', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('organisation', 'Organisation') }}
			{{ Form::text('organisation', null, array('class' => 'form-control')) }}
		</div>

		<div class="form-group">
			{{ Form::label('department', 'Department') }}
			{{ Form::text('department', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('position', 'Position') }}
			{{ Form::text('position', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('postal_address', 'Postal_adress') }}
			{{ Form::text('postal_address', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('phone', 'Phone') }}
			{{ Form::text('phone', null, array('class' => 'form-control')) }}
		</div>
		<div class="form-group">
			{{ Form::label('email', 'Email') }}
			{{ Form::email('email', null, array('class' => 'form-control')) }}
		</div>					

		{!!Recaptcha::render()!!}<br><br>		
			<!-- <div class="g-recaptcha" data-sitekey="6LeogU8UAAAAAMqL-CzfvGDWGEKn0wbXm6Gd6H9f"></div> -->
	

			<button type="submit" class="btn btn-primary" value="submit">submit</button>
			<button type="reset" class="btn btn-success" >Cancel</button>
	</div>	
</div>

</body>
</html>

