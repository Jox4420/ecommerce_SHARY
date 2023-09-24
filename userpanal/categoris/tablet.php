<?php
include "../saherd/head.php";
include "../saherd/nav.php";
include "../../genral/config.php";


$SELECT = "SELECT * FROM `proudect` JOIN discount ON proudect.discountid=discount.disid  WHERE category ='tablet'";
$s = mysqli_query($conn, $SELECT);
include "./body.php";
?>
<?php include "../../genral/config.php"; ?>