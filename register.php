<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="icon" href="img/logo.png">
    <title> ROOMIE | Your Perfect Partner</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="Genrator" content="Visual Studio Code">
    <meta name="Author" content="Vinayki & Abhishek">
    <meta name="Description" content="Roomie Website">
    <meta name="keyword" content="">
    <link rel="stylesheet" href="css/register.css">
   </head>
<body>
  <div class="container">
    <div class="title">Registration</div>
    <div class="content">
      <form action="insert.php" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="Enter your name" required id="name" name="name">
          </div>
          <div class="input-box">
            <span class="details">Age</span>
            <input type="text" placeholder="Enter your age" id="age" name="age" minlength="2" maxlength="4" required>
          </div>
          <div class="input-box">
            <span class="details">Email</span>
            <input type="email" id="eml" name="eml" placeholder="Enter your email" required>
          </div>
          <div class="input-box">
            <span class="details">Contact Number</span>
            <input type="text" id="contact" name="contact" minlength="10" maxlength="10" placeholder="Enter your number" required>
          </div>
          <div class="gender-details">
            <input type="radio" name="gender" value="m" id="dot-1">
            <input type="radio" name="gender" value="f" id="dot-2">
            <input type="radio" name="gender" value="o" id="dot-3">
            <span class="gender-title">Gender</span>
            <div class="category">
              <label for="dot-1">
              <span class="dot one"></span>
              <span class="gender">Male</span>
            </label>&nbsp;&nbsp;
            <label for="dot-2">
              <span class="dot two"></span>
              <span class="gender">Female</span>
            </label>&nbsp;&nbsp;
            <label for="dot-3">
              <span class="dot three"></span>
              <span class="gender">Others</span>
              </label>
            </div>
          </div>
          <div class="input-box">
            <span class="details">Current Address</span>
            <input type="text" id="cur_adder" name="cur_adder" placeholder="Enter your current address" required>
          </div>
          <div class="input-box">
            <span class="details">Permanent Address</span>
            <input type="text" id="per_addder" name="per_adder" placeholder="Enter your permanent address" required>
          </div>
          <div class="input-box">
            <span class="details">City</span>
            <select id="city" name="city" class="drop-down"> 
                <option value="">---Select here---</option>
                <option value="katni">Katni</option>
                <option value="maihar">Maihar</option>
                <option value="satna">Satna</option>
            </select>
          </div>
          <div class="input-box">
            <span class="details">Rent</span>
            <input type="text" minlength="4" maxlength="7" id="rent" name="rent" placeholder="Enter rent" required>
          </div>
          <div class="input-box">
            <span class="details">Profession</span>
            <input type="text" id="prfsn" name="prfsn" placeholder="Enter your profession" required>
          </div>
          <div class="input-box">
            <span class="details">Photo</span>
            <input type="file" style="padding-top: 9px;" id="pht" name="pht" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar Number</span>
            <input type="text" id="aadhar" name="aadhar" placeholder="Enter your aadhar number" required>
          </div>
          <div class="input-box">
            <span class="details">Aadhar Photo</span>
            <input type="file" id="ad_photo" name="ad_photo" style="padding-top: 9px;" required>
          </div>
          <div class="input-box">
            <span class="details">Password</span>
            <input type="password" minlength="8" id="password" name="password" placeholder="Enter your password" required>
          </div>
          
        
        <div class="button">
          <input type="submit" name="submit" value="Register" style="width:628.67px;height: 45px;">
        </div>
      </form>
    </div>
  </div>

</body>
</html>