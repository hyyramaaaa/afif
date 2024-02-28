
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Course Details - Mentor Bootstrap Template</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>



<?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="javascript:void(0)">WEB GALERI FOTO AFIF</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="mynavbar">
            <ul class="navbar-nav me-auto">
              <li class="nav-item">
                <a class="nav-link"  href="register.php">Register</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.php">Login</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="text" placeholder="Search">
              <button class="btn btn-primary" type="button">Search</button>
            </form>
          </div>
        </div>
      </nav>
      <?php
        }else{
    ?>   
   
<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="javascript:void(0)">WEB GALERI FOTO AFIF</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mynavbar">
      <ul class="navbar-nav me-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="album.php">Album</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="foto.php">Foto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="logout.php">Logout</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="text" placeholder="Search">
        <button class="btn btn-primary" type="button">Search</button>
      </form>
    </div>
  </div>
</nav>

<?php
        }
    ?>



    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs" data-aos="fade-in">
      <div class="container">
      <div class="mt-3 p-3 bg-primary text-white rounded">
        <center><h1>Tampilan Berita</h1>
        <p></p>
      </div>
    </div>
    <br><!-- End Breadcrumbs -->


       <!-- ======= About Section ======= -->
       <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <?php
       include"koneksi.php";
        $id = $_GET['foto_id'];
        $data = mysqli_query($conn,"SELECT * FROM foto where fotoid='$id'");
        while($d = mysqli_fetch_array($data)){
        ?>
<td>
        <div class="row">
          <div class="col-lg-6 order-1 order-lg-2" data-aos="fade-left" data-aos-delay="100">
          <?php echo "<img src='gambar/$d[lokasifile]' width='50%'/>" ?>
          </div>
        <div class="col-lg-6 pt-4 pt-lg-0 order-2 order-lg-1 content">
        <p class="fst-italic">
          
        </td>
      
      <tr>
        <center><h3><td><?php echo $d['judulfoto']; ?></td><br><br></h3>
        <td> Tanggal : <?php echo $d['tanggalunggah']; ?></td><br>
        <td> User ID : <?php echo $d['userid']; ?></td><br><hr>
        <td> Deskripsi : <?php $kalimat=$d['deskripsifoto'];
                               $jumlahkarakter=200;
                               $cetak = substr($kalimat, 0, $jumlahkarakter);
                               echo $cetak; ?>
                               </tr>

            <?php
        }
            ?>

    </section><!-- End About Section -->
</body>

</html>