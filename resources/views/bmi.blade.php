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

            <title>BMI Calculator</title>
             
	        <script type="text/javascript">
	          
	            function computeBMI() {
	                // user inputs
	                var height = Number(document.getElementById("formGroupExampleInput").value);
	                var heightunits = document.getElementById("heightunits").value;
	                var weight = Number(document.getElementById("formGroupExampleInput2").value);
	                var weightunits = document.getElementById("weightunits").value;
	        
	        
	                //Convert all units to metric
	                if (heightunits == "inches") height /= 39.3700787;
	                if (weightunits == "lb") weight /= 2.20462;
	        
	                //Perform calculation
	        
	                //        var BMI = weight /Math.pow(height, 2)*10000;
	                var BMI = Math.round(weight / Math.pow(height, 2) * 10000);
	        
	                //Display result of calculation
	                document.getElementById("output").innerText = Math.round(BMI * 100) / 100;
	        
	                var output = Math.round(BMI * 100) / 100
	                if (output < 18.5)
	                    document.getElementById("comment").innerText = "Underweight";
	                else if (output >= 18.5 && output <= 25)
	                    document.getElementById("comment").innerText = "Normal";
	                else if (output >= 25 && output <= 30)
	                    document.getElementById("comment").innerText = "Obese";
	                else if (output > 30)
	                    document.getElementById("comment").innerText = "Overweight";
	                // document.getElementById("answer").value = output; 
	            }
	        </script>
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
			
		  <main>
		  	 <h1>Body Mass Index Calculator</h1>
		  	 <h2>Body mass index (BMI) is a measure of body fat based on height and weight<br> that applies to adult men and women.</h2>
		  	<form style="max-width: 500px; margin:20px auto;" class="text-center border border-light p-5" action="#!">
	
			  <div class="form-group">
			     <label for="formGroupExampleInput">enter your height</label>
			     <input type="text" class="form-control" id="formGroupExampleInput" placeholder="188 for Example">

			     <select type="multiple" class="col" id="heightunits">
		                <option value="metres" selected="selected">metres</option>
		                <option value="inches">inches</option>
                 </select>
			  </div>

			  <div class="form-group">
				    <label for="formGroupExampleInput2">enter your weight</label>
				    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="85 for Example">
				    <select type="multiple" class="col" id="weightunits">
			                <option value="kg" selected="selected">kilograms</option>
			                <option value="lb">pounds</option>
	                </select>
			  </div>

			  <button style="background-color: #00a56a!important; "type="button" class="btn btn-primary"
			  value="computeBMI" onclick="computeBMI();">get your result</button>
			  <br>

			     <h3>Your BMI is: <span id="output">?</span></h3>
        
                 <h3>This means you are: <span id="comment"> ?</span> </h3> 

         
			
			  
			</form>

		  	
		  </main>

		<!-- Footer -->
			<footer style="background-color: #4daf7c!important; position: absolute; right: 0;bottom:0;left:0;" class="page-footer font-small blue">

			  <!-- Copyright -->
			  <div class="footer-copyright text-center py-3">© 2022 Copyright:
			  </div>
			  <!-- Copyright -->

			</footer>
			<!-- Footer -->
        <!-- Footer -->
	 	<!-- if bootstap is offline
		<script src="jquery.js"></script>
		<script src="javascript.js"></script>
		-->

		<script src="bmijs.js"></script>
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