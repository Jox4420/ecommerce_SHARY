<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";


if (isset($_POST['send'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $title = $_POST['title'];
    $role = $_POST['role'];
    $img_name = $_FILES['imge']['name'];
    $img_temp = $_FILES['imge']['tmp_name'];
    $locahion = "./upload/$img_name";
    $move = move_uploaded_file($img_temp, $locahion);
    $insert = "INSERT INTO `admin`VALUES (NULL,'$name','$email','$password','$img_name','$title',$role)";
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
                    <label class="form-label">User name</label>
                    <input class="form-control" name="name" id="exampleInputEmail1" type="text"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input class="form-control" name="email" id="exampleInputEmail1" type="email"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="exampleInputPassword1" name="password" type="password">
                </div>
                <div class="mb-3">
                    <label class="form-label">Title</label>
                    <input class="form-control" id="exampleInputEmail1" name="title" type="text"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">imge</label>
                    <input class="form-control" name="imge" id="exampleInputEmail1" type="file"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">ROLE</label>
                    <select class="form-control" id="exampleInputEmail1" name="role">
                        <option value="0">ALL accses</option>
                        <option value="1">ALL accses with out admin</option>
                        <option value="2">ALL accses with out admin and item</option>

                    </select>
                    <button class="btn btn-primary" name="send" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php


include "../shaerd/adds.php";
?>