<!DOCTYPE html>
<html>
<head>
	<title>Registration form</title>
	<!-- <script src='https://www.google.com/recaptcha/api.js'></script> -->
	<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
</head>
<body>




<div class="container">


<form action="{{route('store_user')}}" method="POST">
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

		<!-- <label>USERNAME:</label><br>
		<input type="text" name="username"><br><br> -->
		
		<label>FIRSTNAME:</label><br>
		<input type="text" name="first_name"><br><br>

		<label>LASTNAME:</label><br>
		<input type="text" name="last_name"><br><br>

		<label for="title">Title:<br>
			<select name="title">
				<option value="ms">Ms</option>
				<option value="ms">Mrs</option>
				<option value="ms">Mr</option>
			</select>
		</label><br><br>

		<label>ORGANISATION:</label><br>
		<input type="text" name="organisation"><br><br>

		<label>DEPARTMENT:</label><br>
		<input type="text" name="department"><br><br>

		<label>POSITION:</label><br>
		<input type="text" name="position"><br><br>

		<label>POSTAL ADDRESS:</label><br>
		<input type="text" name="postal_address"><br><br>

		<label>PHONE:</label><br>
		<input type="number" name="phone"><br><br>

		<label>EMAIL:</label><br>
		<input type="email" name="email"><br><br>
		
		<label>COMMENT:</label><br>
		<input type="comment" name="comment"><br><br>

		<label>PASSWORD:</label><br>
		<input type="password" name="password"><br><br>

		<label>SECURITY IMAGE:</label>

		     {!!Recaptcha::render()!!}<br><br>		
		<!-- <div class="g-recaptcha" data-sitekey="6LeogU8UAAAAAMqL-CzfvGDWGEKn0wbXm6Gd6H9f"></div> -->

		     

		

		<button type="submit" value="submit">submit</button>
		</div>

</body>
</html>

