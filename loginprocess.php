<?php
$servername="localhost";
$username="root";
$password="";
$database="sem";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("Error deteced:".mysqli_error($con));
}
if(isset($_POST['submit']))
{
    $uname = $_POST['uname'];
    $password = $_POST['password'];
    $sql="select * from registration where name='$uname' and password='$password'";
    $que=mysqli_query($con,$sql);
    if(mysqli_num_rows($que)>0)
    {
        echo "<script>alert('Login successfully done')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        echo "<script>alert('Wrong username or password')</script>";
        echo "<script>window.open('login.php','_self')</script>";
    }
}
?>