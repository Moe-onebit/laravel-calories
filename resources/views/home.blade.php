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

			<style>
				.wrapper{
					width: 1000px;
					margin: auto;
					margin-top: 100px;
				}
				.card{
					box-shadow: 0 4px 8px 0 rgba(0,0,0,0.6);
					transition: 0.4s;
					width: 300px;
					background: #fff;
					text-align: center;
					font-size: 16px;
					float: left;
					margin: 10px;
					min-height: 10px;
				}
				.card:hover{
					box-shadow: 0 8px 16px 0 rgba(0, 0, 0, 0.6);
				}
				.container{
					padding: 2px 16px;
				}
				hr.solid {
  					border-top: 3px #00b16a #bbb;
				}
				.flex{
					flex-grow: 1;
				}
			
			</style>
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


			<div class="grid">
				<a href="{{ url('/bmi')}}">
				<div class="wrapper">
					<div class="card">
					<img src="img/img6.jpg " alt="Avatar" style="width:100%">
					<div class="container">
						<hr class="solid">
					  <h4><b>Calories Calculator</b></h4>
					  <p>Architect & Engineer</p>
					</div>
				  </div>
				</div>
			</a>

				<div class="wrapper">
					<a href="{{ url('/diet')}}">
					<div class="card">
					<img src="img/img8.jpg" alt="Avatar" style="width:100%">
					<div class="container">
						<hr class="solid">
					  <h4><b>Order a diet</b></h4>
					  <p>Architect & Engineer</p>
					</div>
				  </div>
				</div>
				</a>

				<div class="wrapper">
					<a href="{{ url('/bmi')}}">
					<div class="card">
					<img src="img/img7.jpg" alt="Avatar" style="width:100%">
					<div class="container">
						<hr class="solid">
					  <h4><b>BMI Calculator</b></h4>
					  <p>Architect & Engineer</p>
					</div>
				</div>
				</div>
				</a>
			</div>

			<!-- Footer -->
			<footer style="background-color:#4daf7c!important; position: absolute; right: 0;bottom:0;left:0;" class="page-footer font-small blue">

				<!-- Copyright -->
				<div class="footer-copyright text-center py-3">© 2022 Copyright:
				</div>
				<!-- Copyright -->
  
			  </footer>
			  <!-- Footer -->

			</body>
			</html>