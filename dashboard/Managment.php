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
 

 
  <header>
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
      
    <div class="container text-center"  style="margin-top: 100px;">
        <div class="row row-cols-4">
          <div class="col">
                <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse bg-white me-5">
                <div class="position-sticky">
                    <div class="list-group list-group-flush mx-3 mt-4">
                    

                        <a href="category.php" class="list-group-item list-group-item-action py-2 ripple"
                        ><i class="fas fa-lock fa-fw me-3"></i><span>Category Management</span></a
                        >
                        <a href="product.php" class="list-group-item list-group-item-action py-2 ripple"
                        ><i class="fas fa-chart-line fa-fw me-3"></i><span>Product Management</span></a
                        >
                        <a href="managment.html" class="list-group-item list-group-item-action py-2 ripple"
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
          </div>
          <div class="row">
            
            <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                    <h5>User demandes</h5>
                    <h6 class="card-title">User name</h5>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div>
            </div>
          </div>
          <div class="row">
            
            <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                    <h5>Admins</h5>
                    <h6 class="card-title">User name</h5>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div>
            </div>
          </div>
          <div class="row">   
            <div class="card mb-2" style="width: 18rem;">
                <div class="card-body">
                    <h5>User list</h5>
                    <h6 class="card-title">User name</h6>
                    <button type="button" class="btn btn-success">Success</button>
                    <button type="button" class="btn btn-danger">Danger</button>
                </div>
            </div>
          </div>
        </div>
    </div>
   
    
    


        
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>









