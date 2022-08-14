<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Registration Form</title>
	<link rel="stylesheet" href="./style.css">
</head>
<body>

<div class="wrapper">
    <div class="title">
      Registration Form
    </div>
    
    <div class="form">
      <form action="signupconnect.php" method="post">
        
       <div class="inputfield">
          <label>USER ID</label>
          <input type="text" class="input" name="userid" />
       </div> 
       <div class="inputfield">
          <label>First Name</label>
          <input type="text" class="input" name="firstname" />
       </div>  
        <div class="inputfield">
          <label>Last Name</label>
          <input type="text" class="input" name="lastname" />
       </div>  
       <div class="inputfield">
          <label>Password</label>
          <input type="password" class="input" name="password" />
       </div>  
      <div class="inputfield">
          <label>Confirm Password</label>
          <input type="password" class="input" name="cpassword" />
       </div> 
        <div class="inputfield">
          <label>Gender</label>
          <div class="custom_select">
            <select name="gender">
              <option selected hidden value="">Select</option>
              <option  value="male">Male</option>
              <option  value="female">Female</option>
            </select>
          </div>
       </div> 
        <div class="inputfield">
          <label>Email Address</label>
          <input type="text" class="input" name="email" />
       </div> 
      <div class="inputfield">
          <label>Phone Number</label>
          <input type="text" class="input" name="phone" />
       </div> 
      <div class="inputfield">
          <label>Address</label>
          <textarea class="textarea" name="address"></textarea>
       </div> 
      
      <div class="inputfield terms">
          <label class="check">
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
          <p>Agreed to terms and conditions</p>
       </div> 
      <div class="inputfield">
        <input type="submit" value="Register" class="btn">
      </div>
    </form>
   </div>
    
</div>	
	
</body>
</html>