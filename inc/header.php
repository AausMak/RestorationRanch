<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restoration Ranch</title>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="css/styles.css"/>
</head>
<body>

  <style>
  /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }
    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>



<!-- Navbar -->
  
<nav class="navbar navbar-expand-lg navbar-light bg-light px-lg-3 py-lg-2 shadow-lg sticky-top">
    <div class="container-fluid">
      <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Restoration Ranch</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active me-2" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="accommodation.php">Accommodation</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="facilities.php">Facilities</a>
          </li>
          <li class="nav-item">
            <a class="nav-link me-2" href="about.php">About Us</a>
          </li>
          <li class="nav-item">
          <a class="nav-link me-2" href="contact.php">Contact Us</a>
          </li>
        </ul>
        <div class="nav-link">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
          <h5>Login</h5>
        </div>
        <div class="nav-link">
          <button type="button" class="btn btn-outline-dark shadow-none me-lg-2 me-3" data-bs-toggle="modal" data-bs-target="#RegisterModal">
          <h5>Sign Up</h5>
        </div>      
      </div>
    </div>
  </nav>

  <!-- Login -->
  <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
      <form action="">

        <div class="modal-header">
          <h5 class="modal-title align-items-center"><i class="bi bi-person-circle"></i> User Login</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <div class="mb-3">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="mb-4 form-check">
               <input type="checkbox" class="form-check-input" id="exampleCheck1">
               <label class="form-check-label" for="exampleCheck1">Agree Tearms & Conditions</label>
            </div>

            <div class="d-flex align-items-center justify-content-between">
              <button type="submit" class="btn btn-dark ">Login</button>
              <a href="javascript : void(0)" class="text-secendory text-decoration-none">Forgot Password?</a>
            </div>
          </form>
        </div>
      </form>
      </div>
    </div>
  </div>

  <!-- Register -->
  <div class="modal fade" id="RegisterModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">
      <form action="">

        <div class="modal-header">
          <h5 class="modal-title align-items-center"><i class="bi bi-person-circle"></i> User Registration</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
        <span class="badge bg-light text-dark text-wrap lh-base">
          Note: Your details must match with your ID.
          That will be required while booking.
        </span>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6 ps-0 mb-3">
                <label for="exampleInputEmail1">Name</label>
                <input type="text" class="form-control" aria-describedby="emailHelp">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" aria-describedby="emailHelp">
              </div>
              <div class="col-md-6 ps-0 mb-3">
                <label for="exampleInputEmail1">Phone Number</label>
                <input type="number" class="form-control" aria-describedby="emailHelp">
              </div>

              <div class="col-mb-6 ps-0 mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Suggestions</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>

              <div class="col-md-6 ps-0 mb-3">
                <label for="exampleInputEmail1">Password</label>
                <input type="password" class="form-control" aria-describedby="emailHelp">
              </div>
              <div class="col-md-6 p-0 mb-3">
                <label for="exampleInputEmail1">Confirm Password</label>
                <input type="password" class="form-control" aria-describedby="emailHelp">
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-dark ">Register</button>
          </div>
        </div>
      </form>
     </div>
    </div>
  </div>