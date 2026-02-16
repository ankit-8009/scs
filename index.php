<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <title>User Login</title>
</head>
<body class="login-page">

<div class="d-flex justify-content-center align-items-center min-vh-100">
    <div class="card login-card shadow-lg border-5">
        
        <div class="text-center mb-4">
            <i class="fa-solid fa-user-shield login-icon"></i>
            <h4 class="mt-2 text-maroon fw-bold">User Login</h4>
        </div>

        <form action="userlogin.php" method="post">
            <div class="mb-3">
                <label class="form-label text-maroon">Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email">
            </div>

            <div class="mb-3">
                <label class="form-label text-maroon">Password</label>
                <input type="password" name="password" class="form-control" placeholder="Enter password">
            </div>

            <button type="submit" name="login" value="login" class="btn bg-golden text-dark w-100 fw-semibold">
                Login
            </button>
           <div class="text-center mt-3">
                    <small>no have an account?</small>
                    <a href="register.php" class="text-golden fw-semibold text-decoration-none">
                     register now..
                    </a>
                </div>
            <div class="text-center mt-3">
                <a href="#" class="text-golden text-decoration-none small">
                    Forgot password?
                </a>
            </div>
        </form>
    </div>
</div>

</body>
</html>
