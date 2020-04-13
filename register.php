<?php
 

 session_start();

 $conn=mysqli_connect("localhost","root","");

 mysqli_select_db($conn,'student');

    if(isset($_POST['con']))
    {
	 $username=$_POST['username'];
	 $email=$_POST['email'];
	 $pass=$_POST['pass'];
	 $cpass=$_POST['cpass'];

	// $s='select * from register where username="$username" ';


	 

	

	if($cpass!=$pass)
	 {
	 

	 echo'	<script type="text/javascript">
			alert("password and conform password should be same");
			location="index.php";
			</script>';
	 }
  else

  {

	 $query="INSERT into register(username,email,pass,cpass) VALUES ('$username','$email','$pass','$cpass')";


	 if(mysqli_query($conn,$query)){
	 	/*echo "<script>alert('you have registered successfully')</script>";
	 	redirect('index.php');
*/


	 	  
		   /*header("location:index.php");    
		   echo "<script type='text/javascript'>alert('Your File Size is too big!');</script>";*/   
		  	
		 echo'	<script type="text/javascript">
				alert("you have register successfully!");
				location="index.php";
				</script>';

	 }

	}
}






?>