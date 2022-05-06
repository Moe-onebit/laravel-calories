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

    

<script>

function Calculate() {

    var gender = document.getElementById("gender").value;
    var weight = parseFloat(document.getElementById("weight").value);
    var height = parseFloat(document.getElementById("height").value);
    var age    = parseFloat(document.getElementById("age").value);
    var activitylevel = document.getElementById("activitylevel").value;
	var MaintenanceCalories = 0;


    if(gender=="male") 
    //English-BMR = 66 + ( 6.23 x weight in pounds ) + ( 12.7 x height in inches ) - ( 6.8 x age in year )
    //Metric-BMR = 66 + ( 13.7 x weight in kilos ) + ( 5 x height in cm ) - ( 6.8 x age in years )
        {
            var val1 = 13.7 * weight;
            var val2 = 5 * height;
            var val3 = 6.8 * age;
            var result = 66 + val1 + val2 - val3;
            var val4 = activitylevel;
        }

    else if (gender=="female")
    //English-Women: BMR = 655 + ( 4.35 x weight in pounds ) + ( 4.7 x height in inches ) - ( 4.7 x age in years)
    //Women: BMR = 655 + ( 9.6 x weight in kilos ) + ( 1.8 x height in cm ) - ( 4.7 x age in years )
        {
            var val1 = 9.6 * weight;
            var val2 = 1.8 * height;
            var val3 = 4.7 * age;
            var result = 655 + val1 + val2 - val3;
            var val4 = activitylevel;
        }


   switch(val4) {
    	case "l":
      	MaintenanceCalories = result * 1.2;
		break;

      case "lm":
      	MaintenanceCalories = result * 1.375;
      	break;

   		case "m":
	      MaintenanceCalories = result * 1.55;
        break;

    	case"mh":
	       MaintenanceCalories = result * 1.725;
         break;
				 
		case "h":
 	       MaintenanceCalories = result * 1.9;
        break;
				
		default: "m";
	 }

        document.getElementById("output1").innerText = (result.toFixed(2));
        document.getElementById("output2").innerText = (MaintenanceCalories.toFixed(2));

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
  <a class="nav-link" href="{{ url('/contact')}}">contact us</a>
</li>

</ul>


				  </div>  
			  </nav>
			</article>
			<!-- end of nav bar-->
			
		  <main>
		  	 <h1> BMR Calculator and Daily Maintenance Calorie Calculator </h1>
		  	<form style="max-width: 500px; margin:20px auto;" class="text-center border border-light p-5" action="#!">
	
			  <div class="form-group">
			     <label for="formGroupExampleInput">enter your height</label>
			     <input type="text" class="form-control" id="height" placeholder="188 for Example">
			  </div>

			  <div class="form-group">
				    <label for="formGroupExampleInput2">enter your weight</label>
				    <input type="text" class="form-control" id="weight" placeholder="85 for Example">
			  </div>

			  <div class="form-group">
			     <label for="formGroupExampleInput2">enter your age</label>
		      	 <input type="number" class="form-control" id="age" placeholder="your age">
		      </div>

			   <div class="form-row mb-4">
			    	<div class="col">
				        <select class="form-control mb-4" id="gender">
						  <option value="" disabled selected>gender</option>
						  <option value="male">male</option>
						  <option value="female">female</option>
						</select>
					</div>

					<div class="col">
				       <select class="form-control mb-4" id="activitylevel">
				       	    <option value=""disabled selected>activety rate</option>
					        <option value="l">Sedentary (Little or No Exercise)</option>
					        <option value="lm">Lightly Active (Light Exercise/Sports 1-3 Days Per Week)</option>
					        <option value="m">Moderateley Active (Moderate Exercise/Sports 3-5 Days Per Week)</option>
					        <option value="mh">Very Active (Hard Exercise/Sports 6-7 days Per Week)</option>
					        <option value="h">Extra Active (Very Intense Exercise/Sports and Physical Job Daily)</option>
					    </select>
					</div>		    
				</div>

			  <button style="background-color: #00a56a!important; "type="button" class="btn btn-primary"
			  value="Calculate" onclick="Calculate();">get your result</button>
			  <br>

			     <h3>Your BMR is: <span id="output1">?</span></h3>
			     <h3>Your Maintenance Calories are: <span id="output2">?</span></h3>

        
         

			  
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