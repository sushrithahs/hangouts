<?php 
session_start(); 
@include 'db_conn.php';

if (isset($_POST['email']) &&  isset($_POST['password'])) {

	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$password = mysqli_real_escape_string($conn,$_POST['password']);
	$select="SELECT * FROM USER WHERE EMAIL='$email' && PASSWORD='$password'";
	$result=mysqli_query($conn,$select);
	$userid="SELECT USER_ID FROM USER WHERE EMAIL='$email' ";
	$useridresult=mysqli_query($conn,$userid);
	$useridrow=mysqli_fetch_array($useridresult);
	$lendedselect=" SELECT SUM(RECIEVE_AMOUNT) as ls FROM STATUS where payee_id='$useridrow[0]' ";
	$lendedresult=mysqli_query($conn,$lendedselect);
	$borrowedselect=" SELECT SUM(OWE_AMOUNT) as bs FROM STATUS where payer_id='$useridrow[0]' ";
	$borrowedresult=mysqli_query($conn,$borrowedselect);
	
	
	//if(mysqli_num_rows($result)>0)
	//{
		$row=mysqli_fetch_array($result);
		$lendedrow=mysqli_fetch_array($lendedresult);
		$borrowedrow=mysqli_fetch_array($borrowedresult);
		//print_r($row);
		//if($row['email']=='$email')
		//{
			//print_r($row);
			//print($row[7]);
			//print($lendedrow[0]);
			$_SESSION['email']=$row[7];
			$_SESSION['first_name']=$row[1];
			$_SESSION['last_name']=$row[2];
			$_SESSION['userid']=$row[0];
			$_SESSION['lended']=$lendedrow[0];
			$_SESSION['borrowed']=$borrowedrow[0];
			//print($_SESSION['email']);
			header('location:profile.php');
		//}
	//}
	//else
	//{
	//	echo "hey3";
	//	$error[]='incorrect credentials';
	//}
}




//WHERE PAYEE_ID==PAYER_ID && PAYEE_ID='$useridrow[0]'
//WHERE PAYEE_ID=PAYER_ID && PAYER_ID='$useridrow[0]'
?>


