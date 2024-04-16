<?php
include_once "header.php";
$cities = ["Katni","Maihar","Satna"];
?>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
<link rel="stylesheet" href="css/index.css">
    <table>
        <tr>
            <td>
                <div class="first_part">
                    <div class="photo1">
                        <img src="img/mover.png" width="198px" height="244px">
                    </div>
                    <div class="mid">
                        <h1>Rent rooms and find roommates,in our verified community.</h1>
                        <br><br><br><br>
                        <form action="" method="POST">
                            <label>Location</label>
                            <br>
                            <select id="city" name="city" style="width:200px; height:45px;">
                                <option value="">---Select here---</option>
                                <option value="katni">Katni</option>
                                <option value="maihar">Maihar</option>
                                <option value="satna">Satna</option>
                            </select>
                            <button class="bt" id="search" type="submit" name="search">BROWSE</button>
                        </form>
                    </div>
                    <div class="photo2">
                        <img src="img/lister.png" width="225px" height="242px">
                    </div>
            </td>
            </div>
    <?php
    $connection = mysqli_connect("localhost","root","","sem");
    if(isset($_POST['search']))  
    {
        $id= $_POST['city'];
        $query="select * from registration where city='$id' ";
        $query_run = mysqli_query($connection, $query);
    ?>   
    </table>
    <div class="table-responsive">
        <table id="providers" class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">Name</th>
                    <th scope="col">Age</th>
                    <th scope="col">Email</th>
                    <th scope="col">Profession</th>
                    <th scope="col">Rent</th>
                    <th scope="col">Address</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if(mysqli_num_rows($query_run)>0)
                {
                    while($row= mysqli_fetch_array($query_run))
                    {
                ?>
                <tr>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['age']; ?></td>
                    <td><?php echo $row['eml']; ?></td>
                    <td><?php echo $row['prfsn']; ?></td>
                    <td><?php echo $row['rent']; ?></td>
                    <td><?php echo $row['cur_adder']; ?></td>
                </tr>
                <?php
                    }
                }
                else
                {   
                    ?>
                    <tr>
                        <td colspan="4">No record found</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>    
        </table>
    </div>
    <?php
    }
    ?>
    <br><br>
    <table>
        <tr>
            <div class="second_part">
                <td>
                    <div class="photo3">
                        <img src="img/new-rent.png">
                    </div>
                </td>
                <td>
                    <div id="id22">
                        <h3>Your Place, Your Rules</h3>
                        <h5 style="color: grey;">Roomi helps you share a room or an entire home — on
                            your terms. Welcome to the future of co-living!</h5>
                        <br>
                        <h5 style="color: rgb(248, 119, 34);">A ROOMMATE FOR EVERYONE</h5>
                        <h5>Whether you're looking for a new BFF or just someone
                            to split the rent, Roomi is the easiest roommate finder out there.</h5>
                        <br>
                        <h5 style="color: rgb(248, 119, 34);">FLEXIBLE RENTING TERMS</h5>
                        <h5>Got rooms to rent? Find someone to move in with you –
                            for three months or a year!</h5>
                    </div>
                </td>
            </div>
        </tr>
        <tr>
            <div class="third_part">
                <td>
                    <div id="id31">
                        <h3>Sublet Safely</h3>
                        <h5 style="color: grey;">Trust and transparency are the keys to safely find rooms
                            for rent. Let us help with that!</h5>
                        <br>
                        <h5 style="color: rgb(248, 119, 34);">BACKGROUND CHECKS</h5>
                        <h5>Know who you're living with by asking potential roommates
                            to complete a background check before they apply to your listing.</h5>
                        <br>
                        <h5 style="color: rgb(248, 119, 34);">SECURE IN-APP MESSAGING</h5>
                        <h5>Keep your contact info private by chatting to potential
                            roommates through the Roomi app or website.</h5>
                    </div>
                </td>
                <td>
                    <div class="photo4">
                        <img src="img/new-sublet.png">
                    </div>
                </td>
            </div>
        </tr>
        <tr>
            <div class="fourth_part">
                <td>
                    <div class="photo5">
                        <img src="img/easy.png">
                    </div>
                </td>
                <td>
                    <div id="id42">
                        <h3>RENT EASIER</h3>
                        <h5 style="color: grey;">Roomi makes finding cheap rooms or putting your house for
                            rent easier than ever. Plus, everything is documented and verified.</h5>
                        <br>
                        <h5 style="color: rgb(248, 119, 34);">ONLINE BOOKING</h5>
                        <h5>Easily review booking requests from potential roommates.
                            Once you approve their booking, we'll take your listing off the </h5>
                        <h5>market and set up a secure payment.</h5>
                        <br>
                        <h5 style="color: rgb(248, 119, 34);">SECURE PAYMENTS</h5>
                        <h5>Once you find a room, we hold and safely transfer your first
                            month's rent payment to the lister. No sketchy, offline cash payments!</h5>
                    </div>
                </td>
            </div>
        </tr>
    </table>
   
   
<hr>
<br>
<footer class="footer_area section_padding_130_0">
      <div class="container">
        <div class="row">
          
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">COMPANY</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  
                  <li><a href="about.php">About Us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">CONTACT US</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                <li><a href="mail to:serviceprovider2907@gmail.com">roomie297@gmail.com</a></li>

                                    
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">SOCIAL LINKS</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <!-- Facebook -->
                  <li><a href=#>Facebook</a><img src="img/dd1.png" width="25px" height="25px"></li>
                  <!-- Instagram -->
                  <li><a href=#>Instagram</a><img src="img/dd2.png" width="25px" height="25px"></li>
                  <!-- Linkedin 
                  <i class="fab fa-linkedin-in"></i>-->
                </ul>
              </div>
              <div class="footer_menu">
                <ul>
                  
                </ul>
              </div>
            </div> 
          </div>
        </div>
      </div>
    </footer>



