<?php
include_once '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reference = $_POST['reference'];
    $label = $_POST['label'];
    $description = $_POST['description'];
    $barcode = $_POST['barcode'];
    $minQuantity = $_POST['minQuantity'];
    $stockQuantity = $_POST['stockQuantity'];
    $purchasePrice = $_POST['purchasePrice'];
    $finalPrice = $_POST['finalPrice'];
    $offerPrice = $_POST['offerPrice'];

    // File upload handling
    $targetDir = "../product-img";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["uploaded_file"]["name"], PATHINFO_EXTENSION));
     

    $targetFile = $targetDir . '.' . $imageFileType;

    // Check if file is an actual image
    $check = getimagesize($_FILES["uploaded_file"]["tmp_name"]);
    if ($check === false) {
        echo "File is not an image.";
        $uploadOk = 0;
    }

    // Check file size if needed
    if ($_FILES["uploaded_file"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = 0;
    }

    // Allow certain file formats if needed
    if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
    }

    if ($uploadOk == 0) {
        echo "Sorry, your file was not uploaded.";
    } else {
        if (move_uploaded_file($_FILES["uploaded_file"]["tmp_name"], $targetFile)) {
            // File uploaded successfully, proceed with database insertion
            $sql = "INSERT INTO products (reference, label, description, barcode, quantity_min, quantity_stock, purchase_price, selling_price, offer_price, image) 
            VALUES ('$reference', '$label', '$description', '$barcode', '$minQuantity', '$stockQuantity', '$purchasePrice', '$finalPrice', '$offerPrice', '$targetFile')";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                // Category inserted successfully
                echo "Product added successfully.";
                // Redirect or perform other actions upon successful insertion
            } else {
                echo "Failed to add product: " . mysqli_error($conn);
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
 
  
<div class="col col-lg-3 m-5 ">
  <div class=" ">
    <div class="row">
      <header>
     
        <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white me-5">
          <div class="position-sticky">
            <div class="list-group list-group-flush mx-3 mt-4">
              

                <a href="category.php" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-lock fa-fw me-3"></i><span>Category Management</span></a
                >
                <a href="product.php" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-line fa-fw me-3"></i><span>Product Management</span></a
                >
                <a href="managment.php" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Users Management</span></a
                >
                <a href="../user.php" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-globe fa-fw me-3"></i><span>Client Portal</span></a
                >
                <a href="../index.php" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-building fa-fw me-3"></i><span>Sign Out</span></a
                >
            </div>
          </div>
        </nav>
    
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
        
          <div class="container-fluid">
             
             <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#sidebarMenu"
                aria-controls="sidebarMenu"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            
             <div class="logo">
              <a class="navbar-brand" href="">
                  <img
                  src="../images/ElectroNacer.png"
                  height="25"
                  alt="MDB Logo"
                  loading="lazy"
                  />
              </a>
            </div>
        </nav>
    </header> -->
      </div>
      <div>
      
      </div>
      <div class="col-lg-9 ms-5">
        <main style="margin-top: 58px;">
        
          <div class="container pt-4 ms-5">
         <div class="d-flex justify-content-center" m-5 style="width: 45rem; ">
         <h3>Add Product</h3>
         </div>
          

    <div class="container mt-5">
        <form class="row g-3" style="width: 45rem;" method="post" action="product.php" enctype="multipart/form-data">
            <div class="col-md-6">
                <label for="reference" class="form-label">Reference</label>
                <input type="text" class="form-control" id="reference" name="reference">
            </div>
            <div class="col-md-6">
                <label for="label" class="form-label">Label</label>
                <input type="text" class="form-control" id="label" name="label">
            </div>
            <div data-mdb-input-init class="form-outline mb-4 col-md-12">
                <label class="form-label" for="description">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4"></textarea>
            </div>
            <div class="col-md-12">
                <label for="barcode" class="form-label">Barcode</label>
                <input type="text" class="form-control" id="barcode" name="barcode">
            </div>
            <div class="col-md-3">
                <label for="minQuantity" class="form-label">Minimum Quantity</label>
                <input type="text" class="form-control" id="minQuantity" name="minQuantity">
            </div>
            <div class="col-md-3">
                <label for="stockQuantity" class="form-label">Stock Quantity</label>
                <input type="text" class="form-control" id="stockQuantity" name="stockQuantity">
            </div>
            <div class="col-md-2">
                <label for="purchasePrice" class="form-label">Purchase Price</label>
                <input type="text" class="form-control" id="purchasePrice" name="purchasePrice">
            </div>
            <div class="col-md-2">
                <label for="finalPrice" class="form-label">Final Price</label>
                <input type="text" class="form-control" id="finalPrice" name="finalPrice">
            </div>
            <div class="col-md-2">
                <label for="offerPrice" class="form-label">Special Offer</label>
                <input type="text" class="form-control" id="offerPrice" name="offerPrice">
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Import file</label>
                <input class="form-control" type="file" id="image" name="uploaded_file">
            </div>
            <button type="submit" class="btn btn-primary btn-block col-md-2 mb-4" name="add_product">Add</button>
        </form>
    </div>


            
         

              <table class="table" style="width: 65rem; margin-top: 75px">
                  <thead>
                      <div class="d-flex justify-content-center" style="width: 45rem; margin-top: 65px;">
                          <h3>Product list</h3>
                      </div>
                      <tr>
                          <th scope="col">Reference</th>
                          <th scope="col">Label</th>
                          <th scope="col">price</th>
                          <th scope="col">stock quantity</th>
                          <th scope="col">image</th>
                          <th scope="col">managment</th>
                          
                          

                          
                      </tr>
                  </thead>
                  <tbody>
                      <?php
                      // Assume $conn is your database connection
                      // Perform SQL query to fetch data from the "products" table
                      $sql = "SELECT * FROM products";
                      $result = mysqli_query($conn, $sql);

                      if (mysqli_num_rows($result) > 0) {
                          
                          while ($row = mysqli_fetch_assoc($result)) {
                              echo "<tr>";
                              echo "<td>" . $row["reference"] . "</td>";
                              echo "<td>" . $row["label"] . "</td>";
                              echo "<td>" . $row["selling_price"] . "</td>";
                              echo "<td>" . $row["quantity_stock"] . "</td>";
                              echo "<td>" . $row["image"] . "</td>";
                              echo "<td><form method='post' action='delete_product.php'>
                                        <input type='hidden' name='reference' value='" . $row['reference'] . "'>
                                        <button type='submit' name='delete' class='btn btn-danger'>Delete</button>
                                      </form>
                                      <a href='modify_interface.php?reference=" . $row['reference'] . "' class='btn btn-success mt-2'>modify</a>
                                      </td>";
                                      
                              echo "</tr>";
                          }
                      } else {
                          echo "<tr><td colspan='2'>No products found</td></tr>";
                      }
                      ?>
                  </tbody>
              </table>


          </div>
      </main>
        </div>
      </div>
    </div>
    
    

    
    <!-- <footer>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2023 Copyright:
        <a class="text-body" href="#">YouCode</a>
    </div>
    </footer> -->
</body>
</html>