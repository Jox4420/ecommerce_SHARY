<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";

if (isset($_GET['delet'])) {
    $id = $_GET['delet'];
    if ($_SESSION['role'] == 0) {
        $delet = " DELETE FROM `admin` WHERE id = $id ";
        $d = mysqli_query($conn, $delet);
        go("/admin/list.php");
    } else {
        go("/pages-error-404.php");
    }
}


?>