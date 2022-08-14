<?php
$con = mysqli_connect("localhost", "root", "", "hangouts");

// Get all the users from user table
$sql = "SELECT * FROM `user`";
$all_users = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous" />
  <link rel="stylesheet" href="./splitPage.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
</head>

<body>
  <!-- Navbar -->
  <div class="header">
    <div class="container">
      <div class="navbar">
        <div class="logo">
          <a href="profile.php"><img src="logo.jpg" width="125px" /></a>
        </div>
        <nav>
          <ul class="MenuItems">
            <li>
              <a class="nav-tabs" href="profile.php">Home</a>
            </li>
            <li><a class="nav-tabs" href="">Contact</a></li>
            <li>
              <a class="nav-tabs" href="homepage.php">Signout</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>


  <!-- section -->
  <div class="container rounded bg-white mt-5 mb-5 d-flex justify-content-center">
    <div class="row">
      <div class="col-md-3 border-right">
        <!-- this div includes the user profile and the friends list -->

        <div class="p-3 py-4">
          <form action="saveBill.php" method="POST">
            <div class="d-flex justify-content-between align-items-center experience">
              <span>
                <h4>Details</h4>
              </span>
            </div>

            <div class="col-md-12">
              <label for="expenseName">Expense Name:</label><input type="text" name="expenseName" id="expenseName" required placeholder="enter the place here" />
            </div>
            <br />

            <div class="col-md-12">
              <label for="amount">Amount:</label><br><input type="text" name="amount" id="amount" required placeholder="enter your contri here" />
            </div>
            <br />

            <div class="col-md-12">
              <label>Add Friends:</label>
              <br>
              <select name="user[]" multiple>
                <?php
                while ($user = mysqli_fetch_array(
                  $all_users,
                  MYSQLI_ASSOC
                )) :
                ?>
                  <option value="<?php echo $user["user_id"]; ?>">
                    <?php echo $user["first_name"]; ?>
                  </option>
                <?php
                endwhile;
                ?>
              </select>
            </div>
            <br />

            <div class="col-md-12">
              <label for="payerid">Paid by:</label>
              <br />
              <input type="number" placeholder="Enter payerid" name="payerid" id="payerid" required>
            </div>
            <br>

            <input type="submit" class="btn btn-primary">
            </input>
          </form>
        </div>
      </div>

      <div class="col-md-7 border-right">

<!-- 
        this div includes the lended adn boroowed and the places 
        <div class="p-3 py-5">
          <div class="d-flex justify-content-between align-items-center mb-3">
            <h4 class="text-right"></h4>
          </div>
          <div class="row mt-2"></div>
          <div class="row mt-3">
            <h4 class="hangoutsList" id="expenseNameHeading"></h4>
            <hr />
            <h4 id="final"></h4>
          </div>
        </div> -->
      </div>
    </div>
  </div>


  <!-- Footer -->
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

  <script src="./index.js"></script>
</body>

</html>