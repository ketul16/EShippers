<?php
		$type = $_POST["rg"];
		

		if($type == "carrier")
		{
	$password = $_POST['pass'];
	$repass = $_POST['repass'];
	$label = $_POST['name1'];
	
	if($password == $repass)
	{
			define('HOST_NAME','mysql.hostinger.in');
			define('USER_NAME','u891124005_user1');
			define('PASSWORD','Shraddha2702');
			define('DATABASE','u891124005_trans');

			$con=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);

			if(!$con)
			{
				echo "Connection Failed";
				/*$label = "Try again ! Connection Error :(";*/
			}

			else
			{
				
				
				$email = $_POST['email'];
				
				$sql = "SELECT * FROM supplier WHERE c_email = '$email' AND c_password = '$password'";
				
				$result=mysqli_query($con,$sql);

				$response=array();

				$check=mysqli_fetch_array($result);

				if(isset($check))
				{
					$label = "Enter a valid email id";
				}
				else
				{
					$name = $_POST['name'];
					$hqadd = $_POST['add'];
					$branchadd = $_POST['badd'];
					$phone = $_POST['mob'];
					$verif = $_POST['verif'];
					
					$sql1 = "INSERT into supplier values('$name','$email','$password','$hqadd',
					'$branchadd','$phone','$verif')";
					$result1=mysqli_query($con,$sql1);
					
					if($result1)
					{

						header("Location:carrierpage.php");
					}
					
				} }

			}
	

		}
		else if($type == "supplier")
		{
			<?php

	$password = $_POST['pass'];
	$repass = $_POST['repass'];
	$label = $_POST['name1'];
	
	if($password == $repass)
	{
			define('HOST_NAME','mysql.hostinger.in');
			define('USER_NAME','u891124005_user');
			define('PASSWORD','Shraddha2702');
			define('DATABASE','u891124005_comp');

			$con=mysqli_connect(HOST_NAME,USER_NAME,PASSWORD,DATABASE);

			if(!$con)
			{
				
			}

			else
			{
				
				$email = $_POST['email'];
				
				$sql = "SELECT * FROM supplier WHERE s_email = '$email' AND s_password = '$password'";
				
				$result=mysqli_query($con,$sql);

				$response=array();

				$check=mysqli_fetch_array($result);

				if(isset($check))
				{
					$label = "Enter a valid email id";
				}
				else
				{
					$name = $_POST['name'];
					$hqadd = $_POST['add'];
					$branchadd = $_POST['badd'];
					$phone = $_POST['mob'];
					$verif = $_POST['verif'];
					
					$sql1 = "INSERT into supplier values('$name','$email','$password','$hqadd',
					'$branchadd','$phone','$verif')";
					$result1=mysqli_query($con,$sql1);
					
					if($result1)
					{
						header("Location:supplier_form.html");
					}
					
				}
			}
	}
	else
	{
			
			echo "Connected Successfully";
	}


?>
	