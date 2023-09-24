<?php



if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();
    usergo("/sign/login.php");
}

?>
<div class="page-holder">
    <!-- navbar-->

    <header class="header bg-white">
        <div class="container px-lg-3">
            <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand"
                    href="index.html"><span class="fw-bold text-uppercase text-dark">Shary!?</span></a>
                <button class="navbar-toggler navbar-toggler-end" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto">
                        <li class="nav-item">
                            <!-- Link--><a class="nav-link active" href="/shop/userpanal/">Home</a>
                        </li>
                        <li class="nav-item">
                            <!-- Link--><a class="nav-link" href="/shop/userpanal/shop.php">Shop</a>
                        </li>

                    </ul>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link" href="cart.html"> <i
                                    class="fas fa-dolly-flatbed me-1 text-gray"></i>Cart<small
                                    class="text-gray fw-normal">(2)</small></a></li>
                        <li class="nav-item"><a class="nav-link" href="#!"> <i class="far fa-heart me-1"></i><small
                                    class="text-gray fw-normal"> (0)</small></a></li>
                        <?php
                        if (isset($_SESSION['email']) && $_SESSION['email'] !== "") {
                            echo '<form method="GET">
    <input type="submit" name="logout" value="signout" class="btn btn-primary" id="logout">
    <a class="nav-link" href="/shop/userpanal/sign/login.php" ">';

                        } else {
                            echo '<li class="nav-item"><a class="nav-link" href="/shop/userpanal/sign/login.php"> <i class="fas fa-user me-1 text-gray fw-normal"></i>login</a></li>';
                        }
                        ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>