<?php
include "../shaerd/addh.php";
include "../shaerd/nav.php";
include "../shaerd/aside.php";
include "../genral/config.php";
include "../genral/functhion.php";

$SELECT = "SELECT * FROM `users` ";
$s = mysqli_query($conn, $SELECT);

//================================================================



?>




<div class="col-lg-10">
    <div class="card mb-0">
        <div class="card-header">
            <div class="brand-text brand-big"><strong class="text-primary">list
                </strong><strong>" "Users</strong>
            </div>
        </div>
        <div class="card-body pt-0">
            <div class="table-responsive">
                <table class="table mb-0 table-striped table-hover">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>countery</th>
                            <th>phone</th>
                            <th>Img</th>
                            <th class="text-center">Acthion</th>

                        </tr>
                        <?php foreach ($s as $data) { ?>

                        </thead>
                        <tbody>
                            <tr>

                                <td>
                                    <?php echo $data['id'] ?>
                                </td>
                                <td>
                                    <?php echo $data['username'] ?>
                                </td>
                                <td>
                                    <?php echo $data['name'] ?>
                                </td>
                                <td>
                                    <?php echo $data['email'] ?>
                                </td>
                                <td>
                                    <?php echo $data['password'] ?>
                                </td>
                                <td>
                                    <?php echo $data['countery'] ?>
                                </td>
                                <td>
                                    <?php echo $data['phone'] ?>
                                </td>
                                <td>
                                    <img class="avatar shadow-0 rounded-circle"
                                        src="/shop/admin/upload/<?= $data['userimg'] ?>">
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