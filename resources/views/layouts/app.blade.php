<!DOCTYPE html>
<html lang="en">
<head>
    <title>Empress Cookies and Pastries</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- bootstrap 4.6.0 -->
    <<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="#">Empress Cookies and Pastries</a>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Products</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">Blog</a>
      </li>
      
    </ul>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0 justify-content-end">
      
      <li class="nav-item">
        <a class="nav-link" href="#">Login</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{route('register')}}">Register</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#">RayRay</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Logout</a>
      </li>
      
    </ul>
    
  </div>
</nav>






        <div class="container">

            @yield('content')

        </div>







      <hr>

		<div id="footer">
			<div>
				<div class="connect">
					<a href="http://www.facebook.com" class="mx-3"><i class="fab fa-facebook"></i>facebook</a>
					<a href="http://www.twitter.com" class="mx-3"><i class="fas fa-camera"></i>twitter</a>
					<a href="http://www.instagram.com" class="mx-3">Instagram</a>
					<a href="http://pinterest.com/fwtemplates/" class="mx-3">pinterest</a>
				</div>
				<p>&copy; 2023 Empress. All Rights Reserved.</p>
			</div>
		</div>
	</div>














<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>




</body>
</html>
