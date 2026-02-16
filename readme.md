<?php
include('./includes/header.php');
?>
<?php
include('./includes/sidebar.php');

include('./db.php');
$query = "SELECT * FROM tbl_category where status='1'";
$res = mysqli_query($con,$query);


?>
<!-- main start -->

<div class="col-10 h-100" style="overflow:auto;">
    <div class="menu-wrapper">

        <?php 
        foreach($res as $row ){
            $cat_id = $row['id'];
            $query1 = "SELECT * FROM tbl_product where status='1'  and cat_id='$cat_id'"; 
            $res1 = mysqli_query($con,$query1);

        ?>
            <h2 class="menu-title"><?php  echo $row['cname']?></h2>
        
        <div class="menu-grid">

            <!-- PRODUCT CARD -->
             <?php  foreach($res1 as $row1){ ?>
            <div class="product-card">
                <div class="product-img-box">
                    <img src="./admin/<?php echo $row1['image'] ?>" alt="Product">
                </div>

                <div class="product-body">
                    <h4 class="product-name"><?php echo $row1['product']?></h4>
                    <!-- <span class="product-category">Fast Food</span> -->

                    <p class="product-desc">
                       <?php echo substr($row1['description'],0,12) ?>...
                    </p>

                    <div class="product-footer">
                        <span class="product-price">₹ <?php echo $row1['price'] ?></span>

                        <div class="btn-group">
                            <button class="btn-cart">Add to Cart</button>
                            <a class="btn-buy" href="checkout.php?id=<?php echo $row1['id'] ?>">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>

           
            
        </div>
        <?php }}?>
    </div>
</div>

<!-- main end -->
<?php
include('./includes/footer.php');
?>
