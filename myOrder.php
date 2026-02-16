<?php
include('./includes/header.php');
?>
<?php
include('./includes/sidebar.php');
?>
<!-- main start -->
 <div class="col-10 h-100" style="overflow:auto;">
    <div class="user-dashboard">

        <!-- PAGE TITLE -->
        <h4 class="menu-title">My Orders</h4>

        <!-- ORDER CARD -->
        <div class="card p-4 mb-4" style="border-radius:16px;">
            <div class="row align-items-center">

                <!-- PRODUCT IMAGE -->
                <div class="col-md-3">
                    <div class="cart-item-img">
                        <img src="./img/canteen.png" alt="Product">
                    </div>
                </div>

                <!-- PRODUCT DETAILS -->
                <div class="col-md-5">
                    <h6 class="text-maroon fw-bold mb-1">
                        Product Name
                    </h6>
                    <p class="cart-item-desc mb-1">
                        Short product description goes here
                    </p>
                    <p class="mb-1">
                        <strong>Quantity:</strong> 2
                    </p>
                    <p class="mb-0">
                        <strong>Payment:</strong> Cash on Delivery
                    </p>
                </div>

                <!-- STATUS -->
                <div class="col-md-2 text-center">
                    <span class="badge bg-golden text-dark px-3 py-2">
                        Processing
                    </span>
                </div>

                <!-- PRICE -->
                <div class="col-md-2 text-end">
                    <h6 class="text-maroon fw-bold">
                        ₹300/-
                    </h6>
                    <small class="text-muted">
                        Ordered on<br>12 Jan 2026
                    </small>
                </div>

            </div>
        </div>

        <!-- ORDER CARD -->
        <div class="card p-4 mb-4" style="border-radius:16px;">
            <div class="row align-items-center">

                <div class="col-md-3">
                    <div class="cart-item-img">
                        <img src="./img/straberry.jpg" alt="Product">
                    </div>
                </div>

                <div class="col-md-5">
                    <h6 class="text-maroon fw-bold mb-1">
                        Another Product
                    </h6>
                    <p class="cart-item-desc mb-1">
                        Product description
                    </p>
                    <p class="mb-1">
                        <strong>Quantity:</strong> 1
                    </p>
                    <p class="mb-0">
                        <strong>Payment:</strong> Online
                    </p>
                </div>

                <div class="col-md-2 text-center">
                    <span class="badge bg-success px-3 py-2">
                        Delivered
                    </span>
                </div>

                <div class="col-md-2 text-end">
                    <h6 class="text-maroon fw-bold">
                        ₹150/-
                    </h6>
                    <small class="text-muted">
                        Ordered on<br>05 Jan 2026
                    </small>
                </div>

            </div>
        </div>

    </div>
</div>


 <!-- main end -->
<?php
include('./includes/footer.php');
?>