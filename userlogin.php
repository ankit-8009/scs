<?php 
session_start();
if(isset($_POST['login'])){
    $email=$_POST['email'];
$password=$_POST['password'];
include('db.php');
$query="select * from tbl_user where email='$email' and password='$password'";
$res=mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0){
    $_SESSION['user']=$email;
    echo"
    <script>
    alert('login successfully....');
    location.href='dashboard.php';
    </script>
    ";
}
else{
    echo
     "<script>
    alert('something went to wrong....');
    location.href='index.php';
    </script>
    ";
}
}
else{
      echo
     "<script>
    alert('enter login button....');
    location.href='index.php';
    </script>
    ";
}
?>