<?php
include "./shaerd/head.php";
include "./genral/config.php";



// ====================se============================================
$error = "";

if (isset($_POST['login'])) {
    $Email = $_POST['Email'];
    $password = $_POST['password'];
    $select = "SELECT * FROM `admin` WHERE `email`='$Email' and `password`='$password'";
    $s = mysqli_query($conn, $select);
    $numrow = mysqli_num_rows($s);
    $row = mysqli_fetch_assoc($s);

    if ($numrow > 0) {
        echo " <script>
window.location.replace('/shop/')
</script>";
        $_SESSION['email'] = $Email;
        $_SESSION['name'] = $row['name'];
        $_SESSION['img'] = $row['img'];
        $_SESSION['title'] = $row['title'];
        $_SESSION['role'] = $row['role'];


    } else {
        $error = "please inter correct data";

    }
}





?>

<div class="container">

    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                    <div class="d-flex justify-content-center py-4">
                        <a href="index.html" class="logo d-flex align-items-center w-auto">
                            <img src="assets/img/logo.png" alt="">
                            <span class="d-none d-lg-block">Lawyer</span>
                        </a>
                    </div><!-- End Logo -->

                    <div class="card mb-3">

                        <div class="card-body">

                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                <p class="text-center small">Enter your username & password to login</p>
                            </div>

                            <form method="POST" class="row g-3 needs-validation" novalidate>

                                <div class="col-12">
                                    <label for="yourUsername" class="form-label">Email</label>
                                    <div class="input-group has-validation">
                                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                                        <input type="email" name="Email" value="" class="form-control" id="yourUsername"
                                            required>

                                        <div class="invalid-feedback">Please enter your Email.</div>
                                    </div>
                                    <div class="text-danger">
                                        <?= $error ?>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword"
                                        required>
                                    <div class="text-danger">
                                        <?= $error ?>
                                    </div>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" value="true"
                                            id="rememberMe">
                                        <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" name="login" type="submit">Login</button>
                                </div>

                            </form>

                        </div>
                    </div>

                    <div class="credits">

                        Designed by <a href="">Yousef Omar</a>
                    </div>

                </div>
            </div>
        </div>

    </section>