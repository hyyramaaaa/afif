<?php
    include "koneksi.php";

    $a=$_POST['username'];
    $b=$_POST['pswd'];
    $c=$_POST['email'];
    $d=$_POST['namalengkap'];
    $e=$_POST['alamat'];

    $sql=mysqli_query($conn,"insert into user values('','$a','$b','$c','$d','$e')");

    header("location:login.php");
?>