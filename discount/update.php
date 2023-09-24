<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";
$name = "";
$desc = "";
$despre = "";
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectone = " SELECT * FROM `discount` WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $desc = $row['des'];
    $despre = $row['desper'];

    if (isset($_POST['send'])) {
        $name = $_POST['name'];
        $desc = $_POST['desc'];
        $despre = $_POST['despre'];
        $update = "UPDATE `discount` SET `name`='$name',`des`='$desc',`desper`='$despre 'WHERE id = $id ";
        $u = mysqli_query($conn, $update);
        go("/discount/list.php");

    }
}
auth(0);
?>


<div class="col-lg-6 m-auto">
    <div class="card m-6">
        <div class="card-header">
            <div class="brand-text brand-big"><strong class="text-primary">update
                </strong><strong>" "discount</strong>
            </div>
        </div>
        <div class="card-body pt-0">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">desname</label>
                    <input class="form-control" value="<?php echo $name ?>" name="name" id="exampleInputEmail1"
                        type="text" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">descreptipn</label>
                    <input class="form-control" name="desc" value="<?php echo $desc ?>" id="exampleInputEmail1"
                        type="text" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">despre</label>
                    <input class="form-control" id="exampleInputPassword1" value="<?php echo $despre ?>" name="despre"
                        type="text">
                </div>

                <button class="btn btn-primary" name="send" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php


include "../shaerd/adds.php";
?>