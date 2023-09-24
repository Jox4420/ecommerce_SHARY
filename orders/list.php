<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";

$SELECT = "SELECT * FROM `order_item` JOIN proudect ON order_item.proudect_id=proudect.id JOIN users ON order_item.userid=users.id;";
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
                            <th>createdat</th>
                            <th>updatet</th>
                            <th>userName</th>
                            <th>email</th>
                            <th>proudectName</th>
                            <th>price</th>
                            <th>category</th>
                            <th>countery</th>
                            <th>imge</th>
                            <th>Acthion</th>

                        </tr>
                        <?php foreach ($s as $data) { ?>

                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <?php echo $data['orderid'] ?>
                            </td>
                            <td>
                                <?php echo $data['crated_at'] ?>
                            </td>
                            <td>
                                <?php echo $data['updated_at'] ?>
                            </td>
                            <td>
                                <?php echo $data['username'] ?>
                            </td>
                            <td>
                                <?php echo $data['email'] ?>
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
                                <?php echo $data['countery'] ?>
                            </td>
                            <td>
                                <img class="avatar shadow-0 rounded-circle"
                                    src="/shop/prodects/upload/<?= $data['img'] ?>">
                                <div class="ms-3 title">
                            </td>

                            <th scope="col">
                                <a href="delet.php?delet=<?php echo $data['orderid'] ?>" class="btn btn-danger"><i
                                        class='bx bxs-message-square-x'></i></a>
                            </th>
                            <th scope="col">
                                <a href="update.php?edit=<?php echo $data['orderid'] ?>" class="btn btn-info"><i
                                        class='bx bxs-edit'></i>
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