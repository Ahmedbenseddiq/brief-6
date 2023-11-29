<?php
include_once 'includes/config.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    
    <title>Document</title>
</head>
<body>
    <header>
      <nav data-mdb-navbar-init class="navbar navbar-expand-lg navbar-light bg-white style"> 
        <div class="container">
          <img src="images\ElectroNacer.png" style="margin-top: 5px; width:8rem" />
          <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarButtonsExample"
            aria-controls="navbarButtonsExample"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <i class="fas fa-bars"></i>
          </button>

          <div class="collapse navbar-collapse" id="navbarButtonsExample">
            <div class="d-flex ms-auto align-items-center">
            <button type="button" class="btn btn-primary me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
              Login
            </button>
              <!-- Button trigger modal -->
              <button type="button" class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Sign Up
              </button>
            </div>
          </div>
        </div>
      </nav>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalLabel">Sign Up</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              
            
            



    <form action="signup.php" method="post">
        <div class="mb-3">
            <label for="fullName" class="form-label">Full name</label>
            <input type="text" class="form-control" name="fullName" id="fullName" aria-describedby="emailHelp" required>

            <label for="email" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp">

            <label for="login" class="form-label">Login</label>
            <input type="text" class="form-control" name="login" id="email" aria-describedby="emailHelp">

            <label for="password" class="form-label">Password</label>
            <input type="password" class="form-control" name="password" id="password">

            <label for="confirmPassword" class="form-label">Confirm password</label>
            <input type="password" class="form-control" name="confirmPassword" id="confirmPassword">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" name="submit">Sign in</button>
        </div>
    </form>




            </div>
          </div>
        </div>
      </div>


      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
            <div class="modal-body">


              <form action="login.php" method="post">  
                <div class="mb-3">
                    <label for="login" class="form-label">Login</label>
                    <input type="text" class="form-control" name="login" id="login" aria-describedby="emailHelp">
                    
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" name="password" id="password">
                </div> 
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" name="submit">Log in</button>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>
      
    </header>
  <main>
    <div class="container-fluid">
      <div
        class="bg-image position-relative"
        style="
          position: relative;
          background-image: url('images/11111111.jpg');
          background-size: cover;
          background-repeat: no-repeat;
          height: 100vh;
          color: white;
          font-size: 30px; 
          text-align: center;
          overflow: hidden;
        "
      >
        <!-- Blur effect using inline CSS -->
        <div
          style="
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image: url('images/technology-2818664_640.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            filter: blur(15px);
            opacity: 0.5;
          "
        ></div>

        <!-- Text content -->
        <div class="position-absolute top-50 start-50 translate-middle" style="color: white;">
          <h1 style="font-size: 70px; font-family: 'Lucida Console';">ElectroNacer</h1>
          <p style= "font-family: 'Courier New';">Your Premier Destination for Electronics Excellence</p>
        </div>
      </div>
    </div>




  </main>
  <footer class="bg-body-tertiary text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2023 Copyright:
    <a class="text-body" href="#">YouCode</a>
  </div>
  <!-- Copyright -->
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>