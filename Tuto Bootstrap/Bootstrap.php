<?php


?>

<!DOCTYPE html>

<html>

<head>

<title>BOOTSTRAP FOMRS</title>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">

</head>

<body>
	<div class="container">
		<div class="jumbotron">

			<h1 class="display-4">Jumotron Example</h1>

			<p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>

			<a class="btn btn-primary btn-lg" href="#" role="button">Button</a>

		</div>

		<h3>
			BOOTSTRAP VERTICAL FORM (DEFAULT):
		</h3>

		<form>
			<div class="form-group">
				<label for="inputEmail">
					Email
				</label>

				<input type="email" class="form-control" id="inputEmail" placeholder="Email">
			</div>

			<div class="form-group">
				<label for="inputPassword">
					Password
				</label>

				<input type="password" class="form-control" id="inputPassword" placeholder="Password">
			</div>

			<div class="checkbox">
				<label>
					<input type="checkbox">
						 Remember me
					</label>
			</div>

			<button type="submit" class="btn btn-primary">Login</button>
		</form>

		</br>

		</br>

		<h3>
			BOOTSTRAP HORIZONTAL FORM:
		</h3>

		<form>
			<div class="form-group row">
				<label for="inputEmail3" class="col-sm-2 col-form-label">
					Email
				</label>

				<div class="col-sm-10">
					<input type="email" class="form-control" id="inputEmail3" placeholder="Email">
				</div>
			</div>

			<div class="form-group row">
				<label for="inputPassword3" class="col-sm-2 col-form-label">
					Password
				</label>

				<div class="col-sm-10">
					<input type="password" class="form-control" id="inputPassword3" placeholder="Password">

				</div>
			</div>

			<div class="checkbox">
				<label class="control-label"><input type="checkbox">
					 Remember me
				</label>
			</div>

			<div class="form-group row">
				<div class="col-sm-10">
					<button type="submit" class="btn btn-primary">
						Sign in
					</button>
				</div>
			</div>
		</form>

		</br>
		
		</br>

		<h3>
			BOOTSTRAP INLINE FORM:
		</h3>

		<form class="form-inline">
			<div class="form-group">
				<label class="sr-only" for="inputEmail">
					Email
				</label>

				<input type="email" class="form-control" id="inputEmail" placeholder="Email">
			</div>

			<div class="form-group">
				<label class="sr-only" for="inputPassword">
					Password
				</label>

				<input type="password" class="form-control" id="inputPassword" placeholder="Password">
			</div>

			<div class="form-check mb-2 mr-sm-2">
				<input class="form-check-input" type="checkbox" id="inlineFormCheck">

				<label class="form-check-label" for="inlineFormCheck">
					Remember me
				</label>
			</div>
			
			<button type="submit" class="btn btn-primary mb-2">
				Submit
			</button>
		</form>
	</div>
</body>

</html>