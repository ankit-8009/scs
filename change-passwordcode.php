<?php
// print_r($_POST);
session_start();
if(isset($_POST['submit'])){
    $opassword=$_POST['opassword'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$email=$_SESSION['user'];
$con=mysqli_connect("localhost","root","","scs");
$query="SELECT * FROM tbl_user where email='$email'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
$dbpass=$row['password'];
if($dbpass!=$opassword){
       echo"
    <script>
    alert('old password does not match....');
    location.href='changepassword.php';
    </script>
    ";
}
elseif($opassword==$password){
       echo"
    <script>
    alert('old password and new password both are same....');
    location.href='changepassword.php';
    </script>
    ";
}
elseif($password!=$cpassword){
       echo"
    <script>
    alert('enter password does not match....');
    location.href='changepassword.php';
    </script>
    ";
}
else{
       $con=mysqli_connect("localhost","root","","scs");
$query="UPDATE tbl_user set password='$cpassword' where email='$email'";
$res=mysqli_query($con,$query);
// print_r($res);
if(mysqli_affected_rows($con)>0){
      echo"
    <script>
    alert(' successfully updated password....');
    location.href='changepassword.php';
    </script>
    ";
}
else{
      echo"
    <script>
    alert('something went wrong....');
    location.href='changepassword.php';
    </script>
    ";
}
}
}
else{
     echo"
    <script>
    alert('enter button change password....');
    location.href='changepassword.php';
    </script>
    ";
}
?>