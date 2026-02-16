<?php
include('./includes/header.php');
?>
<?php
include('./includes/sidebar.php');
?>
<!-- main start -->
<?php

include('db.php');
$useremail=$_SESSION['user'];
$qua="SELECT id from tbl_user Where email='$useremail'";
$result=mysqli_query($con,$qua);
$user=mysqli_fetch_array($result);
$user_id=$user['id'];
$query="SELECT product_id FROM tbl_cart where user_id='$user_id'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);

?>
<div class="col-10 h-100" style="overflow:auto;">
<div class="cart-page-wrapper">
<?php
foreach($res as $row){
    $product_id=$row['product_id'];
$query1="select *from tbl_product where id='$product_id'";
$res1=mysqli_query($con,$query1);
$row1 = mysqli_fetch_array($res1);
?>
    <!-- LEFT : CART ITEMS -->
    <div class="cart-items-box">

        <h4 class="cart-title">My Cart</h4>

        <!-- SINGLE CART ITEM -->
        <div class="cart-item">
            <div class="cart-item-img">
                <img src="./admin/<?php echo $row1['image']?>" alt="Product">
            </div>

            <div class="cart-item-details">
                <h6><?php echo $row1['product']?></h6>
                <p class="cart-item-desc"><?php echo $row1['description']?></p>

                <div class="cart-item-bottom">
                    <span class="cart-item-price" id="price" data-price="<?php echo $row1['price']; ?>">₹<?php echo $row1['price']?>/-</span>

                    <select class="form-select cart-qty" id="quantity" name="quantity" onchange="tprice()">
                       <option value="">--choose quantity--</option>   
                    <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                    </select>
                    <button class="cart-remove-btn">Remove</button>
                </div>
            </div>
        </div>

        <!-- COPY ABOVE BLOCK FOR MORE PRODUCTS -->

    </div>
<?php
}
?>
    <!-- RIGHT : SUMMARY -->
    <div class="cart-summary-box">

        <h5>Order Summary</h5>

        <div class="summary-row">
            <span>Items</span>
            <span>2</span>
        </div>

        <div class="summary-row">
            <span>Total Price</span>
            <span>₹1998</span>
        </div>

        <hr>

        <div class="summary-row total">
            <span>Payable Amount</span>
            <span>₹1998</span>
        </div>

       <a href="bulkorder.php?id=<?php echo $user_id?>">
         <button class="btn-buy w-100 mt-3">
            Proceed to Checkout
        </button>
       </a>

    </div>

</div>


</div>

<!-- main end -->
 
</div> <!-- row end -->
</div> <!-- container-fluid end -->
<script>
function tprice(){
    var qty = document.getElementById('quantity').value;
    var price = document.getElementById('price').getAttribute('data-price');
    document.getElementById('price').innerHTML = "₹" + (qty * price) + "/-";
}
</script>
<script src="./js/bootstrap.bundle.min.js"></script>
</body>
</html>