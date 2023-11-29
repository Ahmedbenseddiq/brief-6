<?php
include_once '../includes/config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $category_name = $_POST['category_name'];
    $description = $_POST['description'];

    // File upload handling
    $targetDir = "../category-img";
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($_FILES["uploaded_file"]["name"], PATHINFO_EXTENSION));
    $customFileName = "name_your_file"; 

    $targetFile = $targetDir . $customFileName . '.' . $imageFileType;

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
            $query = "INSERT INTO categories (name, description, photo) VALUES ('$category_name', '$description', '$targetFile')";
            $result = mysqli_query($conn, $query);

            if ($result) {
                // Category inserted successfully
                echo "Category added successfully.";
                // Redirect or perform other actions upon successful insertion
            } else {
                echo "Failed to add category: " . mysqli_error($conn);
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
              Toggle button
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
    </header>
      </div>
      
      <div class="col-lg-9 ms-5">
        <main style="margin-top: 58px;">
        
          <div class="container pt-4 ms-5">
         <div class="d-flex justify-content-center"  style="width: 45rem; ">
         <h3>Add Category</h3>
         </div>

        <form style="width: 45rem;" method="post" action="category.php" enctype="multipart/form-data">
    
            <div class="form-outline mb-4">
                <label class="form-label" for="categoryName">Category name</label>
                <input type="text" id="categoryName" class="form-control" name="category_name" required>
            </div>

            <!-- Description input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="categoryDescription">Description</label>
                <textarea class="form-control" id="categoryDescription" rows="4" name="description" required></textarea>
            </div>

            <!-- File input for image -->
            <div class="mb-3">
                <label for="uploadedFile" class="form-label">Upload Image</label>
                <input class="form-control" type="file" id="uploadedFile" name="uploaded_file" required accept="image/*">
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" name="submit">Add Category</button>
        </form>


                
              <?php
              // Assuming you have established a database connection ($conn)

              // Fetch data from the database
              $query = "SELECT * FROM categories";
              $result = mysqli_query($conn, $query);

              if (mysqli_num_rows($result) > 0) {
                  echo '<table class="table" style="width: 65rem;margin-top:35px">
                      <thead>
                          <div class="d-flex justify-content-center"  style="width: 45rem;margin-top:65px; ">
                              <h3>Category list</h3>
                          </div>
                          <tr>
                              <th scope="col">#</th>
                              <th scope="col">Category Name</th>
                              <th scope="col">Description</th>
                              <th scope="col">Image</th>
                          </tr>
                      </thead>
                      <tbody>';

                  $count = 1;
                  while ($row = mysqli_fetch_assoc($result)) {
                      echo '<tr>
                          <th scope="row">' . $count . '</th>
                          <td>' . $row['name'] . '</td>
                          <td>' . $row['description'] . '</td>
                          <td><img src="' . $row['photo'] . '" alt="Category Image" style="max-width: 100px; max-height: 100px;"></td>
                      </tr>';
                      $count++;
                  }

                  echo '</tbody></table>';
              } else {
                  echo "No categories found.";
              }

              
              ?>


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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>