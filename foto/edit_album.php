<?php
    session_start();
    if(!isset($_SESSION['userid'])){
        header("location:login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Halaman Edit Album</title>
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

<div class="container mt-2">
    <form method="post" action="update_album.php">
        <?php
            include "koneksi.php";
            $albumid=$_GET['albumid'];
            $sql=mysqli_query($conn,"select * from album where albumid='$albumid'");
            while($data=mysqli_fetch_array($sql)){
        ?>
        <input type="text" name="albumid" value="<?=$data['albumid']?>" hidden>
        
        <div class="mb-3 mt-3">
      <label for="namaalbum">Nama Album:</label>
      <input type="text" class="form-control" placeholder="Enter nama album"
       name="namaalbum" value="<?=$data['namaalbum']?>">
    </div>
           
    <div class="mb-3 mt-3">
      <label for="deskripsi">Deskripsi:</label>
      <input type="text" class="form-control" placeholder="deskripsi"
      name="deskripsi" value="<?=$data['deskripsi']?>">
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