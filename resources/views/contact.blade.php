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

			<!-- Jumbotron -->
				<div class="jumbotron text-center">

				  <!-- Title -->
				  <h4 class="card-title h4 pb-2"><strong>here we are</strong></h4>

				  <!-- Card image -->
				  <div class="view overlay my-4">
				  	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3247.4495236917155!2d35.79735698525853!3d35.51788754652135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1526ac30a0f5adfd%3A0x86987861e5cf35f9!2z2YXYtNix2YjYuSDZitin2LPZitmG2Iwg2KfZhNmE2KfYsNmC2YrYqdiMINiz2YjYsdmK2Kc!5e0!3m2!1sar!2s!4v1589569464851!5m2!1sar!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
				    <a href="#">
				      <div class="mask rgba-white-slight"></div>
				    </a>
				  </div>

				  <h5 class="indigo-text h5 mb-4">the address</h5>

				  <p class="card-text">visit us for more options</p>

				  <!-- Linkedin -->
				  <a class="fa-lg p-2 m-2 li-ic"><i class="fab fa-linkedin-in grey-text"></i></a>
				  <!-- Twitter -->
				  <a class="fa-lg p-2 m-2 tw-ic"><i class="fab fa-twitter grey-text"></i></a>
				  <!-- Dribbble -->
				  <a class="fa-lg p-2 m-2 fb-ic"><i class="fab fa-facebook-f grey-text"></i></a>

				</div>
				<!-- Jumbotron -->

<!-- Footer -->
			<footer style="background-color: #4daf7c!important; position: absolute; right: 0;bottom:0;left:0;" class="page-footer font-small blue">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">© 2022 Copyright:
			  </div>
			  <!-- Copyright -->

			</footer>
			<!-- Footer -->
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