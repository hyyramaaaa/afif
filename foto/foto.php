<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Foto</title>
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
<center><h1>Halaman Foto</h1></center>
    <center><p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p></center>
</div>

    <form action="tambah_foto.php" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>Judul</td>
                <td><input type="text" name="judulfoto"></td>
            </tr>
            <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsifoto"></td>
            </tr>
            <tr>
                <td>Lokasi File</td>
                <td><input type="file" name="lokasifile"></td>
            </tr>
            <tr>
                <td>Album</td>
                <td>
                    <select name="albumid">
                    <?php
                        include "koneksi.php";
                        $userid=$_SESSION['userid'];
                        $sql=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data=mysqli_fetch_array($sql)){
                    ?>
                            <option value="<?=$data['albumid']?>"><?=$data['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
                    
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>

    
    <table class="table">
    <thead class="table-primary">
            <th>ID</th>
            <th>Judul</th>
            <th>Deskripsi</th>
            <th>Tanggal Unggah</th>
            <th>Lokasi File</th>
            <th>Album</th>
            <th>Disukai</th>
            <th>Aksi</th>
            </thead>
        <?php
            include "koneksi.php";
            $userid=$_SESSION['userid'];
            $sql=mysqli_query($conn,"select * from foto,album where foto.userid='$userid' and foto.albumid=album.albumid");
            while($data=mysqli_fetch_array($sql)){
        ?>
                <tr>
                    <td><?=$data['fotoid']?></td>
                    <td><?=$data['judulfoto']?></td>
                    <td><?=$data['deskripsifoto']?></td>
                    <td><?=$data['tanggalunggah']?></td>
                    <td>
                        <img src="gambar/<?=$data['lokasifile']?>"height="110px" width="110px">
                    </td>
                    <td><?=$data['namaalbum']?></td>
                    <td>
                        <?php
                            $fotoid=$data['fotoid'];
                            $sql2=mysqli_query($conn,"select * from likefoto where fotoid='$fotoid'");
                            echo mysqli_num_rows($sql2);
                        ?>
                    </td>
                    <td>
                        <a class="btn btn-outline-danger" href="hapus_foto.php?fotoid=<?=$data['fotoid']?>">Hapus</a>
                        <a class="btn btn-outline-primary" href="edit_foto.php?fotoid=<?=$data['fotoid']?>">Edit</a>
                    </td>
                </tr>
        <?php
            }
        ?>
        
    </table>
</body>
</html>