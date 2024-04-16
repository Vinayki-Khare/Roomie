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
  <link rel="stylesheet" href="css/header.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
 
</head>

<body>
  <div class="header">
    <?php if (!isset($_SESSION['user'])): ?>
    <a href="index.php" class="logo"><img src="img/icon.png" alt=""></a>
    <div class="header-right">
    <!--  <a class="active" href="index.html">Create A Listing</a>-->
      <a class="active" href="login.php">Log in</a>
      <a href="register.php">Sign up</a>
    </div>
    <?php else: ?>
        <a class="active" href="logout.php">Log Out</a>
    <?php endif; ?>
  </div>

</body>

</html>