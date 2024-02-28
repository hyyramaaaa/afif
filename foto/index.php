<!DOCTYPE html>
<html lang="en">
<head>
  <title>Website Gellery Afif</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<?php
        session_start();
        if(!isset($_SESSION['userid'])){
    ?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
    <a class="navbar-brand" href="#">
      <img src="profil/Admin.png" alt="Logo" style="width:40px;" class="rounded-pill">
    </a>
      <li class="nav-item">
        <a class="nav-link active">Website Galery</a>
      </li>
        <a class="nav-link"  href="register.php">Register</a>
        <a class="nav-link"  href="login.php">Login</a>
</li>
    </div>
</nav>

<?php
        }else{
    ?>   

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

<?php
        }
    ?>
    <div class="container mt-3">
  <div class="mt-4 p-5 bg-secondary text-white rounded">
    <h1>Selamat Datang Di Website Gallery</h1>
    <p>media informasi terbaru dan menarik untuk dibaca oleh pengguna internet. </p> 
  </div>
</div>
<br>
<table class="table table-striped">
        <tr>
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Foto</th>
            <th>Uploader</th>
            <th>Jumlah Like</th>
            <th>Aksi</th>
        </tr>
        <?php
            include "koneksi.php";
            $sql=mysqli_query($conn,"select * from foto,user where foto.userid=user.userid");
            while($data=mysqli_fetch_array($sql)){
        ?>
            <tr>
                <td><?=$data['fotoid']?></td>
                <td><?=$data['judulfoto']?></td>
                <td><?=$data['deskripsifoto']?></td>
                <td>
                  
                <a href="detail-image.php?foto_id=<?php echo $data['fotoid']; ?>">
            <?php echo "<img src='gambar/$data[lokasifile]' width='120' height='140' />";?></td>

                </td>
                <td><?=$data['namalengkap']?></td>
                <td>
                    <?php
                        $fotoid=$data['fotoid'];
                        $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                        echo mysqli_num_rows($sql2);
                    ?>
                </td>
                <td>
                    <a href="like.php?fotoid=<?=$data['fotoid']?>" type="button" class="btn btn-outline-primary">Like</a>
                    <a href="komentar.php?fotoid=<?=$data['fotoid']?>" type="button" class="btn btn-outline-secondary">Komentar</a>
                </td>
            </tr>
            <nav>
            <ul class="pagination justify-content-center">
        <li class="page-item">
        </li>
      </ul>
      </nav>
      
        <?php
            }
        ?>
    </table>

</body>
</html>