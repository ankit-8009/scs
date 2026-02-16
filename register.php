<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>User Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body>

    <div class="user-reg">
        <div class="user-reg-card">

            <div class="text-center mb-4">
                <i class="fa-solid fa-user-plus"></i>
                <h4>User Registration</h4>
            </div>

            <form action="reg.php" method="post">
                <div class="mb-3">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                </div>

                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                  <div class="mb-3">
                    <input type="password" class="form-control" name="cpassword" placeholder="comfirm Password">
                </div>
                <button type="submit" name="submit" value="submit" class="btn bg-golden text-dark w-100 fw-semibold">
                    Register
                </button>

                <div class="text-center mt-3">
                    <small>Already have an account?</small>
                    <a href="index.php" class="text-golden fw-semibold text-decoration-none">
                        login here..
                    </a>
                </div>

            </form>
        </div>
    </div>

</body>

</html>