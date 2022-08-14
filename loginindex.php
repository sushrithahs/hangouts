<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="./signin.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <input type="checkbox" id="flip">
    <div class="cover">
      <div class="front">
        <!--<img src="images/frontImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1"> <h2>Hangouts!</h2><br><br> Enjoy now <br> worry later</span>
          <span class="text-2">Let's keep it clean</span>
        </div>
      </div>
      <div class="back">
        <!--<img class="backImg" src="images/backImg.jpg" alt="">-->
        <div class="text">
          <span class="text-1">Complete miles of journey <br> with one step</span>
          <span class="text-2">Let's get started</span>
        </div>
      </div>
    </div>
    <div class="forms">
        <div class="form-content">
          <div class="login-form">
            <div class="title">LOGIN</div>
            
          <form action="loginchecking.php" method="POST">
          <?php
            if(isset($error))
            {
              foreach($error as $error)
              {
                echo 'error is '.$error;
              };
            };
            ?>
            <div class="input-boxes">
              <div class="input-box">
                <i class="fas fa-envelope"></i>
                <input type="text" placeholder="Enter your email" name='email'  required>
              </div>
              <div class="input-box">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Enter your password" name='password' required>
              </div>
              <div class="text"><a href="#">Forgot password?</a></div>
              <div class="button input-box">
                <input type="submit" value="submit">
              </div>
            </div>
          </form>
          </div>
        </div>
      </div>
    </div>
</body>
</html>