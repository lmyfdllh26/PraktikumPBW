<!DOCTYPE html>
<?php
include 'koneksi.php';

$profile = mysqli_query($conn, "SELECT * FROM profile");
$dataProfile = mysqli_fetch_assoc($profile);

$skills = mysqli_query($conn, "SELECT * FROM skills");
$certificates = mysqli_query($conn, "SELECT * FROM certificates");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Park Jong Seong Portfolio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Jay Portfolio</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
        <li class="nav-item"><a class="nav-link" href="#about">About Me</a></li>
        <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<!-- HOME -->
<section id="home" class="vh-100 d-flex align-items-center text-center">
  <div class="container">
    <img src="img/jay.jpg" class="profile-img mb-4">
    <h1><?php echo $dataProfile['nama']; ?></h1>
    <p><?php echo $dataProfile['deskripsi']; ?></p>
  </div>
</section>

<!-- ABOUT -->
<section id="about" class="py-5 bg-light">
  <div class="container">
    <h2 class="section-title">About Me</h2>

    <p class="text-center mb-5">
      Park Jong Seong atau dikenal sebagai Jay Park adalah penyanyi Korea Selatan-Amerika Serikat yang merupakan anggota dari boy band Enhypen.
    </p>

    <h4 class="mb-4 text-center">My Skills</h4>

    <!-- SKILLS -->
    <?php while($row = mysqli_fetch_assoc($skills)) { ?>
  <div class="skill-box">
    <div class="skill-title">
      <span><?php echo $row['nama_skill']; ?></span>
      <span><?php echo $row['level']; ?>%</span>
    </div>
    <div class="skill-bar">
      <div class="skill-fill" style="width:<?php echo $row['level']; ?>%"></div>
    </div>
  </div>
<?php } ?>

<!-- CERTIFICATES -->
<section id="certificates" class="py-5">
  <div class="container">
    <h2 class="section-title text-center mb-4">Certificates</h2>

    <div class="row g-4">
      <?php while($row = mysqli_fetch_assoc($certificates)) { ?>
        
        <div class="col-md-4">
          <div class="card h-100 text-center p-3">
            <h5><?php echo $row['title']; ?></h5>
            <p><?php echo $row['deskripsi']; ?></p>
          </div>
        </div>

      <?php } ?>
    </div>

  </div>
</section>