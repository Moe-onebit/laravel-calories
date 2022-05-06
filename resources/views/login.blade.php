<!doctype html>
<html lang="en">
 <head>
        <!-- Required meta tags -->
	    <meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   
			   <!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<!-- Google Fonts -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/css/mdb.min.css" rel="stylesheet">

		<title></title>
		<!-- for icon <link rel="icon" href=""> -->
 </head>
	<body>
			<!-- the nav bar-->
		  	<article>
		  		<!-- Image and text -->
			   <nav style="background-color: #00b16a!important;" class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
		         <a class="navbar-brand" href="#">
				    <img src="img/logo.jpg" width="30" height="30" class="d-inline-block align-top" alt="">
				    hello doctor
				  </a>

				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">

				  <ul class="navbar-nav mr-auto">

					<li class="nav-item active">
 						 <a class="nav-link" href="{{ url('/home')}}">Home <span class="sr-only">(current)</span></a>
					</li>

 						<li class="nav-item">
 							 <a class="nav-link" href="{{ url('/login')}}">Signin/signup</a>
								</li>

<li class="nav-item dropdown">
  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	more features
  </a>
  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	<a class="dropdown-item" href="{{ url('/bmi')}}">Bmi cal</a>
	<a class="dropdown-item" href="{{ url('/calories')}}">Calories cal</a>
  </div>

</li>

<li class="nav-item">
  <a class="nav-link" href="{{ url('/contact')}}">Contact us</a>
</li>

</ul>

				  </div>  
			  </nav>
			</article>
			<!-- end of nav bar-->

            <!-- Default form login -->
	<article>
		<form style="max-width: 500px; margin:20px auto;" class="text-center border border-light p-5" action="/test.php">

		    <p class="h4 mb-4">Sign in</p>

		    <!-- Email -->
		    <input type="email" id="" class="form-control mb-4" placeholder="E-mail">

		    <!-- Password -->
		    <input type="password" id="" class="form-control mb-4" placeholder="Password" required>
		     <input type="number" id="" class="form-control mb-4" placeholder="number" name="mobile>


		    <div class="d-flex justify-content-around">
		        <div>
		            <!-- Remember me -->
		            <div class="custom-control custom-checkbox">
		                <input type="checkbox" class="custom-control-input" id="defaultLoginFormRemember">
		                <label class="custom-control-label" for="defaultLoginFormRemember">Remember me</label>
		            </div>
		        </div>
		        <div>
		            <!-- Forgot password -->
		            <a href="">Forgot password?</a>
		        </div>
		    </div>

		    <!-- Sign in button -->
		    <button style="background-color: #00a56a!important; " class="btn btn-info btn-block my-4" type="submit">Sign in</button>

		    <!-- Register -->
		    <p>Not a member?
		        <a href="{{ url('/register')}}"> Register </a>
		    </p>

	</article>
	<!-- Default form login -->

	<!-- Footer -->
			<footer style="background-color: #4daf7c!important; position: absolute; right: 0;bottom:0;left:0;" class="page-footer font-small blue">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">© 2022 Copyright:
			  </div>
			  <!-- Copyright -->

			</footer>
			<!-- Footer -->
		


		<!-- if bootstrap is online -->
		<!-----------------------------
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	    ----------------------------->

		<!-- if bootstap is offline
		<script src="jquery.js"></script>
		<script src="javascript.js"></script>
		-->

		<!-- JQuery -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- Bootstrap tooltips -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
		<!-- Bootstrap core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<!-- MDB core JavaScript -->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.0/js/mdb.min.js"></script>

	</body>
</html>