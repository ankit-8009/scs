<?php
// print_r($_POST);
if(isset($_POST['submit'])){
    $email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
// echo "$email,$password,$cpassword";
if($password!=$cpassword){
      echo"
    <script>
    alert('password does not match');
    location.href='register.php';
    </script>
    ";
}
else{
   include('db.php');
   $query="SELECT *FROM tbl_user where email='$email'";
   mysqli_query($con,$query);
   if(mysqli_affected_rows($con)>0){
  echo"
    <script>
    alert('you are already registration');
    location.href='index.php';
    </script>
    ";
   }
   else{
    include('db.php');
   $query="INSERT INTO tbl_user(email,password) VALUES('$email','$password')";
  mysqli_query($con,$query);
  if(mysqli_affected_rows($con)>0){
      echo"
    <script>
    alert('successfully registration');
    location.href='index.php';
    </script>
    ";
  }
  else{
     echo"
    <script>
    alert('something went wrong');
    location.href='register.php';
    </script>
    ";
  }
   }
}
}
else{
     echo"
    <script>
    alert('plz sumbit form');
    location.href='register.php';
    </script>
    ";
}
?>