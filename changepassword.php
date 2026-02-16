<?php
include('./includes/header.php');
?>
<?php
include('./includes/sidebar.php');
?>
<div class="col-10 h-100" style="overflow:auto;">

    <!-- Page Title -->
    <div class="page-title mb-4 text-maroon fs-3">Change Password</div>

    <div class="row justify-content-center">
        <div class="col-md-6 col-lg-5">

            <!-- CHANGE PASSWORD CARD -->
            <div class="card p-4">

                <!-- Icon & Heading -->
                <div class="text-center mb-4">
                    <div class="rounded-circle bg-maroon text-light d-inline-flex
                                align-items-center justify-content-center"
                         style="width:70px; height:70px; font-size:28px;">
                        <i class="fa fa-lock"></i>
                    </div>
                    <h5 class="mt-3 text-maroon fw-bold">Update Password</h5>
                    <small class="text-muted">
                        Keep your account secure
                    </small>
                </div>

                <!-- FORM -->
                <form action="change-passwordcode.php" method="post">

                    <!-- Old Password -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-maroon">
                            Old Password
                        </label>
                        <input type="password"
                               name="opassword"
                               class="form-control"
                               placeholder="Enter old password"
                               required>
                    </div>

                    <!-- New Password -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold text-maroon">
                            New Password
                        </label>
                        <input type="password"
                               name="password"
                               class="form-control"
                               placeholder="Enter new password"
                               required>
                    </div>

                    <!-- Confirm Password -->
                    <div class="mb-4">
                        <label class="form-label fw-semibold text-maroon">
                            Confirm Password
                        </label>
                        <input type="password"
                               name="cpassword"
                               class="form-control"
                               placeholder="Confirm new password"
                               required>
                    </div>

                    <!-- Button -->
                    <div class="d-grid">
                        <button type="submit"
                                name="submit"
                                value="submit"
                                class="btn btn-golden fw-semibold">
                            <i class="fa fa-save me-1"></i> Change Password
                        </button>
                    </div>

                </form>

            </div>

        </div>
    </div>

</div>
<?php
include('./includes/footer.php');
?>