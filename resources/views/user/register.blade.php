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
					

				<div class="col-md-4 col-lg-4">
					<div class="form-group">
				
					<label>FIRSTNAME:</label><br>
					<input type="text" name="first_name" class="form-control">
					</div>
				</div>
				<div class="col-md-4 col-lg-4">	
					<div class="form-group">
						<label>LASTNAME:</label><br>
						<input type="text" name="last_name" class="form-control">
					</div>
				</div>

				<div class="col-md-4 col-lg-4">
					<div class="form-group">
					<label for="title">Title:<br>
					<select name="title" class"form-control">
						<option value="ms">Ms</option>
						<option value="mrs">Mrs</option>
						<option value="mr">Mr</option>
					</select>
					</div>
					
				</div>

				<div class="col-md-4">
					<div class="form-group">
					<label>ORGANISATION:</label><br>
					<input type="text" name="organisation" class"form-control"><br><br>
					</div>
					
				</div>
				
				<div class="col-md-4">
					<div class="form-group">
				<label>DEPARTMENT:</label><br>
				<input type="text" name="department" class"form-control"><br><br>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
				<label>POSITION:</label><br>
				<input type="text" name="position"><br><br>
					</div>
				</div>

				<div class="col-md-4">
					<div class="form-group">
				<label>POSTAL ADDRESS:</label><br>
				<input type="text" name="postal_address"><br><br>
					</div>
				</div>


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

					

				

				<button type="submit" class="btn btn-primary" value="submit">submit</button>
				<button type="reset" class="btn btn-success" >Cancel</button>
			</form>
	</div>	
</div>

</body>
</html>

