<?php
session_start();
$con=mysqli_connect("localhost","root","","fasdb");
if(isset($_POST['facsub'])){
	$email=$_POST['email'];
	$password=$_POST['password2'];
	$query="select * from faculty where email='$email' and password='$password';";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==1)
	{
		while($row=mysqli_fetch_array($result,MYSQLI_ASSOC)){
      $_SESSION['pid'] = $row['pid'];
      $_SESSION['username'] = $row['fname']." ".$row['lname'];
      $_SESSION['fname'] = $row['fname'];
      $_SESSION['lname'] = $row['lname'];
    
      $_SESSION['email'] = $row['email'];
    }
		header("Location:admin-panel.php");
	}
  else {
    echo("<script>alert('Invalid Username or Password. Try Again!');
          window.location.href = 'index1.php';</script>");
    // header("Location:error.php");
  }
		
}
?>