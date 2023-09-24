<?php
function testmassgen($condation, $massge)
{

    if ($condation == true) {

        echo "true $massge";
    } else {
        echo "false $massge";
    }
}
function go($path)
{
    echo " <script>
window.location.replace('/shop/$path')
</script>";
}
function usergo($path)
{
    echo " <script>
window.location.replace('/shop/userpanal/$path')
</script>";
}
function secur()
{
    if (isset($_SESSION['email'])) {

    } else {
        go("/login.php");
    }
}

secur();
function auth($value)
{
    if ($_SESSION['role'] == 0 || $_SESSION['role'] == $value) {

    } else {
        go("/pages-error-404.php");
    }
}



?>