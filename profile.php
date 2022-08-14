<?php
 @include 'db_conn.php';
 session_start();
 if(!isset($_SESSION['first_name']))
 {
   header('location:loginindex.php');
 }

?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hangouts</title>
    <link rel="stylesheet" href="profile.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      rel="stylesheet" 
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!-- bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <!-- Header -->
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href=""><img src="logo.jpg" width="125px" /></a>
          </div>
          <nav>
            <ul class="MenuItems">
              <li><a class="nav-tabs" href="profile.php">Home</a></li>
              <li><a class="nav-tabs" href="">Contact</a></li>
              <li>
                <a class="nav-tabs" href="homepage.php">Signout</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <!-- profile section -->
    <div class="container rounded bg-white mt-5 mb-5">
      <div class="row">
        <div class="col-md-3 border-right">
          <!-- this div includes the user profile and the friends list -->
          <div
            class="d-flex flex-column align-items-center text-center p-3 py-5"
          >
            <img
              class="rounded-circle mt-5"
              width="150px"
              src="./profileimage.png"
            /><span class="font-weight-bold"><?php echo $_SESSION['first_name'] ?><?php echo $_SESSION['last_name'] ?></span
            ><span class="text-black-50"><?php echo $_SESSION['email'] ?></span><span> </span>
          </div>
          <hr />

          <!-- <div class="p-3 py-5">
            <div
              class="d-flex justify-content-between align-items-center experience"
            >
              <span><h4>My Friends</h4></span>
            </div>
            <br />

            <div class="col-md-12"><h6>Sarthak Sahu ~Best Friend</h6></div>
            <br />
            <div class="col-md-12"><h6>Sarthak Sahu ~Best Friend</h6></div>
            <br />
            <div class="col-md-12"><h6>Sarthak Sahu ~Best Friend</h6></div>
            <br />
          </div> -->
          
        </div>
        <div class="col-md-7 border-right">
          <!-- this div includes the lended adn boroowed and the places -->
          <div class="p-3 py-5">
            <div class="d-flex justify-content-between align-items-center mb-3">
              <h4 class="text-right">Profile Information</h4>
            </div>
            <div class="row mt-2">
              <div class="col-md-6">
                <label class="labels">Lended</label>
                <h3 id="lended"><?php echo $_SESSION['lended'] ?></h3>
              </div>
              <div class="col-md-6">
                <label class="labels">Borrowed</label>
                <h3 id="borrowed"><?php echo $_SESSION['borrowed'] ?></h3>
              </div>
            </div>
            <hr />

            <form action="index.php" method="POST">
            <div class="button input-box">
                <input type="submit" value="ADD BILL">
              </div>
            </form>

            <div class="row mt-3">
              <h4 class="hangoutsList">My Hangouts</h4>

              <!-- place1 -->
              <div class="card" style="width: 28rem; margin: 10px">
                <div class="card-body">
                  <h5 class="card-title">PLACE 1</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Total Bill Amount</h6>
                  <p class="card-text">
                    ------FRIENDS LIST-----
                  </p>
                </div>
              </div>

              <!-- place2 -->
              <div class="card" style="width: 28rem; margin: 10px">
                <div class="card-body">
                  <h5 class="card-title">Place 2</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Total Bill Amount</h6>
                  <p class="card-text">
                  ------FRIENDS LIST-----
                  </p>
                </div>
              </div>

              <!-- place3 -->
              <div class="card" style="width: 28rem; margin: 10px">
                <div class="card-body">
                  <h5 class="card-title">Place 3</h5>
                  <h6 class="card-subtitle mb-2 text-muted">
                    Total Bill Amount
                  </h6>
                  <p class="card-text">
                  ------FRIENDS LIST-----
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- footer section -->
    <footer class="footer">
      <div class="footer-container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone.</p>
            <div class="app-logo">
              <img src="play-store.png" />
              <img src="app-store.png" />
            </div>
          </div>

          <div class="footer-col-2">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>YouTube</li>
            </ul>
          </div>
        </div>
        <hr />
        <p class="copyright">Copyright 2022-Hangouts</p>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
