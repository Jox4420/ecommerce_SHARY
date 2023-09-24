<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";
if (isset($_GET['show'])) {
    $id = $_GET['show'];
    $selectone = "SELECT * FROM `proudect` JOIN discount ON proudect.discountid=discount.disid  WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);
}

// }
?>

<div class="page-holder bg-light">
    <!-- navbar-->

    <!--  Modal -->
    <div class="modal fade" id="productView" tabindex="-1">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content overflow-hidden border-0">
                <button class="btn-close p-4 position-absolute top-0 end-0 z-index-20 shadow-0" type="button"
                    data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body p-0">
                    <div class="row align-items-stretch">
                        <div class="col-lg-6 p-lg-0"><a class="glightbox product-view d-block h-100 bg-cover bg-center"
                                style="background: url(img/product-5.jpg)" href="img/product-5.jpg"
                                data-gallery="gallery1" data-glightbox="Red digital smartwatch"></a><a
                                class="glightbox d-none" href="img/product-5-alt-1.jpg" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a><a class="glightbox d-none"
                                href="img/product-5-alt-2.jpg" data-gallery="gallery1"
                                data-glightbox="Red digital smartwatch"></a></div>
                        <div class="col-lg-6">
                            <div class="p-4 my-md-4">
                                <ul class="list-inline mb-2">
                                    <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                    <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i>
                                    </li>
                                </ul>
                                ---- <h2 class="h4">
                                    <?php echo $row['proname'] ?>
                                </h2>
                                <p class="text-muted">$250</p>
                                <p class="text-sm mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In
                                    ut ullamcorper leo, eget euismod orci. Cum sociis natoque penatibus et magnis
                                    dis parturient montes nascetur ridiculus mus. Vestibulum ultricies aliquam
                                    convallis.</p>
                                <div class="row align-items-stretch mb-4 gx-0">
                                    <div class="col-sm-7">
                                        <div class="border d-flex align-items-center justify-content-between py-1 px-3">
                                            <span class="small text-uppercase text-gray mr-4 no-select">Quantity</span>
                                            <div class="quantity">
                                                <button class="dec-btn p-0"><i class="fas fa-caret-left"></i></button>
                                                <input class="form-control border-0 shadow-0 p-0" type="text" value="1">
                                                <button class="inc-btn p-0"><i class="fas fa-caret-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5"><a
                                            class="btn btn-dark btn-sm w-100 h-100 d-flex align-items-center justify-content-center px-0"
                                            href="cart.html">Add to cart</a></div>
                                </div><a class="btn btn-link text-dark text-decoration-none p-0" href="#!"><i
                                        class="far fa-heart me-2"></i>Add to wish list</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="py-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6">
                    <!-- PRODUCT SLIDER-->
                    <div class="row m-sm-0">
                        <div class="col-sm-2 p-sm-0 order-2 order-sm-1 mt-2 mt-sm-0 px-xl-2">
                            <div class="swiper product-slider-thumbs">

                            </div>
                        </div>
                        <div class="col-sm-10 order-1 order-sm-2">
                            <div class="swiper product-slider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide h-auto"><a class="glightbox product-view"
                                            href="<?php echo $row['img'] ?>" data-gallery="gallery2"
                                            data-glightbox="Product item 1"><img class="img-fluid"
                                                src="/shop/prodects/upload/<?php echo $row['img'] ?>" alt="..."></a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- PRODUCT DETAILS-->
                <div class="col-lg-6">
                    <ul class="list-inline mb-2 text-sm">
                        <li class="list-inline-item m-0"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 1"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 2"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 3"><i class="fas fa-star small text-warning"></i></li>
                        <li class="list-inline-item m-0 4"><i class="fas fa-star small text-warning"></i></li>
                    </ul>
                    <h1>
                        <?php echo $row['proname'] ?>
                    </h1>
                    <p class="text-muted lead">
                        <?php echo $row['price'] ?>
                    </p>
                    <p class="text-sm mb-4">
                        <?php echo $row['dis'] ?>
                    </p>
                    <div class="row align-items-stretch mb-4">
                        <div class="col-sm-5 pr-sm-0">

                        </div>
                        <div class="col-sm-3 pl-sm-0"><a
                                class="btn btn-dark btn-sm btn-block h-100 d-flex align-items-center justify-content-center px-0"
                                href="cart.html">Add to cart</a></div>
                    </div><a class="text-dark p-0 mb-4 d-inline-block" href="#!"><i class="far fa-heart me-2"></i>Add to
                        wish list</a><br>
                    <ul class="list-unstyled small d-inline-block">

                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                class="text-uppercase text-dark">Category:</strong><a class="reset-anchor ms-2"
                                href="#!">
                                <?php echo $row['category'] ?>
                            </a></li>
                        <li class="px-3 py-2 mb-1 bg-white text-muted"><strong
                                class="text-uppercase text-dark">Tags:</strong><a class="reset-anchor ms-2"
                                href="#!">Innovation</a></li>
                    </ul>
                </div>
            </div>


            <!-- JavaScript files-->
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
            <script src="vendor/glightbox/js/glightbox.min.js"></script>
            <script src="vendor/nouislider/nouislider.min.js"></script>
            <script src="vendor/swiper/swiper-bundle.min.js"></script>
            <script src="vendor/choices.js/public/assets/scripts/choices.min.js"></script>
            <script src="js/front.js"></script>
            <script>
                // ------------------------------------------------------- //
                //   Inject SVG Sprite - 
                //   see more here 
                //   https://css-tricks.com/ajaxing-svg-sprite/
                // ------------------------------------------------------ //
                function injectSvgSprite(path) {

                    var ajax = new XMLHttpRequest();
                    ajax.open("GET", path, true);
                    ajax.send();
                    ajax.onload = function (e) {
                        var div = document.createElement("div");
                        div.className = 'd-none';
                        div.innerHTML = ajax.responseText;
                        document.body.insertBefore(div, document.body.childNodes[0]);
                    }
                }
                // this is set to BootstrapTemple website as you cannot 
                // inject local SVG sprite (using only 'icons/orion-svg-sprite.svg' path)
                // while using file:// protocol
                // pls don't forget to change to your domain :)
                injectSvgSprite('https://bootstraptemple.com/files/icons/orion-svg-sprite.svg');
            </script>
            <!-- FontAwesome CSS - loading as last, so it doesn't block rendering-->
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
                integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
                crossorigin="anonymous">
        </div>
        </body>

        </html>

        <?php include "../shaerd/adds.php"; ?>