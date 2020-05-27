<!DOCTYPE html>
<html lang='en'>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Login</title>

  <!-- Keep wireframe.css for debugging, add your css to style.css -->
  <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>

  <!-- Add bootstrap-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>


  <!-- Link to style.css -->
  <link id='stylecss' type="text/css" rel="stylesheet" href="style.css">

  <!-- Link to web font-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Slab">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">

  <!-- Link to web icon-->
  <!-- Creative Commons image sourced from https://www.freelogodesign.org/preview?lang=en&name=&logo=3cb08b7e-706d-4539-a663-82c8ea221204 and used for educational purposes only -->
  <link rel="icon" href="media/icon.png">
  <script src='../wireframe.js'></script>

  <!-- Link to script.js -->
  <script defer src="script.js"></script>

  <!-- Link to tools.php -->
  <?php include 'tools.php';?>
  <?php include 'database.php';?>

</head>

<body>
  <?php
    if(!empty($_SESSION['admin'])){
      header('Location: index.php');
    }
  ?>
  <div class="container">
    <nav id="top-bar" class="navbar navbar-expand-sm shadow">
      <a class="navbar-brand" href="index.php"><img src="media/theme/logo.png" alt="Shop logo"></a>
      <ul class="nav nav-pills ml-auto user-menu">
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="#about-us">About us</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            Products
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="bandana.html">Bandana</a>
            <a class="dropdown-item" href="medical-mask.html">Medical mask</a>
            <a class="dropdown-item" href="dust-mask.html">Dust mask</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link btn btn-primary" href="#">Cart</a>
        </li>
        <?php
            if(empty($_SESSION['admin'])){
              echo "<li class='nav-item'><a class='nav-link btn btn-primary' href='login.php'>Login</a></li>";
            }
            else {
              echo "<li class='nav-item'><a class='nav-link btn btn-primary' href='controlpanel.php'>Control panel</a></li>";
              echo "<li class='nav-item'><a class='nav-link btn btn-primary' href='logout.php'>Logout</a></li>"; 
            }
          ?>
      </ul>
    </nav>
    <img class="img-fluid" src="media/theme/mask-banner.jpg" alt="Mask banner">
    <div id="wrapper">
      <section class="header_text sub">
        <h4><span>Login</span></h4>
      </section>
      <h4 class="title"><span class="text"><strong>Login</strong> Form</span></h4>
      <form action="#" method="POST" id="login-form">
        <fieldset>
          <div class="form-group">
            <label for="userid">Username</label>
            <input type="text" placeholder="Enter your user ID" id="userid" name="userid">
          </div>
          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" placeholder="Enter your password" id="password" name="password">
          </div>
          <?php echo $loginmsg ?>
          <div class="form-group">
            <input class="btn btn-primary btn-dark" type="submit" value="Sign into your account" id="login-btn" name="login">
          </div>
        </fieldset>
      </form>
      <hr>
    </div>
    <footer>
      <a href="#top-bar"><img id="TopBtn" src="media/theme/gotop.png" alt="Back to Top"></a>
      <section id="footer-bar">
        <div class="row">
          <div class="col-md-3">
            <h4>Navigation</h4>
            <ul>
              <li><a href="index.php">Homepage</a></li>
              <li><a href="#about-us">About Us</a></li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4>User</h4>
            <ul>
              <li><a href="#">Login</a></li>
              <li><a href="#">Cart</a></li>
            </ul>
          </div>
          <div class="col-md-5">
            <p><img src="media/theme/logo.png" class="site_logo" alt=""></p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. the Lorem Ipsum has been the
              industry's standard dummy text ever since the you.</p>
            <br />
          </div>
        </div>
      </section>
      <section id="copyright">
        <span>Copyright 2013 bootstrappage template All right reserved.</span>
      </section>
    </footer>
  </div>
</body>

</html>