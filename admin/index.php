<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>CityU BloodBank</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Header -->
    <?php include("../components/search-header.php") ?>


    <!-- Navigation bar -->
    <?php include("../components/nav.php") ?>


    <div class="container mt-5">
        <div class="row">

            <!-- Left side bar -->
            <div class="col-sm-3">

            </div>

            <!-- Centent -->
            <div class="col-sm-6">
                <?php
                include("../db/config.php");

                if (isset($_SESSION['user'])) {
                    $sql = "SELECT * FROM donners WHERE active = 0 AND deleted = 0 ORDER BY id DESC LIMIT 10 ";
                    $result = mysqli_query($con, $sql);

                    if ($result->num_rows > 0) {
                        echo '<h3>Donner Request</h3>';
                        echo 'Found ' . $result->num_rows . ' Donner Request';
                        echo '<br>';
                    } else {
                        echo '<h3>No Donner Request!</h3>';
                    }

                    while ($row = mysqli_fetch_assoc($result)) {

                        $image_path = "../images/" . $row['image'];

                        if ($row['image'] == '') {
                            $image_path = "../images/default.png";
                        }
                        ?>



                        <div class="d-flex">
                            <img style="height: 70px; width: 70px; border-radius: 50%" src="<?= $image_path ?>" />
                            <div class="ms-2">
                                <p><?= $row['name'] ?><br />Blood Group: <?= $row['blood_group'] ?><br />City:
                                    <?= $row['city'] ?>
                                </p>

                            </div>

                            <button type="submit" class="m-3 mt-2 btn btn-primary align-self-end"
                                onclick="window.location.href='model/manage-donner-request.php?action=approve&id=<?= $row['id'] ?>'">
                                Approve
                            </button>
                            <button type="submit" class="m-3 mt-2 btn btn-danger align-self-end" onclick="
                            window.location.href='model/manage-donner-request.php?action=delete&id=<?= $row['id'] ?>'">
                                Delete
                            </button>

                        </div>


                        <?php
                    }
                } else {
                    include("../admin/components/log-in.php");
                }
                ?>
            </div>

            <!-- Right side bar -->
            <div class="col-sm-3">

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../components/footer.php") ?>

</body>

</html>