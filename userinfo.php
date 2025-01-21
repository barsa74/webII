<?php
$con = mysqli_connect("localhost",'root');
if($con){
    echo"connection sucessfull";
}
else{
    echo"access denied";
}
mysqli_select_db($con,"picture");
$name=$_POST['name'];
$email=$_POST['email'];
$pass=$_POST['password'];
$cpass=$_POST['cpassword'];

if(isset($_POST['submit-btn'])){
    if($pass != $cpass){
        echo " <h4>Password doesn't match</h4>";
    }
    else{
        $query="INSERT INTO userinfodata(name,email,password) value('$name','$email','$pass')";
        //echo"Sucessfull";
        echo"$query";
    }
}
mysqli_query($con,$query);
header('location:quick.php');
?>