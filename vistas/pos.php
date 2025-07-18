<?php
  //Activamos el almacenamiento en el buffer
  ob_start();
  date_default_timezone_set('America/Lima'); require "../config/funcion_general.php";
  session_start();
  if (!isset($_SESSION["user_nombre"])){
    header("Location: index.php?file=".basename($_SERVER['PHP_SELF']));
  }else{
    ?>
    <!DOCTYPE html>
    <html lang="es" dir="ltr" data-nav-layout="vertical" data-theme-mode="light" data-header-styles="light" data-menu-styles="dark" data-toggled="icon-overlay-close" data-bg-img="bgimg4" style="--primary-rgb: 208, 2, 149;" loader="enable">

      <head>
        <?php $title_page = "Inicio 1";
        include("template/head.php"); ?>
        <link rel="stylesheet" href="../assets/libs/nouislider/nouislider.min.css">

      </head>

      <body>

        <?php include("template/switcher.php"); ?>
        <?php include("template/loader.php"); ?>

        <div class="page">
          <?php include("template/header.php"); ?>
          <?php include("template/sidebar.php"); ?>

          <!-- Start::app-content -->
          <div class="main-content app-content">
            <div class="container-fluid">

              <div class="my-4">

                <!-- Start::row-1 -->
                <div class="row">
                  <!-- ::::::::::::::::::::::::::::::::::: - F I L T R O S - ::::::::::::::::::::::::::::::::::: -->
                  <div class="col-xl-12">
                    <div class="card custom-card">
                      <div class="card-body p-0">
                        <nav class="navbar navbar-expand-xxl bg-white">
                          <div class="container-fluid">
                            <a class="navbar-brand" href="javascript:void(0);">
                              <img src="../assets/images/brand-logos/toggle-logo.png" alt="" class="d-inline-block align-text-top">
                            </a>
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse navbar-justified flex-wrap gap-2" id="navbarSupportedContent">
                              <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-xxl-center">
                                <li class="nav-item">
                                  <a class="nav-link active" aria-current="page" href="javascript:void(0);">Men</a>
                                </li>
                                <li class="nav-item">
                                  <a class="nav-link" href="javascript:void(0);">Women</a>
                                </li>
                                <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="javascript:void(0);" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Kids
                                  </a>
                                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="javascript:void(0);">Action</a></li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Another action</a>
                                    </li>
                                    <li>
                                      <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="javascript:void(0);">Something else
                                        here</a></li>
                                  </ul>
                                </li>
                                <li class="nav-item">
                                  <a href="javascript:void(0);" class="nav-link">Today Deals</a>
                                </li>
                                <li class="nav-item">
                                  <a href="javascript:void(0);" class="nav-link">Electronics</a>
                                </li>
                                <li class="nav-item">
                                  <a href="javascript:void(0);" class="nav-link">Home & Kitchen</a>
                                </li>
                                <li class="nav-item">
                                  <a href="javascript:void(0);" class="nav-link">Fashion</a>
                                </li>
                                <li class="nav-item">
                                  <a href="javascript:void(0);" class="nav-link"><i class="ri-customer-service-line me-2 align-middle d-inline-block"></i>Customer Service</a>
                                </li>
                                <li class="nav-item mb-xxl-0 mb-2 ms-xxl-0 ms-3">
                                  <div class="btn-group d-xxl-flex d-block">
                                    <button class="btn btn-sm btn-primary-light dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                      Sort By
                                    </button>
                                    <ul class="dropdown-menu">
                                      <li><a class="dropdown-item" href="javascript:void(0);">Featured</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Price: High to Low</a></li>
                                      <li><a class="dropdown-item active" href="javascript:void(0);">Price: Low to High</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Newest</a></li>
                                      <li><a class="dropdown-item" href="javascript:void(0);">Ratings</a></li>
                                    </ul>
                                  </div>
                                </li>
                                <li class="nav-item mb-xxl-0 mb-2 ms-xxl-3 ms-3">
                                  <div class="btn-group">
                                    <button class="btn btn-sm btn-primary">IV</button>
                                    <button class="btn btn-sm btn-primary">III</button>
                                    <button class="btn btn-sm btn-primary">II</button>
                                  </div>
                                </li>
                              </ul>
                              <div class="d-flex" role="search">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-light" type="submit">Search</button>
                              </div>
                            </div>
                          </div>
                        </nav>
                      </div>
                    </div>
                  </div>

                  <!-- ::::::::::::::::::::::::::::::::::: - P R O D U C T O S - ::::::::::::::::::::::::::::::::::: -->
                  <div class="col-xxl-9 col-xl-8 col-lg-8 col-md-12">
                    <div class="row">
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/1.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Dapzem & Co<span class="float-end text-danger fs-12" data-bs-toggle="tooltip" title="Stock disponible">567</span></p>
                            <p class="product-description fs-11 text-muted mb-2">Branded hoodie ethnic style</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$229<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$1,799</span></span><span class="badge bg-secondary-transparent float-end fs-10">72% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $229
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/2.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Denim Winjo<span class="float-end text-warning fs-12">4.0<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Vintage pure leather Jacket</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$599<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$2,499</span></span><span class="badge bg-secondary-transparent float-end fs-10">75% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $599
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/3.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Jimmy Lolfiger<span class="float-end text-warning fs-12">4.5<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Unisex jacket for men & women</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$1,199<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$3,299</span></span><span class="badge bg-secondary-transparent float-end fs-10">62% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,199
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/4.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Bluberry Co.In<span class="float-end text-warning fs-12">4.2<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Full sleeve white hoodie</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$349<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$1,299</span></span><span class="badge bg-secondary-transparent float-end fs-10">60% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $349
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/5.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Aus Polo Assn<span class="float-end text-warning fs-12">4.5<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Snow jacket with low pockets</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$1,899<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$3,799</span></span><span class="badge bg-secondary-transparent float-end fs-10">50% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,899
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/6.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">BMW<span class="float-end text-warning fs-12">4.1<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Ethnic wear jackets form BMW</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$1,499<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$2,499</span></span><span class="badge bg-secondary-transparent float-end fs-10">38% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,499
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/7.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Denim Corporation<span class="float-end text-warning fs-12">4.4<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Flap pockets denim jackets for men</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$299<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$399</span></span><span class="badge bg-secondary-transparent float-end fs-10">35% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $299
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/8.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Pufa<span class="float-end text-warning fs-12">3.8<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Ergonic designed full sleeve coat</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$2,399<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$5,699</span></span><span class="badge bg-primary-transparent float-end fs-10">72% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $2,399
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/9.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Louie Phillippe<span class="float-end text-warning fs-12">4.0<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Ergonic green colored full sleeve jacket</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$1,899<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$3,299</span></span><span class="badge bg-primary-transparent float-end fs-10">60% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $1,899
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/10.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Denim Corp<span class="float-end text-warning fs-12">4.1<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">beautiful brown colored snow jacket</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$2,499<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$4,999</span></span><span class="badge bg-primary-transparent float-end fs-10">50% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $2,499
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/11.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Garage & Co<span class="float-end text-warning fs-12">4.3<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Full sleeve sweat shirt</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$249<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$1,299</span></span><span class="badge bg-primary-transparent float-end fs-10">70% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $249
                            </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-xxl-2 col-xl-3 col-lg-3 col-md-4 col-sm-6">
                        <div class="card custom-card product-card">
                          <div class="card-body">
                            <a href="product-details.html" class="product-image">
                              <img src="../assets/images/ecommerce/png/12.png" class="card-img mb-3" alt="...">
                            </a>
                            <div class="product-icons">
                              <a href="wishlist.html" class="wishlist"><i class="ri-heart-line"></i></a>
                              <a href="cart.html" class="cart"><i class="ri-shopping-cart-line"></i></a>
                              <a href="product-details.html" class="view"><i class="ri-eye-line"></i></a>
                            </div>
                            <p class="product-name fw-semibold mb-0 d-flex align-items-center justify-content-between">Blueberry & Co<span class="float-end text-warning fs-12">4.0<i class="ri-star-s-fill align-middle ms-1 d-inline-block"></i></span></p>
                            <p class="product-description fs-11 text-muted mb-2">Light colored sweater form blueberry</p>
                            <p class="mb-1 fw-semibold fs-16 d-flex align-items-center justify-content-between"><span>$499<span class="text-muted text-decoration-line-through ms-1 d-inline-block op-6">$799</span></span><span class="badge bg-primary-transparent float-end fs-10">32% off</span></p>
                            <p class="fs-11 text-success fw-semibold mb-0 d-flex align-items-center">
                              <i class="ti ti-discount-2 fs-16 me-1"></i>Offer Price $499
                            </p>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- ::::::::::::::::::::::::::::::::::: - L I S T A   P E D I D O - ::::::::::::::::::::::::::::::::::: -->
                  <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-12">
                    <div class="card custom-card">
                      <div class="card-header">
                        <div class="card-title me-1">Order Summary</div><span class="badge bg-primary-transparent rounded-pill">02</span>
                      </div>
                      <div class="card-body p-0">
                        <ul class="list-group mb-0 border-0 rounded-0">
                          <li class="list-group-item border-top-0 border-start-0 border-end-0">
                            <div class="d-flex align-items-center flex-wrap">
                              <div class="me-2">
                                <span class="avatar avatar-lg bg-light">
                                  <img src="../assets/images/ecommerce/png/1.png" alt="">
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="mb-0 fw-semibold">Blue sweatshirt</p>
                                <p class="mb-0 text-muted fs-12">Quantity : 2 <span class="badge bg-success-transparent ms-3">30% Off</span></p>
                              </div>
                              <div>
                                <p class="mb-0 text-end">
                                  <a aria-label="anchor" href="javascript:void(0)">
                                    <i class="ri-close-line fs-16 text-muted"></i>
                                  </a>
                                </p>
                                <p class="mb-0 fs-14 fw-semibold">$189<span class="ms-1 text-muted fs-11 d-inline-block"><s>$329</s></span></p>
                              </div>
                            </div>
                          </li>
                          <li class="list-group-item  border-bottom border-block-end-dashed border-start-0 border-end-0">
                            <div class="d-flex align-items-center flex-wrap">
                              <div class="me-2">
                                <span class="avatar avatar-lg bg-light">
                                  <img src="../assets/images/ecommerce/png/7.png" alt="">
                                </span>
                              </div>
                              <div class="flex-fill">
                                <p class="mb-0 fw-semibold">Denim Jacket</p>
                                <p class="mb-0 text-muted fs-12">Quantity : 1 <span class="badge bg-success-transparent ms-3">10% Off</span></p>
                              </div>
                              <div>
                                <p class="mb-0 text-end">
                                  <a aria-label="anchor" href="javascript:void(0)">
                                    <i class="ri-close-line fs-16 text-muted"></i>
                                  </a>
                                </p>
                                <p class="mb-0 fs-14 fw-semibold">$129<span class="ms-1 text-muted fs-11 d-inline-block"><s>$139</s></span></p>
                              </div>
                            </div>
                          </li>
                        </ul>
                        <div class="p-3 border-bottom border-block-end-dashed">
                          <div class="d-flex align-items-center justify-content-between flex-wrap">
                            <div class="fs-12 fw-semibold bg-primary-transparent p-1 rounded">SPRUKO25</div>
                            <div class="text-success">COUPON APPLIED</div>
                          </div>
                        </div>
                        <div class="p-3 border-bottom border-block-end-dashed">
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-muted op-7">Sub Total</div>
                            <div class="fw-semibold fs-14">$318</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-muted op-7">Discount</div>
                            <div class="fw-semibold fs-14 text-success">10% - $31.8</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between mb-3">
                            <div class="text-muted op-7">Delivery Charges</div>
                            <div class="fw-semibold fs-14 text-danger">- $29</div>
                          </div>
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="text-muted op-7">Service Tax (18%)</div>
                            <div class="fw-semibold fs-14">- $45.29</div>
                          </div>
                        </div>
                        <div class="p-3">
                          <div class="d-flex align-items-center justify-content-between">
                            <div class="fs-15">Total :</div>
                            <div class="fw-semibold fs-16 text-dark"> $1,387</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--End::row-1 -->

                <!-- Pagination -->
                <ul class="pagination justify-content-end">
                  <li class="page-item disabled">
                    <a class="page-link">Previous</a>
                  </li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0);">1</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0);">2</a></li>
                  <li class="page-item"><a class="page-link" href="javascript:void(0);">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="javascript:void(0);">Next</a>
                  </li>
                </ul>
                <!-- Pagination -->

              </div>

            </div>
          </div>
          <!-- End::app-content -->

          <?php include("template/search_modal.php"); ?>
          <?php include("template/footer.php"); ?>

        </div>

        <?php include("template/scripts.php"); ?>

        <?php include("template/custom_switcherjs.php"); ?>

        <!-- noUiSlider JS -->
        <script src="../assets/libs/nouislider/nouislider.min.js"></script>
        <script src="../assets/libs/wnumb/wNumb.min.js"></script>

        <!-- Internal Products JS -->
        <script src="../assets/js/products.js?version_jdl=1.07"></script>

        <!-- Custom JS -->
        <script src="../assets/js/custom.js"></script>

      </body>

    </html>
  <?php  
  }
  ob_end_flush();
?>