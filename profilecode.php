<?php
// print_r($_POST);
session_start();
$email=$_SESSION['user'];
$name=$_POST['name'];
$number=$_POST['number'];
$gender=$_POST['gender'];
$file=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$error=$_FILES['file']['error'];
$size=$_FILES['file']['size'];
$ext=strtolower(pathinfo($file,PATHINFO_EXTENSION));
$csize=5*1024*1024;
if($ext!="png" && $ext!="jpg"){
             echo"
    <script>
    alert('only jpg and png allow');
    location.href='profile.php';
    </script>
    ";
    }
    elseif($error>0){
     
       echo"
    <script>
    alert('find error on uploaded');
    location.href='profile.php';
    </script>
    ";
    }
    elseif($size>$csize){
           echo"
    <script>
    alert('5mb size allow');
   location.href='profile.php';
    </script>
    ";
    }
    else{
        $n=round(microtime(true));
        $upload='upload/'.$n.$file;
        if(move_uploaded_file($tmp_name,$upload)){
               echo"
    <script>
    alert('successfully upload file');
    </script>
    ";
        }
        else{
               echo"
    <script>
    alert('something went wrong...');
    location.href='profile.php';
    </script>
    ";
        }
    }
    include('db.php');
$query="UPDATE tbl_user SET name='$name',number='$number',gender='$gender',file='$upload',status='1', created_at=now() WHERE email='$email'";
$res=mysqli_query($con,$query);


if(mysqli_affected_rows($con)>0){
      echo"
    <script>
    alert('successfully add product....');
    location.href='profile.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('something went wrong...');
    location.href='profile.php';
    </script>
    ";
}
?>