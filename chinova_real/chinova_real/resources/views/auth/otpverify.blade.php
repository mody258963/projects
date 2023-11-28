<!doctype html>
<html lang="en">
  <head>
  	<title>Chainova</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="assets/css/style.css">

	</head>
	<body class="img js-fullheight" style="background-image: url(assets/img/bg.jpg);">
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Chainova</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-4">
					<div class="login-wrap p-0">
		      	<h3 class="mb-4 text-center">Have an account?</h3>
		      	<form action="{{route('verify.Otp')}}" method="POST" class="signin-form">
                    @csrf
		      		<div class="form-group">
		      			<input type="text" id="otp" name="otp"class="form-control" placeholder="OPT" required>
		      		</div>
	   
	            <div class="form-group">
	            	<button type="submit" class="form-control btn btn-primary submit px-3">Verify Otp</button>
	            </div>
	            <div class="form-group d-md-flex">
								</div>
								<div class="w-50 text-md-right">
									<a href="#" style="color: #fff">Forgot Password</a>
								</div>
	            </div>
	          </form>
	          <p class="w-100 text-center">&mdash; Or Sign In With &mdash;</p>
	          <div class="social d-flex text-center">
	          	<a href="{{route('google.uri')}}" class="px-2 py-2 mr-md-1 rounded"><span class="ion-logo-facebook mr-2"></span> Gmail</a>
                  <a href="{{route('SignUpPage')}}" class="px-2 py-2 ml-md-1 rounded">Signup</a>

	          </div>
		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="assets/js/jquery.min.js"></script>
  <script src="assets/js/popper.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

	</body>
</html>

