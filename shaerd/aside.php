<nav id="sidebar">
    <!-- Sidebar Header-->
    <div class="sidebar-header d-flex align-items-center p-4"><img class="avatar shadow-0 img-fluid rounded-circle"
            src="/shop/admin/upload/<?= $_SESSION['img'] ?>">
        <div class="ms-3 title">
            <h1 class="h5 mb-1">
                <?= $_SESSION['name'] ?>
            </h1>
            <h1 class="text-sm text-gray-700 mb-0 lh-1">
                <?= $_SESSION['title'] ?>
            </h1>


        </div>
    </div><span class="text-uppercase text-gray-600 text-xs mx-3 px-2 heading mb-2">Main</span>
    <ul class="list-unstyled">
        <li class="sidebar-item active"><a class="sidebar-link" href="/shop/">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#real-estate-1"> </use>
                </svg><span>Home </span></a></li>

        <li class="sidebar-item"><a class="sidebar-link" href="#exampledropdownDropdown4" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"> </use>
                </svg><span>Admin</span></a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown4">
                <li><a class="sidebar-link" href="/shop/admin/add.php">add</a></li>
                <li><a class="sidebar-link" href="/shop/admin/list.php">list</a></li>

            </ul>
        </li>
        <li class="sidebar-item">
            <a class="sidebar-link" href="#exampledropdownDropdown1" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>
                <span>users</span>
            </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown1">
                <li><a class="sidebar-link" href="/shop/users/add.php">add</a></li>
                <li><a class="sidebar-link" href="/shop/users/list.php">list</a></li>
            </ul>
        </li>
        <li class="sidebar-item "><a class="sidebar-link" href="#exampledropdownDropdown3" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"> </use>
                </svg><span>Proudects </span></a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown3">
                <li><a class="sidebar-link" href="/shop/prodects/add.php">Add</a></li>
                <li><a class="sidebar-link" href="/shop/prodects/list.php">list</a></li>

            </ul>
        </li>
        <li class="sidebar-item "><a class="sidebar-link" href="#exampledropdownDropdown5" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"> </use>
                </svg><span>orderes </span></a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown5">

                <li><a class="sidebar-link" href="/shop/orders/list.php">list</a></li>

            </ul>
        </li>


        <li class="sidebar-item">
            <a class="sidebar-link" href="#exampledropdownDropdown2" data-bs-toggle="collapse">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#browser-window-1"> </use>
                </svg>
                <span>Discount</span>
            </a>
            <ul class="collapse list-unstyled " id="exampledropdownDropdown2">
                <li><a class="sidebar-link" href="/shop/discount/add.php">add</a></li>
                <li><a class="sidebar-link" href="/shop/discount/list.php">list</a></li>
            </ul>
        </li>
        <li class="sidebar-item"><a class="sidebar-link" href="/shop/login.php">
                <svg class="svg-icon svg-icon-sm svg-icon-heavy">
                    <use xlink:href="#disable-1"> </use>
                </svg><span>Login page </span></a></li>
    </ul>

</nav>