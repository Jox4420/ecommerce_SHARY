<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $desc = $_POST['desc'];
    $despre = $_POST['despre'];

    $insert = "INSERT INTO `discount`(`disid`, `name`, `des`, `desper`) VALUES (null,'$name',' $desc ',' $despre')";
    $i = mysqli_query($conn, $insert);


}
auth(0);
?>
<script>
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
</script>
<div class="col-lg-6 m-auto">
    <div class="card m-6">
        <div class="card-header">
            <div class="brand-text brand-big"><strong class="text-primary">Add
                </strong><strong>" "Admin</strong>
            </div>
        </div>
        <div class="card-body pt-0">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">desname</label>
                    <input class="form-control" name="name" id="exampleInputEmail1" type="text"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">descreptipn</label>
                    <input class="form-control" name="desc" id="exampleInputEmail1" type="text"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">despre</label>
                    <input class="form-control" id="exampleInputPassword1" name="despre" type="text">
                </div>

                <button class="btn btn-primary" name="send" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php


include "../shaerd/adds.php";
?>