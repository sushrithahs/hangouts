<?php
if(isset($_POST['userid'])){
    $userid = $_POST['userid'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    
    $conn = mysqli_connect("localhost","root","","hangouts");
    $sql="insert into hangouts.user(user_id,first_name,last_name,password,confirm_password,gender,phone_number,email,address) values ('$userid','$firstname','$lastname','$password','$cpassword','$gender','$phone','$email','$address')";
        
    if(mysqli_query($conn,$sql))
    {
        
        //echo "<h1>REGISTRATION SUCCESSFUL</h1>";
        //echo "<script> alert(\"REGISTRATION SUCCESSFUL\") </script>";
        header('location:homepage.php');
    }
    else
    {
        die('connection failes due to: '.mysqli_error($conn));  
    }
    mysqli_close($conn);
}
?>