<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    
  </head>
  <body class="bg-white">
    
    <!-- nav bar -->
    <nav class="navbar bg-white w-100 index-1 navbar-expand-lg sticky-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="logo.jpg" alt="Logo"></a>
        <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <form class="d-flex serach-box mx-auto" role="search">
            <input class="form-control border-0 shadow-none" type="search" placeholder="Search" aria-label="Search">
            <button class="btn" type="submit"><i class="bi bi-search"></i></button>
          </form>
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0 d-flex align-items-center gap-3">
            <li class="nav-item">
              <div class="btn-group">
                <a type="button" class="btn shadow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  Sign in / Join
                </a>
                <ul class="dropdown-menu border-dark">
                  <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#signin">Sign in</button></li>
                  <li><button class="dropdown-item" data-bs-toggle="modal" data-bs-target="#registeraccount">Register</button></li>
                </ul>
              </div>
            </li>
            <li class="nav-item dropdown">
              <div class="btn-group">
                <a type="button" class="btn d-flex border-white align-items-center shadow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="heart.svg" style="width:30px;" alt="Heart">
                  <span class="position-absolute whislites-position">0</span>
                </a>
                <ul class="dropdown-menu border-dark"></ul>
              </div>
            </li>
            <li class="nav-item">
              <div class="btn-group">
                <a type="button" class="btn d-flex border-white align-items-center shadow-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                  <img src="cart.svg" style="width:30px; margin-top:-5px;" alt="Cart">
                  <span class="position-absolute whislites-position">0</span>
                </a>
                <ul class="dropdown-menu border-dark">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="nav bg-white shadow">
       <div class="container">
       <ul class="d-md-flex d-none list-unstyled justify-content-between py-2 p-2">
            <li><a href="index.php" class="text-decoration-none fw-bold text-success">Home</a></li>
            <li><a href="product.php" class="text-decoration-none fw-bold text-success">Product</a></li>
            <li><a href="#" class="text-decoration-none fw-bold text-success">Checkout</a></li>
            <li><a href="#" class="text-decoration-none fw-bold text-success">Whishlight</a></li>
            <li><a href="#" class="text-decoration-none fw-bold text-success">Cart</a></li>
            <li><a href="#" class="text-decoration-none fw-bold text-success">About Us</a></li>
            <li><a href="#" class="text-decoration-none fw-bold text-success">Contact Us</a></li>
        </ul>
        <!-- Button trigger modal -->
            <button type="button" class="btn d-md-none d-block d-flex align-items-center gap-3" data-bs-toggle="modal" data-bs-target="#menu">
               <span class="fw-bold">Menu</span> <i class="bi bi-list fw-bold fs-4"></i>
            </button>
       </div>
    </div>

        <!-- Modal -->
        <div class="modal fade" id="menu" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen-sm-down">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Menu</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container w-100">
                            <ul class="list-unstyled text-center gap-4 justify-content-center">
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">Home</a></li>
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">Product</a></li>
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">Checkout</a></li>
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">Whishlight</a></li>
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">Cart</a></li>
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">About Us</a></li>
                                <li class="bg-light mt-5"><a href="#" class="text-decoration-none fs-3 fw-bold text-success">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Registration Modal -->
        <div class="modal fade" id="registeraccount" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Register Your Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="username">User Name</label>
                                        <input type="text" class="form-control shadow-none" id="username">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control shadow-none" id="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control shadow-none" id="password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="confirm-password">Confirm Password</label>
                                        <input type="password" class="form-control shadow-none" id="confirm-password">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sign in Modal -->
        <div class="modal fade" id="signin" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="staticBackdropLabel">Sign in to Your Account</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="mb-3 mt-3">
                                <label for="signin-email">Email <span class="text-danger">*</span></label>
                                <input type="email" class="form-control shadow-none" id="signin-email">
                            </div>
                            <div class="mb-3">
                                <label for="signin-password">Password <span class="text-danger">*</span></label>
                                <input type="password" class="form-control shadow-none" id="signin-password">
                            </div>
                            <div class="mb-2">
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="mb-3">
                                <input type="submit" class="btn btn-primary form-control shadow-none" value="Sign in">
                            </div>
                            <div>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#registeraccount" data-bs-dismiss="modal">Register an Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
