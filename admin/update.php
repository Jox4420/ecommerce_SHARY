<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";
$name = "";
$password = "";
$email = "";
$img = "";
$title = "";

if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectone = " SELECT * FROM `admin` WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['name'];
    $password = $row['password'];
    $email = $row['email'];
    $img = $row['img'];
    $title = $row['title'];
    if (isset($_POST['edit'])) {
        $name = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $img_name = $_FILES['imge']['name'];
        $img_temp = $_FILES['imge']['tmp_name'];
        $locahion = "./upload/$img_name";

        $move = move_uploaded_file($img_temp, $locahion);


        $title = $_POST['title'];
        $update = "UPDATE `admin` SET `name`='$name',`email`='$email',`password`='$password',`img`='$img_name',`title`='$title' WHERE id=$id";
        $u = mysqli_query($conn, $update);
        go("/admin/list.php");

    }
}
auth(0);
?>


<div class="col-lg-10 m-auto">
    <div class="card m-5">
        <div class="card-header">
            <div class="brand-text brand-big"><strong class="text-primary">Edit
                </strong><strong>" "Admin</strong>
            </div>
        </div>
        <div class="card-body pt-0">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">User name</label>
                    <input class="form-control" value="<?php echo $name ?>" name="name" id="exampleInputEmail1"
                        type="text" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input class="form-control" value="<?php echo $email ?>" name="email" id="exampleInputEmail1"
                        type="email" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input class="form-control" value="<?php echo $password ?>" id="exampleInputPassword1"
                        name="password" type="text">
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input class="form-control" id="exampleInputEmail1" value="<?php echo $title ?> " name=" title"
                        type="text" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">imge</label>
                    <input class="form-control" name="imge" id="exampleInputEmail1" type="file"
                        aria-describedby="emailHelp" /><span>
                        <?php echo $img ?>
                    </span>


                </div>
                <button class="btn btn-primary" name="edit" type="submit">Edit</button>
            </form>
        </div>
    </div>
</div>
<?php include "../shaerd/adds.php"; ?>