

<?php
 

 session_start();

 $conn=mysqli_connect("localhost","root","");

 mysqli_select_db($conn,'student');

    if(isset($_POST['login']))
    {
	 $name=$_POST['name'];
	 $password=$_POST['password'];

	// $s='select * from register where username="$username" ';


	 $query="SELECT * from register where username='$name' AND pass='$password';
	 $r=mysqli_query($conn,$query);
	 if(mysqli_num_rows($r)==1)
	 {
	 	/* echo'	<script type="text/javascript">
				alert("Login suceessfully!");
				location="
	 }

	 else
	 {
	 	echo' <script type="text/javascript">
			alert("Not a member !please Register and then then try to loogin");
			location="index.php";
			</script>';

	 }


	

	


?>