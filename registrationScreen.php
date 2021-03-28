<?php 
require_once("../utils/utils.php"); 
require_once("../utils/constants.php"); 
?>

<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.rawgit.com/JacobLett/bootstrap4-latest/504729ba/bootstrap-4-latest.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/       bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></       script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.    js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
     <link rel='stylesheet' href='style.css'>


</head>

<body>

<header>
     <nav class='navbar navbar-expand-md navbar-dark fixed-top bg-dark'>
         <div class='container-fluid'>
             <a class='navbar-brand' href='#'>Team Alpha Website</a>
             <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs- target='#navbarCollapse' aria-controls='navbarCollapse' aria-expanded='false' aria-         label='Toggle navigation'>
                 <span class='navbar-toggler-icon'></span>
             </button>
             <div class='collapse navbar-collapse' id='navbarCollapse'>
                 <ul class='nav navbar-nav navbar-left'>
                     <li class='nav-item active'>
                         <a class='nav-link' href='#'>Home</a>
                     </li>
                     <li class='nav-item'>
                         <a class='nav-link' href='#'>Repair Tickets</a>
                     </li>
                     <li class='nav-item'>
                         <a class='nav-link' href='#'>Post a Room</a>
                     </li>
                     <li>
                         <form class='d-flex' action="#" method="get">
                             <input class='form-control me-2' type='search'                  placeholder='Search'/>
                             <button class='btn btn-primary' type='submit'>Search</button>
                         </form>
                     </li>
                     <li style="text-allign: right;">
                         <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                             <button class="btn btn-primary me-md-2" type="button">Login</   button>
                             <button class="btn btn-primary me-md-2" type="button">Sign up</ button>
                         </div>
                     </li>
                 </ul>
             </div>
         </div>
     </nav>
</header>

<section>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-12 col-md-8 col-lg-8 col-xl-6">
          <div class="row">
            <div class="col text-center">
              <h1>Register</h1>
              <p class="text-h3">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
            </div>
          </div>
          <div class="row align-items-center">
            <div class="col mt-4">
              <input type="text" class="form-control" placeholder="Company Name">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="email" class="form-control" placeholder="Email">
            </div>
          </div>
          <div class="row align-items-center mt-4">
            <div class="col">
              <input type="password" class="form-control" placeholder="Password">
            </div>
            <div class="col">
              <input type="password" class="form-control" placeholder="Confirm Password">
            </div>
          </div>
          <div class="row justify-content-start mt-4">
            <div class="col">
              <div class="form-check">
                <label class="form-check-label">
                  <input type="checkbox" class="form-check-input">
                  I Read and Accept <a href="https://www.froala.com">Terms and Conditions</a>
                </label>
              </div>

              <button class="btn btn-primary mt-4">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
