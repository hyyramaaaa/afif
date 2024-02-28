<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Edit Foto</title>
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
<center><h1>Halaman Edit Album</h1></center>
    <center><p>Selamat datang <b><?=$_SESSION['namalengkap']?></b></p></center>
</div>

    <form action="update_foto.php" method="post" enctype="multipart/form-data">
        <?php
            include "koneksi.php";
            $fotoid=$_GET['fotoid'];
            $sql=mysqli_query($conn,"select * from foto where fotoid='$fotoid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="fotoid" value="<?=$data['fotoid']?>" hidden>
       
        <div class="mb-3 mt-3">
      <label for="judulfoto">Judul Foto:</label>
      <input type="text" class="form-control" name="judulfoto" value="<?=$data['judulfoto']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="deskripsi">Deskripsi:</label>
      <input type="text" class="form-control" name="deskripsifoto" value="<?=$data['deskripsifoto']?>">
    </div>
    <div class="mb-3 mt-3">
      <label for="lokasifile">LokasiFile:</label>
      <input type="file" class="form-control" name="lokasifile">
    </div>
    <div class="mb-3 mt-3">
      <label for="albumid">Album:</label>
      <select name="albumid">
                    <?php
                        $userid=$_SESSION['userid'];
                        $sql2=mysqli_query($conn,"select * from album where userid='$userid'");
                        while($data2=mysqli_fetch_array($sql2)){
                    ?>
                            <option value="<?=$data2['albumid']?>" <?php if($data2['albumid']==$data['albumid']){echo 'selected';}?>><?=$data2['namaalbum']?></option>
                    <?php
                        }
                    ?>
                    </select>
    </div>
            <tr>
                <td></td>
                <td><input type="submit" value="Ubah"></td>
            </tr>
        </table>
        <?php
            }
        ?>
    </form>

    
</body>
</html>