<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="icon" href="img/logo.png">
  <title> ROOMIE | Your Perfect Partner</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="Genrator" content="Visual Studio Code">
  <meta name="Author" content="Vinayki & Abhishek">
  <meta name="Description" content="Roomie Website">
  <meta name="keyword" content="">
  <link rel="stylesheet" href="css/login.css">

</head>
<body>
      <div class="popup">
        <div class="form">
          <br><br>
          <form action="loginprocess.php" method="POST" enctype="multipart/form-data">
          <div class="header">
            Member login
          </div>
          <div class="element">
            <label for="username">Username</label>
            <input type="text" id="username" name="uname" placeholder="Enter username">
          </div>
          <div class="element">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Enter password">
          </div>
          <div class="element">
            <button name="submit">Login</button>
          </div>
          </form>
        </div>
      </div>
</body>
</html>