<?php
include_once 'includes/config.php';
// Start the session (if it's not started already)
session_start();

// Check if the logout button was clicked
if (isset($_POST['logout'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to index.php or any other page after logout
    header("Location: index.php");
    exit();
}
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
                <!-- Inside user.php -->
                <form action="index.php" method="post">
                    <button type="submit" class="btn btn-danger" name="logout">Log out</button>
                </form>
              </div>
            </div>
          </div>
        </nav>
  
        
        
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
        <p class="text-center fs-2" style="margin-top: 25px;">Product List</p>
        <div style="margin: 0 auto; max-width: 80%;">
          <table class="table m-5" style="width: 100%;">
            <thead>
              <tr>
                <th scope="col">Reference</th>
                <th scope="col">Libel</th>
                <th scope="col">Barcode</th>
                <th scope="col">Price</th>
                <th scope="col">Stock quantity</th>
                <th scope="col">Image</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><img src="" style="margin-left: 5px; width: 4rem" /></td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><img src="" style="margin-left: 5px; width: 4rem" /></td>
              </tr>
              <tr>
                <th scope="row">3</th>
                <td colspan="2"></td>
                <td></td>
                <td></td>
                <td><img src="" style="margin-left: 5px; width: 4rem" /></td>
              </tr>
            </tbody>
          </table>
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