<?php
include('./includes/header.php');

$product_id = $_POST['product_id'];
$price = $_POST['price'];
$quantity = $_POST['quantity'];
$tp = $price * $quantity;

include('./includes/sidebar.php');
include('./db.php');

$query = "SELECT * FROM tbl_product WHERE id='$product_id'";
$res = mysqli_query($con, $query);
$row = mysqli_fetch_array($res);
?>

<!-- main start -->
<!-- main start -->
<div class="col-10 h-100 d-flex justify-content-center align-items-center" style="overflow:auto;">

    <form action="paymentcode.php" method="post" class="w-100 d-flex justify-content-center">

        <div class="card p-5" style="max-width:800px; width:100%; border-radius:20px;">

            <!-- TITLE -->
            <h3 class="text-center text-maroon fw-bold mb-4">
                Payment Summary
            </h3>

            <!-- SUMMARY -->
            <div class="d-flex justify-content-between mb-3">
                <div>
                    <p><strong>Product:</strong> <?php echo $row['product']; ?></p>
                    <p><strong>Quantity:</strong> <?php echo $quantity; ?></p>
                </div>
                <h5 class="text-maroon fw-bold">
                    Total: ₹<?php echo $tp; ?>/-
                </h5>
            </div>

            <hr>

            <!-- HIDDEN FIELDS -->
            <input type="hidden" name="product_id" value="<?php echo $product_id ?>">
            <input type="hidden" name="price" value="<?php echo $price ?>">
            <input type="hidden" name="tp" value="<?php echo $tp ?>">
            <input type="hidden" name="quantity" value="<?php echo $quantity ?>">

            <!-- PAYMENT METHOD -->
            <label class="fw-semibold mb-2">Select Payment Method</label>

            <div class="mb-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="method" value="cash" id="cash" checked onclick="togglePayment()">
                    <label class="form-check-label" for="cash">Cash on Delivery</label>
                </div>

                <div class="form-check">
                    <input class="form-check-input" type="radio" name="method" value="online" id="online" onclick="togglePayment()">
                    <label class="form-check-label" for="online">Online Payment</label>
                </div>
            </div>

            <!-- ONLINE PAYMENT -->
            <div id="transitionBox" style="display:none;">

                <div class="text-center bg-maroonc p-4 rounded-4 mb-4">

                    <h4 class="text-golden fw-bold mb-3">Scan & Pay</h4>

                    <div class="bg-white p-3 rounded-3 d-inline-block mb-3">
                        <img src="qr.jpeg" style="width:200px;height:200px;">
                    </div>

                    <p class="text-light small mb-0">
                        GPay / PhonePe / Paytm
                    </p>
                </div>

                <!-- TRANSACTION INPUT -->
                <div class="mb-4">
                    <label class="checkout-label">Transaction ID</label>
                    <input type="text" name="transactionId" class="form-control"
                           placeholder="Eg: TXN123456789">
                </div>

                <div class="d-flex justify-content-between mb-4">
                    <span class="fw-semibold">Payable Amount</span>
                    <span class="fw-bold text-maroon">₹<?php echo $tp; ?>/-</span>
                </div>
            </div>

            <!-- SUBMIT -->
            <button type="submit" class="btn btn-golden w-100 py-2 fw-semibold">
                Confirm Order
            </button>

        </div>

    </form>

</div>

<!-- main end -->

<!-- main end -->

<script>
function togglePayment() {
    if (document.getElementById("online").checked) {
        document.getElementById("transitionBox").style.display = "block";
    } else {
        document.getElementById("transitionBox").style.display = "none";
    }
}
</script>


<?php include('./includes/footer.php'); ?>