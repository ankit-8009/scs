<?php
include('./includes/header.php');
?>
<?php
include('./includes/sidebar.php');
?>
<!-- main start -->
 <div class="col-10 h-100" style="overflow:auto;">
   <div class="user-dashboard">

    <!-- WELCOME -->
    <div class="welcome-card">
        <div>
            <h3>Welcome Back 👋</h3>
            <p>Manage your orders, cart & profile from here</p>
        </div>
        <i class="fa-solid fa-user"></i>
    </div>

    <!-- STATS -->
    <div class="dashboard-stats">

        <div class="stat-card">
            <i class="fa-solid fa-cart-shopping"></i>
            <h5>My Orders</h5>
            <span>12</span>
        </div>

        <div class="stat-card">
            <i class="fa-solid fa-bag-shopping"></i>
            <h5>Cart Items</h5>
            <span>3</span>
        </div>

        <div class="stat-card">
            <i class="fa-solid fa-user-pen"></i>
            <h5>Profile</h5>
            <span>Edit</span>
        </div>

        <div class="stat-card">
            <i class="fa-solid fa-credit-card"></i>
            <h5>Payments</h5>
            <span>History</span>
        </div>

    </div>

    <!-- QUICK ACTIONS -->
    <div class="quick-actions">

        <h4>Quick Actions</h4>

        <div class="action-box">
            <div class="action-card">
                <i class="fa-solid fa-utensils"></i>
                <p>Browse Menu</p>
            </div>

            <div class="action-card">
                <i class="fa-solid fa-cart-plus"></i>
                <p>View Cart</p>
            </div>

            <div class="action-card">
                <i class="fa-solid fa-box"></i>
                <p>My Orders</p>
            </div>
        </div>

    </div>

</div>

</div>

 <!-- main end -->
<?php
include('./includes/footer.php');
?>