<?php
// print_r($_POST);
$product_id=$_POST['product_id'];
$user_id=$_POST['user_id'];
include('db.php');
$query="INSERT INTO tbl_cart(product_id,user_id,status,created_at)VALUE('$product_id','$user_id','1',now())";
mysqli_query($con,$query);
if(mysqli_affected_rows($con)>0){
    echo"
    <script>
    alert('success fully add to card....')
    location.href='addtocard.php';
    </script>
    ";
}
else{
    echo"
    <script>
    alert('success fully add to card....')
    location.href='addtocard.php';
    </script>
    "; 
}
?>