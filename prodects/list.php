<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";
$SELECT = "SELECT * FROM `proudect` JOIN discount ON proudect.discountid=discount.disid";
$s = mysqli_query($conn, $SELECT);

//================================================================
?>



<div class="col-lg-10">
    <div class="card mb-0">
        <div class="card-header">
            <h3 class="h4 mb-0">Striped table with hover effect</h3>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table mb-0 table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Price</th>
                            <th>category</th>
                            <th>date</th>
                            <th>date_updated</th>
                            <th>discount</th>
                            <th>imge</th>
                            <th>Acthion</th>



                        </tr>
                        <?php foreach ($s as $data) { ?>

                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    <?php echo $data['id'] ?>
                                </td>
                                <td>
                                    <?php echo $data['proname'] ?>
                                </td>
                                <td>
                                    <?php echo $data['price'] ?>
                                </td>

                                <td>
                                    <?php echo $data['category'] ?>
                                </td>
                                <td>
                                    <?php echo $data['add_date'] ?>
                                </td>
                                <td>
                                    <?php echo $data['date_update'] ?>
                                </td>
                                <td>
                                    <?php echo $data['name'] ?>
                                </td>



                                <td>
                                    <img class="avatar shadow-0 rounded-circle"
                                        src="/shop/prodects/upload/<?= $data['img'] ?>">
                                    <div class="ms-3 title">
                                </td>
                                <th scope="col">
                                    <a href="delet.php?delet=<?php echo $data['id'] ?>" class="btn btn-danger"><i
                                            class='bx bxs-message-square-x'></i></a>
                                </th>
                                <th scope="col">
                                    <a href="update.php?edit=<?php echo $data['id'] ?>" class="btn btn-info"><i
                                            class='bx bxs-edit'></i>
                                </th>
                                <th scope="col">
                                    <a href="show.php?show=<?php echo $data['id'] ?>" class="btn btn-primary"><i
                                            class='bx bx-show-alt'></i></a>
                                </th>
                            </tr>


                        </tbody>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
</div>







<?php
include "../shaerd/adds.php";
?>