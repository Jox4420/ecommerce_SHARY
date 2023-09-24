<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";

$SELECT = "SELECT * FROM `discount`";
$s = mysqli_query($conn, $SELECT);

//================================================================



?>




<div class="col-lg-10">
    <div class="card mb-0">
        <div class="card-header">
            <div class="brand-text brand-big"><strong class="text-primary">List
                </strong><strong>" "Discount</strong>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table mb-0 table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>discrepthion</th>
                            <th>dispresntge</th>

                            <th>created_at</th>
                            <th>updated_at</th>

                            <th>Acthion</th>

                        </tr>
                        <?php foreach ($s as $data) { ?>

                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    <?php echo $data['disid'] ?>
                                </td>
                                <td>
                                    <?php echo $data['name'] ?>
                                </td>
                                <td>
                                    <?php echo $data['des'] ?>
                                </td>
                                <td>
                                    <?php echo $data['desper'] ?>
                                </td>
                                <td>
                                    <?php echo $data['created_at'] ?>
                                </td>
                                <td>
                                    <?php echo $data['updated_at'] ?>
                                </td>


                                <th scope="col">
                                    <a href="delet.php?delet=<?php echo $data['disid'] ?>" class="btn btn-danger"><i
                                            class='bx bxs-message-square-x'></i></a>
                                </th>
                                <th scope="col">
                                    <a href="update.php?edit=<?php echo $data['disid'] ?>" class="btn btn-info"><i
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