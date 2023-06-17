<?php 

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Form Registrasi</title>
    <link rel="stylesheet" href="styleregis.css" />
  </head>
  <body>
    <div class="container">
      <div class="registrasi">
        <form action="registrasi.php" method="post">
          <img src="asset/logo.jpg" alt="" />
          <h1>Registrasi</h1>
          <hr />

          <input type="text" placeholder="ID" autocomplete="off" name="id" />
          <input
            type="text"
            placeholder="Username"
            autocomplete="off"
            name="username"
          />

          <input
            type="password"
            placeholder="Password"
            autocomplete="off"
            name="password"
          />
          <input
            type="tel"
            placeholder="No Telepon"
            autocomplete="off"
            name="no_telepon"
          />
          <input
            type="text"
            placeholder="Alamat"
            autocomplete="off"
            name="alamat"
          />
          
          <button>Registrasi</button>
          <p>
            <a href="login-admin.php">Have Account!</a>
          </p>
        </form>
      </div>
    </div>
  </body>
</html>
