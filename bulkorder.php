<?php
$id = $_REQUEST['id'];
include('db.php');
$query = "SELECT * FROM tbl_cart where user_id='$id' and status='1'";
$res = mysqli_query($con,$query);

foreach($res as $row){
    $cart_id = $row['id'];
    $product_id = $row['product_id'];
    $query1 = "SELECT * FROM tbl_product where id='$product_id'";
    $res1 = mysqli_query($con,$query1);
    $row1 = mysqli_fetch_array($res1);
    $price = $row1['price'];
    $tp = $price;
    $query2 = "INSERT INTO tbl_orders(product_id,user_id,price,total_price,payment_status,payment_method,created_at) values('$product_id','$id','$price','$tp','pending','cash',now())";
    mysqli_query($con,$query2);

    $query3 = "Delete from tbl_cart where id='$cart_id'";
    mysqli_query($con,$query3);
}
echo "<script>
    alert('Order placed Successfully')
    window.location.href='myorder.php'
</script>";
?>