<?php
session_start();
$method = $_POST['method'];
include('./db.php');
$email = $_SESSION['user'];
$query = "SELECT * from tbl_user where email = '$email'";
$res = mysqli_query($con,$query);
$row = mysqli_fetch_array($res);
$user_id = $row['id'];
if($method=="cash"){
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $tp = $_POST['tp'];
    $quantity = $_POST['quantity'];
    $query1 = "INSERT into tbl_orders(product_id,user_id,price,quantity,total_price,payment_status,payment_method,created_at) 
    values('$product_id','$user_id','$price','$quantity','$tp','pending','$method',now())";
    mysqli_query($con,$query1);
    if(mysqli_affected_rows($con)>0){
        echo "
        <script>
        alert('Orders Successfully');
        window.location.href='myOrder.php'
        </script>
        ";
    }
}
elseif($method=="online"){
    print_r($_POST);
    $product_id = $_POST['product_id'];
    $price = $_POST['price'];
    $transactionId = $_POST['transactionId'];
    $tp = $_POST['tp'];
    $quantity = $_POST['quantity'];

    $query2 = "INSERT INTO tbl_orders (product_id, user_id, price, quantity, total_price, payment_status, payment_method, transaction_id, created_at) 
               VALUES ('$product_id', '$user_id', '$price', '$quantity', '$tp', 'Done', '$method', '$transactionId', NOW())";

    $res = mysqli_query($con, $query2);
    if($res && mysqli_affected_rows($con) > 0){
        echo "<script>alert('Order successfully placed');
         window.location.href='myOrder.php';</script>";
    } else {
        echo "<script>alert('Failed to place order: ". mysqli_error($con) ."');
         window.location.href='myOrder.php';</script>";
    }
}

else{
     echo "
        <script>
        alert('something went wrong');
        // window.location.href='myOrder.php'
        </script>
        ";
}
?>