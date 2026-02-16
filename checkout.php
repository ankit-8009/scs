<?php
include('./includes/header.php');
include('./includes/sidebar.php');
include('db.php');

$id = $_REQUEST['id'];
$query = "SELECT * FROM tbl_product WHERE status='1' AND id='$id'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_array($res);
?>

<div class="col-10 h-100" style="overflow:auto;">
    <div class="d-flex justify-content-center align-items-center h-100">

        <div class="simple-checkout-card">

            <!-- LEFT IMAGE -->
            <div class="checkout-image">
                <img src="./admin/<?php echo $row['image']; ?>" alt="Product">
            </div>

            <!-- RIGHT CONTENT -->
            <div class="checkout-content d-flex flex-column justify-content-center">

                <form action="payment.php" method="POST">

                    <h3 class="checkout-title mb-2">
                        <?php echo $row['product']; ?>
                    </h3>

                    <p class="checkout-desc mb-3">
                        <?php echo substr($row['description'], 0, 80); ?>...
                    </p>

                    <h4 class="checkout-price mb-4"
                        id="price"
                        data-price="<?php echo $row['price']; ?>">
                        ₹<?php echo $row['price']; ?>/-
                    </h4>

                    <input type="hidden" name="product_id" value="<?php echo $row['id']; ?>">
                    <input type="hidden" name="price" value="<?php echo $row['price']; ?>">

                    <div class="mb-4">
                        <label class="checkout-label">Quantity</label>
                        <select class="form-control" id="quantity" name="quantity" onchange="tprice()">
                            <option value="">--choose quantity--</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            <option>4</option>
                            <option>5</option>
                            <option>6</option>
                            <option>7</option>
                            <option>8</option>
                            <option>9</option>
                            <option>10</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-golden w-100 py-2">
                        Confirm Order
                    </button>

                </form>

            </div>

        </div>

    </div>
</div>


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
