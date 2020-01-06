<!doctype html>
<html lang="en" id="home">

<head>
  <title><?= $title; ?></title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- My CSS -->
  <link href="<?= base_url('assets/') ?>css/style.css" rel="stylesheet">

  <!-- My Font Viga-->
  <link href="https://fonts.googleapis.com/css?family=Viga&display=swap" rel="stylesheet">

  <!-- My Icon -->
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

  <!-- Favicon -->
  <link rel="shortcut icon" href="<?= base_url() ?>assets/img/lung.png" />
</head>

<body>

  <!-- container navbar -->

  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="#home">sISP<img src="<?= base_url() ?>assets/RoyalUI/template/images/lung.png" alt="logo" style="height:40px; width:40px;">k</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ml-auto">
          <a class="nav-item nav-link page-scroll" href="<?= base_url('home') ?>">Beranda <span class="sr-only">(current)</span></a>
          <a class="nav-item nav-link page-scroll" href="#tentang-ispa">Tentang ISPA</a>
          <a class="nav-item nav-link page-scroll" href="#about">About</a>
          <a class="nav-item nav-link page-scroll" href="#footer">Contact Us</a>
        </div>
      </div>
    </div>
  </nav>

  <!-- akhir container navbar -->