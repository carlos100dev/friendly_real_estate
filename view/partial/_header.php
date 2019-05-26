<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="<?php echo __BASE_DIR__; ?>">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- site.css -->
    <link rel="stylesheet" href="assets/site.css">

    <title><?php echo $title; ?></title>
  </head>
  <body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="index.php">FRIENDLY REAL ESTATE</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item<?php echo (isset($mode) && $mode=='home') ? ' active' : ''; ?>">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item<?php echo (isset($mode) && $mode=='listings') ? ' active' : ''; ?>">
            <a class="nav-link" href="listings">View Listings</a>
          </li>
          <li class="nav-item<?php echo (isset($mode) && $mode=='contact') ? ' active' : ''; ?>">
            <a class="nav-link" href="contact">Contact Us</a>
          </li>
        </ul>

      </div>
    </nav>

    <!-- content begins -->
