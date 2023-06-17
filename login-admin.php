
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <title>FORM ADMIN</title>
  </head>
  <div class="container">
    <div class="login">
      <form action="login.php" method="post">
        <img src="asset/logo.jpg" alt="" />
        <h1>Admin Login</h1>
        <hr />
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
        <button type="submit" name="login">Login</button>
        
        <p>
          <a href="registrasi-admin.php">Create Account</a>
        </p>
      </form>
    </div>
  </div>
</html>
