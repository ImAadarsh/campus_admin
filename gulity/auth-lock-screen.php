<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Lock Screen | Campus Coach - Shape Your Future with Confidence</title>
<?php include 'includes/head.php'; ?>
</head>

<body class="h-100">
    <div class="auth-bg d-flex min-vh-100 justify-content-center align-items-center">
        <div class="row g-0 justify-content-center w-100 m-xxl-5 px-xxl-4 m-3">
            <div class="col-xl-4 col-lg-5 col-md-6">
                <div class="card overflow-hidden text-center h-100 p-xxl-4 p-3 mb-0">
                    <a href="index.php" class="auth-brand mb-3">
                        <img src="assets/images/logo-dark.png" alt="dark logo" height="24" class="logo-dark">
                        <img src="assets/images/logo.png" alt="logo light" height="24" class="logo-light">
                    </a>

                    <div class="d-flex align-items-center gap-2 mb-4 text-start">
                        <img src="assets/images/users/avatar-1.jpg" alt="" class="avatar-xl rounded-circle img-thumbnail">
                        <div>
                            <h4 class="fw-semibold text-dark">Hi ! Dhanoo K.</h4>
                            <p class="mb-0">Please input your password to access the screen. </p>
                        </div>
                    </div>
                    
                    <form action="index.php" class="text-start mb-3">
                        <div class="mb-3">
                            <label class="form-label" for="lock-password">Enter Password</label>
                            <input type="password" id="lock-password" name="lock-password" class="form-control" placeholder="Password">
                        </div>
                        <div class="mb-2 d-grid">
                            <button class="btn btn-primary" type="submit">Access to Screen</button>
                        </div>
                    </form>
                    <p class="text-danger fs-14 mb-4">Back to <a href="auth-login.php" class="fw-semibold text-dark ms-1">Login !</a></p>

                    <p class="mt-auto mb-0">
                        <script>document.write(new Date().getFullYear())</script> © Campus Coach - By <span class="fw-bold text-decoration-underline text-uppercase text-reset fs-12">Endeavour Digital</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Vendor js -->
    <script src="assets/js/vendor.min.js"></script>

    <!-- App js -->
    <script src="assets/js/app.js"></script>

</body>

</html>