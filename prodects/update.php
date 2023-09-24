<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";
$name = "";
$discreption = "";
$price = "";
$category = "";


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $selectone = " SELECT * FROM `proudect` JOIN discount ON proudect.discountid=discount.disid WHERE id=$id";
    $ss = mysqli_query($conn, $selectone);
    $row = mysqli_fetch_assoc($ss);
    $name = $row['proname'];
    $price = $row['price'];
    $discreption = $row['dis'];
    $category = $row['category'];


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
        $update = "UPDATE `proudect` SET `proname`='$name',`dis`='$discreption',`price`='$price',`category`='$category',`img`='$img_name',`discountid`='$disid' WHERE id=$id ";
        $i = mysqli_query($conn, $update);

    }
}
auth(0);

?>


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
                    <input class="form-control" value="<?php echo $name ?>" name="proname" id="exampleInputEmail1"
                        type="text" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label">price</label>
                    <input class="form-control" name="price" value="<?php echo $price ?>" id="exampleInputEmail1"
                        type="text" aria-describedby="emailHelp">

                </div>
                <div class="mb-3">
                    <label class="form-label" for="exampleInputPassword1">discreption</label>
                    <input class="form-control" id="exampleInputPassword1" value="<?php echo $discreption ?>" name="dis"
                        type="text">
                    <div class="mb-3">
                        <label class="form-label" for="exampleInputPassword1">category</label>
                        <select class="form-control" value="<?php echo $category ?>" name="category" id="">
                            <option value="mobile">mobile</option>
                            <option value="Tablet">Tablet</option>
                            <option value="laptop">laptop</option>
                            <option value="Whatches">Whatches</option>
                        </select>
                        <div class="mb-3">

                            <label class="form-label" for="exampleInputPassword1">discount</label>


                            <select class="form-control" name="disid" id="">
                                <?php foreach ($ss as $data) { ?>
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

<?php include "../shaerd/adds.php"; ?>