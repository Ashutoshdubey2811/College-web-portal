<?php 

error_reporting(0);
session_start();


$host="127.0.0.1:3307";

$user="root";

$password="";

$db="project32";


$data=mysqli_connect($host,$user,$password,$db);


if($data===false)
{
	die("connection error");
}

		
	if($_SERVER["REQUEST_METHOD"]=="POST")
	{
		$name = $_POST['name'];

		$pass = $_POST['password'];


		$sql="select * from user where name='".$name."' AND password='".$pass."'  ";

		$result=mysqli_query($data,$sql);

		$row=mysqli_fetch_array($result);



		if($row["usertype"]=="student")
		{

			$_SESSION['name']=$name;

			$_SESSION['usertype']="user";

			header("location:studenthome.php");
		}

		elseif($row["usertype"]=="admin")
		{	
			$_SESSION['name']=$name;

			$_SESSION['usertype']="admin";

			header("location:dash.php");
		}

		else
		{
			

			$message= "username or password do not match";

			$_SESSION['loginMessage']=$message;

			header("location:login.php");
		}


	}


?>


