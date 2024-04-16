<?php
$servername="localhost";
$username="root";
$password="";
$database="sem";
$con=mysqli_connect($servername,$username,$password,$database);
if(!$con)
{
    die("Error deleting record:".mysqli_error($con));
}
if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $age = $_POST['age'];
    $eml = $_POST['eml'];
    $contact = $_POST['contact'];
    $gender = $_POST['gender'];
    $cur_adder = $_POST['cur_adder'];
    $per_adder = $_POST['per_adder'];
    $city = $_POST['city'];
    $rent = $_POST['rent'];
    $prfsn = $_POST['prfsn'];
    $pht = $_POST['pht'];
    $aadhar = $_POST['aadhar'];
    $ad_photo = $_POST['ad_photo'];
    $password = $_POST['password'];

    $sql="insert into registration(name,age,eml,contact,gender,cur_adder,per_adder,city, rent,prfsn,pht,aadhar,ad_photo,password)
    values ('$name','$age','$eml','$contact','$gender','$cur_adder','$per_adder','$city','$rent','$prfsn','$pht','$aadhar','$ad_photo','$password')";
    if(mysqli_query($con,$sql))
    {
        echo "<script>alert('Registration done successfully')</script>";
        echo "<script>window.open('index.php','_self')</script>";
    }
    else
    {
        echo "error :".mysqli_error($con);
    }
    mysqli_close($con);
}
    