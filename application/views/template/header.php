<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url('asset/css/style.css'); ?>" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title><?= $title_web; ?></title>
  </head>
  <body>

<!-- navbar -->
<nav class="navbar navbar-expand-lg navbar-dark fixed-top ">
    <div class="container">
      <a class="navbar-brand fw-bold" href="#">RotiKu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= base_url('home'); ?>">Cake</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('cupcake'); ?>">Caupcake</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('donut'); ?>">Donut</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('macaron'); ?>">Macaron</a>
          </li>
        </ul>
        <div class="btn-group">
          <div class="item d-flex align-items-center">
            <a href="shoppingcart.php"><i class="fa-solid fa-cart-shopping text-white me-4"></i></a>         
          </div>
          <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-primary" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
</nav>
<!-- akhir navbar -->