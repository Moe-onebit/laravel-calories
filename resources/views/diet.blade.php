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
		         <a  class="navbar-brand" href="#">
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

			<!-- Default form register -->
		<form style="max-width: 800px; margin:20px auto;" class="text-center border border-light p-5" action="#!">


			<table  class="table">
			<thead style="background-color: #00b16a!important;" class="black white-text">
			    <tr>
			      <th scope="col">days</th>
			      <th scope="col">breakfast</th>
			      <th scope="col">first snack</th>
			      <th scope="col">lunch</th>
			      <th scope="col">sec snack</th>
			      <th scope="col">dinner</th>
			      <th scope="col">last snack</th>
			    </tr>
			  </thead>

			  <tbody>
			    <tr>
			      <th scope="row">sunday</th>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>


			    </tr>
			    <tr>
			      <th scope="row">monday</th>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      
			     
			    </tr>
			    <tr>
			      <th scope="row">tuesday</th>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			    
			    </tr>

			    <tr>
			      <th scope="row">wednesday</th>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			     
			    </tr>

			     <tr>
			      <th scope="row">thursday</th>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			     
			    </tr>
			    <tr>
			      <th scope="row">friday</th>
			     <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      
			    </tr>
			    <tr>
			      <th scope="row">saturday</th>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			      <td><input type="text" id="defaultRegisterFormLastName" class="form-control" placeholder="Last name"></td>
			 	</tr>
			  </tbody>
			</table>
		    <button style= "max-width: 300px; margin:20px auto; background-color: #00a56a!important; "class="btn btn-info my-4 btn-block" type="submit">submit</button>
		</form>




<!-- Footer -->
			<footer style="background-color:#4daf7c!important; position: absolute; right: 0;bottom:0;left:0;" class="page-footer font-small blue">

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