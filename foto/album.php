<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Album</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.bundle.min.js"></script>

 
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

<div class="container">
     <div class="mt-2 p-1 bg-secondary text-white rounded">
<center><h1>Halaman Album</h1></center>
    <center><p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p></center>
</div>
<form action="tambah_album.php" method="post">
        <table>
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah" class="btn btn-outline-success"></td>
            </tr>
        </table>
    </form>

    
    <table class="table">
    <thead class="table-primary">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
            </thead>
        </tr>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from album where userid='$userid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['albumid']?></td>
                    <td><?=$data['namaalbum']?></td>
                    <td><?=$data['deskripsi']?></td>
                    <td><?=$data['tanggaldibuat']?></td>
                    <td>
                        <a class="btn btn-outline-danger" href="hapus_album.php?albumid=<?=$data['albumid']?>">Hapus</a>
                        <a class="btn btn-outline-primary" href="edit_album.php?albumid=<?=$data['albumid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
    </table>
    </table>
</body>
</html>