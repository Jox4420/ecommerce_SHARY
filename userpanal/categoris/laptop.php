<?php
include "../saherd/head.php";
include "../saherd/nav.php";
include "../../genral/config.php";


$SELECT = "SELECT * FROM `proudect` JOIN discount ON proudect.discountid=discount.disid  WHERE category ='laptop'";
$s = mysqli_query($conn, $SELECT);

?>
<?php include "./body.php"; ?>