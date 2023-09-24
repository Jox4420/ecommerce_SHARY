<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";


if (isset($_POST['send'])) {
    $name = $_POST['proname'];
    $discreption = $_POST['dis'];

    $price = $_POST['price'];
    $category = $_POST['category'];
    $disid = $_POST['disid'];


    $img_name = $_FILES['imge']['name'];
    $img_temp = $_FILES['imge']['tmp_name'];
    $locahion = "./upload/$img_name";
    $move = move_uploaded_file($img_temp, $locahion);
    $insert = "INSERT INTO `proudect`VALUES (Null,'$name','$discreption','$price','$category','$img_name',default,default,'$disid')";
    $i = mysqli_query($conn, $insert);

}
$SELECT = "SELECT * FROM `discount`";
$s = mysqli_query($conn, $SELECT);
auth(1);
;
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
                </strong><strong>" "proudect</strong>
            </div>
        </div>
        <div class="card-body pt-0">

            <form method="post" enctype="multipart/form-data">
                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input class="form-control" name="proname" id="exampleInputEmail1" type="text"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input class="form-control" name="price" id="exampleInputEmail1" type="text"
                        aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">discreption</label>
                    <textarea class="form-control" id="exampleInputPassword1" name="dis" type="text"></textarea>
                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">category</label>
                    <select class="form-control" name="category" id="">
                        <option value="mobile">mobile</option>
                        <option value="Tablet">Tablet</option>
                        <option value="laptop">laptop</option>
                        <option value="Whatches">Whatches</option>
                    </select>
                    <div class="mb-3">

                        <label class="form-label" for="exampleInputPassword1">discount</label>


                        <select class="form-control" name="disid" id="">
                            <?php foreach ($s as $data) { ?>
                            <option value="<?php echo $data['disid'] ?>">
                                <?php echo $data['name'] ?>
                            </option>
                            <?php } ?>
                        </select>


                    </div>
                    <div class="mb-3">
                        <label class="form-label">imge</label>
                        <input class="form-control" name="imge" id="exampleInputEmail1" type="file"
                            aria-describedby="emailHelp">

                    </div>
                    <button class="btn btn-primary" name="send" type="submit">Submit</button>
            </form>
        </div>
    </div>
</div>

<?php
include "../shaerd/adds.php";
?>