<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website Gallery Afif</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>


 
</head>
<body>
   


<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#">
      <img src="profil/Admin.png" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
      <li class="nav-item">
        <a class="nav-link active">Website Galery</a>
      </li>
      <a class="nav-link" href="home.php">Beranda</a>
      <a class="nav-link" href="index.php">Home</a>
      <a class="nav-link" href="album.php">Album</a>
      <a class="nav-link" href="foto.php">Foto</a>
</li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a class="nav-link" href="logout.php"><span class="glyphicon glyphicon-user"></span>LogOut</a></li>
    </ul>
    </div>
</nav>

  <!-- ======= Hero Section ======= -->
  <section id="why-us" class="why-us">
 <!-- Main component for a primary marketing message or call to action -->
 <div class="container mt-3">
 
 <div class="mt-4 p-5 bg-secondary text-white rounded">
 <center>
<h1>Selamat Datang Di Website Gallery</h1> 
      <p>Selamat Datang  <b><?=$_SESSION['namalengkap']?></b></p>
  </center>
 
</div> 
  </div>
</div>

</section><!-- End Why Us Section -->
</body>
</html>