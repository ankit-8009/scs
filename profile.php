<?php
include('./includes/header.php');
?>
<?php
include('./includes/sidebar.php');
?>
<?php
$email=$_SESSION['user'];
include('db.php');
$query="select *from tbl_user where email='$email'";
$res=mysqli_query($con,$query);
$row=mysqli_fetch_array($res);
?>
<!-- main start -->
 <div class="col-10 h-100" style="overflow:auto;">
    <div class="container-fluid p-4">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card profile-main-card p-4">

                    <!-- HEADER -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="profile-img-wrap">
                            <img src="<?php echo $row['file']?>" class="profile-img-circle">
                        </div>
                        <div class="ms-4">
                            <h4 class="text-maroon fw-bold mb-1">My Profile</h4>
                            <small class="text-muted">Manage your personal information</small>
                        </div>
                    </div>

                    <form method="post" enctype="multipart/form-data" action="profilecode.php">

                        <div class="row g-3">

                            <div class="col-md-6">
                                <label class="form-label">Full Name</label>
                                <input type="text" class="form-control" name="name">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Email Address</label>
                                <input type="email" class="form-control" name="email" value="<?php echo $row['email'];?>">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Mobile Number</label>
                                <input type="text" class="form-control" name="number">
                            </div>

                            <div class="col-md-6">
                                <label class="form-label">Gender</label>
                                <select class="form-control" name="gender">
                                    <option value="">Select Gender</option>
                                    <option>Male</option>
                                    <option>Female</option>
                                    <option>Other</option>
                                </select>
                            </div>

                            <div class="col-md-12">
                                <label class="form-label">Profile Picture</label>
                                <input type="file" class="form-control" name="file">
                            </div>

                        </div>

                        <div class="mt-4 text-end">
                            <button type="submit" name="submit" value="submit"class="btn btn-golden px-4">
                                <i class="fa fa-save me-1"></i> Update Profile
                            </button>
                        </div>

                    </form>

                </div>

            </div>
        </div>

    </div>
</div>

 <!-- main end -->
<?php
include('./includes/footer.php');
?>