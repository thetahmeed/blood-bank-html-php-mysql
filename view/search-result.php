<?php
$bloog_group = $_GET['blood_group'];
$city = $_GET['city'];
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
    <!-- <?php include("../components/nav.php") ?> -->

    <div class="container mt-5">
        <div class="row">
            <!-- Left side bar -->
            <div class="col-sm-4">

            </div>

            <!-- Centent -->
            <div class="col-sm-4">
                <h2>Results</h2>
                <?php
                include("../db/config.php");
                $sql = "SELECT * FROM donners WHERE blood_group = '$bloog_group' AND city = '$city' AND active = 1 AND deleted = 0";

                $result = mysqli_query($con, $sql);

                $num_of_rows = mysqli_num_rows($result);

                if ($num_of_rows == 0) {
                    echo "<p>No results found!</p>";
                } else if ($num_of_rows == 1) {

                    echo "<p>$num_of_rows result found</p><br>";
                } else {
                    echo "<p>$num_of_rows results found</p><br>";
                }

                while ($row = mysqli_fetch_assoc($result)) {
                    $image_path = "../images/" . $row['image'];

                    if ($row['image'] == '') {
                        $image_path = "../images/default.png";
                    }

                    ?>
                    <div class="d-flex">
                        <img style="height: 70px; width: 70px; border-radius: 50%" src="<?php echo $image_path ?>" />
                        <div class="ms-2">
                            <p><?php echo $row['name'] ?><br />Blood Group: <?php echo $row['blood_group'] ?><br />City:
                                <?php echo $row['city'] ?>
                            </p>

                        </div>

                        <button type="submit" class="m-5 mt-2 btn btn-primary align-self-end"
                            onclick="window.location.href='tel:<?= $row['phone'] ?>'">
                            Call
                        </button>
                    </div>
                    <?php
                }
                mysqli_close($con);
                ?>

            </div>

            <!-- Right side bar -->
            <div class="col-sm-4">

            </div>
        </div>
    </div>

    <!-- Footer -->
    <?php include("../components/footer.php") ?>
</body>

</html>