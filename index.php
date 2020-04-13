<hmtl>
	<head>
		<title>Login Page</title>

			<!-- Latest compiled and minified CSS -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

			<!-- Optional theme -->
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

		<style>
			body
			{
				background-color: #F0F0F0;
			}

			.head1
			{
				color:#00008B;
			}
			.p1
			{
				color:#A0A0A0;
			}
			b{
				color:#00008B;
			}

			.main {
				  display: grid;
				  grid-template-columns: auto auto auto;
				
				  padding: 10px;
				}


				input
				{
					size:100%;
				}
				

				.btn btn-primary
				{
					margin-left:50px;
				}

				#submit1
				{
					

				}

				.register
				{
					background-color:#483D8B;
					height:400;
					width:700;
					margin-left:200px;
					margin-top:-60px;
				}

				.rem
				{
					color:white;
				}

		</style>
	</head>

	</head>



	<body>
		<h1 class="head1">Enter The System</h1>

		<p style="color:#A9A9A9">It is necessary to login in your account in order to signup a course. </p>

		<h2 class="p1">ARE YOU NEW ? <b>REGISTER</b></h2>


		<div class="main">
            <div class="login">
            	<form action="register.php" method="POST">
            		<input type="text" placeholder="username"  class="form-control" name="username" required><br><br>
            		<input type="text" placeholder="email" class="form-control" name="email" required><br><br>
            		<input type="text" placeholder="password" class="form-control" name="pass" required><br><br>
            		<input type="text" placeholder="confirm password" class="form-control" name="cpass" required><br><br>

            		<input type="submit" value="Register" class="btn btn-primary" id="submit1" name="con">
            		
            		
            		
            	</form>



            </div>
             <div class="register">
             	
             		<h1 style="color:white; margin-left:50px;">ALREADY A STUDENT? LOGIN</h1>


             		<form action="login.php" method="POST">

            		<input type="text" placeholder="username"  class="form-control" name="name" required><br><br>
            		<input type="text" placeholder="password" class="form-control"  name="password"><br><br>
            		

            		<input type="checkbox" name="register" ?>

            		<label for="remember-me" class="rem">Remember Me </label>
            		

            		<input type="submit" value="Login" class="btn btn-primary" id="submit1" name="login">

            	
            			


            		
            		
            		
            		
            	</form>



             </div>
		</div>

	</body>
</hmtl>