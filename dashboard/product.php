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
              

                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-lock fa-fw me-3"></i><span>Category Management</span></a
                >
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-line fa-fw me-3"></i><span>Product Management</span></a
                >
                <a href="#" class="list-group-item list-group-item-action py-2 ripple">
                <i class="fas fa-chart-pie fa-fw me-3"></i><span>Registration Management</span>
                </a>
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-chart-bar fa-fw me-3"></i><span>Users Management</span></a
                >
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-globe fa-fw me-3"></i><span>Client Portal</span></a
                >
                <a href="#" class="list-group-item list-group-item-action py-2 ripple"
                ><i class="fas fa-building fa-fw me-3"></i><span>Sign Out</span></a
                >
            </div>
          </div>
        </nav>
    
        <nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-black fixed-top">
        
          <div class="container-fluid">
              <!-- Toggle button -->
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
      <div>
      
      </div>
      <div class="col-lg-9 ms-5">
        <main style="margin-top: 58px;">
        
          <div class="container pt-4 ms-5">
         <div class="d-flex justify-content-center" m-5 style="width: 45rem; ">
         <h3>Add Product</h3>
         </div>
         <form class="row g-3" style="width: 45rem;">
              <div class="col-md-6">
                <label for="reference" class="form-label">Reference</label>
                <input type="text" class="form-control" id="reference">
              </div>
              <div class="col-md-6">
                <label for="label" class="form-label">label</label>
                <input type="text" class="form-control" id="label">
              </div>
              <div data-mdb-input-init class="form-outline mb-4">
                  <label class="form-label" for="description">Decription</label>
                  <textarea class="form-control" id="description" rows="4"></textarea>
              </div>
              <div class="col-md-12">
                <label for="barcode" class="form-label">barcode</label>
                <input type="text" class="form-control" id="barcode">
              </div>
              <div class="col-md-3">
                <label for="minQuantity" class="form-label">minimum quantity</label>
                <input type="text" class="form-control" id="minQuantity">
              </div>
              <div class="col-md-3">
                <label for="stckQuantity" class="form-label">stock quantity</label>
                <input type="text" class="form-control" id="stckQuantity">
              </div>
              <div class="col-md-2">
                <label for="purchasePrice" class="form-label">purchase price</label>
                <input type="text" class="form-control" id="purchasePrice">
              </div>
              <div class="col-md-2">
                <label for="finalPrice" class="form-label">final price</label>
                <input type="text" class="form-control" id="finalPrice">
              </div>
              <div class="col-md-2">
                <label for="offerPrice" class="form-label">special offer</label>
                <input type="text" class="form-control" id="offerPrice">
              </div>
              <div class="mb-3">
                  <label for="formFile" class="form-label">Import file</label>
                  <input class="form-control" type="file" id="formFile">
                </div>
                <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block col-md-2 mb-4">Add</button>
            </form>
            
            <table class="table" style="width: 65rem;margin-top:75px">
                <thead>
                <div class="d-flex justify-content-center"  style="width: 45rem;margin-top:65px; ">
                  <h3>Product list</h3>
                </div>
                  <tr>
                    <th scope="col">Reference</th>
                    <th scope="col">Label</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                  </tr>
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