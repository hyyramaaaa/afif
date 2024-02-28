<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="assets/css/login.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
   
<body>
    
<div class="main">  	
		<input type="checkbox" id="chk" aria-hidden="true">

<body>
    <center>
    <h1>Login Dahulu!</h1>
    <form action="proses_login.php" method="post">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            
            <tr>
                <td></td>
                <td> <button type="submit" name="submit" value="Login" class="btn btn-outline-primary">submit</button>
			</td>
            </tr>
        </table>
        <center>
         <p>Belum punya akun? daftar <a style="color:#00C;" href="register.php">DISINI</a></p>
         <p>atau klik <a style="color:#00C;" href="index.php">Kembali</a></p>
      </div>
      
    </form>
</body>
</html>