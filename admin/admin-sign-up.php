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
            <div class="col-sm-4">

            </div>

            <!-- Centent -->
            <div class="col-sm-4">
                <h2>Admin Sign Up</h2>
                <form action="../model/admin-sign-up.php" method="post">
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="name" name="name" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email" name="email" required>
                    </div>


                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>


                    <button type="submit" class="btn btn-primary">Sign up</button>

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