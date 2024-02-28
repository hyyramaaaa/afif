<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <script src="assets/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-3">
  <h2>Daftar Dulu </h2>
  <form method="POST" action="proses_register.php">
    <div class="mb-3 mt-3">
      <label for="username">Username:</label>
      <input type="text" class="form-control" placeholder="Enter username" name="username">
    </div>
    <div class="mb-3">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"placeholder="Enter password" name="pswd">
    </div>
        <div class="mb-3">
      <label for="pwd">Email:</label>
      <input type="email" class="form-control" placeholder="Enter email" name="email">
    </div>
        <div class="mb-3">
      <label for="pwd">Nama Lengkap:</label>
      <input type="text" class="form-control" placeholder="Enter nama lengkap" name="namalengkap">
    </div>
        <div class="mb-3">
      <label for="pwd">Alamat:</label>
      <input type="text" class="form-control" placeholder="Enter alamat" name="alamat">
    </div>
    <div class="form-check mb-3">
      
    </div>
            <tr>
                <td></td>
                <input type="submit" class="btn btn-outline-success" value="Register">
                <a href="index.php" class="btn btn-outline-primary">Kembali</a>
            </tr>
        </table>
    </form>
</body>
</html>
