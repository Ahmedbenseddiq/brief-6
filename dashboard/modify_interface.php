<?php
include_once '../includes/config.php';
if(isset($_GET['reference'])) {
    $reference = $_GET['reference'];

    if(isset($_POST['modify_product'])) {
        // Get the form data
        $reference = $_POST['reference'];
        $label = $_POST['label'];
        $description = $_POST['description'];
        $barcode = $_POST['barcode'];
        $minQuantity = $_POST['minQuantity'];
        $stockQuantity = $_POST['stockQuantity'];
        $purchasePrice = $_POST['purchasePrice'];
        $finalPrice = $_POST['finalPrice'];
        $offerPrice = $_POST['offerPrice'];
    
        // File handling if needed
        $targetFile = ''; // You need to define this based on your file upload logic
        
        // Update the product details in the database
        $sql = "UPDATE products 
                SET label = '$label', description = '$description', barcode = '$barcode', 
                    quantity_min = '$minQuantity', quantity_stock = '$stockQuantity', 
                    purchase_price = '$purchasePrice', selling_price = '$finalPrice', 
                    offer_price = '$offerPrice', image = '$targetFile'
                WHERE reference = '$reference'";
        
        if (mysqli_query($conn, $sql)) {
            echo "Product updated successfully";
            // Redirect to product.php or any other page after modification
            header("Location: product.php");
            exit();
        } else {
            echo "Error updating product: " . mysqli_error($conn);
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
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
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
         <h3>Modify Product</h3>
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
            <button type="submit" class="btn btn-success btn-block col-md-2 mb-4" name="modify_product">modify</button>
        </form>
    </div>


        


          </div>
      </main>
        </div>
      </div>
    </div>
    
</body>
</html>