<?php ?>

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
  <?php include("components/header.php") ?>

  <!-- Navigation bar -->
  <!-- <?php include("components/nav.php") ?> -->

  <div class="container mt-5">
    <div class="row">
      <!-- Left side bar -->
      <div class="col-sm-4">
        <h2>Recent doners</h2>

        <?php
        include("db/config.php");

        $sql = "SELECT * FROM donners WHERE active = 1 AND deleted = 0 ORDER BY id DESC LIMIT 10";
        $result = mysqli_query($con, $sql);
        while ($row = mysqli_fetch_assoc($result)) {

          $image_path = "images/" . $row['image'];


          if ($row['image'] == '') {
            $image_path = "images/default.png";
          }


          ?>
          <div class="d-flex">
            <img style="height: 70px; width: 70px; border-radius: 50%" src="<?= $image_path ?>" />
            <div class="ms-2">
              <p><?= $row['name'] ?><br />Blood Group: <?= $row['blood_group'] ?><br />City:
                <?= $row['city'] ?>
              </p>

            </div>
          </div>


          <?php
        }
        mysqli_close($con);
        ?>
      </div>

      <!-- Centent -->
      <div class="col-sm-4">
        <h2>Search doners</h2>
        <form action="model/search-donner.php" method="POST">
          <div class="form-group me-2">
            <label for="blood_group">Blood Group</label>
            <select class="form-control" name="blood_group">
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select>
          </div>
          <div class="form-group mt-2">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter city" />
          </div>
          <button type="submit" class="mt-2 btn btn-primary align-self-end">
            Search
          </button>
        </form>

        <br />

      </div>

      <!-- Right side bar -->
      <div class="col-sm-4">
        <h2>Be a doner</h2>
        <form action="model/create-donner.php" method="POST" enctype="multipart/form-data">
          <div class="form-group mt-2">
            <label for="name">Name</label>
            <input name="name" type="text" class="form-control" placeholder="Enter your name" />
          </div>

          <div class="form-group mt-2">
            <label for="blood_group">Blood Group</label>
            <select class="form-control" name="blood_group">
              <option>A+</option>
              <option>A-</option>
              <option>B+</option>
              <option>B-</option>
              <option>AB+</option>
              <option>AB-</option>
              <option>O+</option>
              <option>O-</option>
            </select>
          </div>

          <div class="form-group mt-2">
            <label for="age">Age</label>
            <input type="number" class="form-control" name="age" placeholder="Enter your age" />
          </div>

          <div class="form-group mt-2">
            <label for="city">City</label>
            <input type="text" class="form-control" name="city" placeholder="Enter city" />
          </div>

          <div class="form-group mt-2">
            <label for="phone">Phone</label>
            <input type="text" class="form-control" name="phone" placeholder="Enter phone number" />
          </div>
          <div class="form-group mt-2">
            <label for="image">Profile picture</label>
            <input type="file" class="form-control" name="image" accept="image/*" />
          </div>

          <button type="submit" class="btn btn-primary mt-2">Submit</button>
        </form>
      </div>
    </div>
  </div>

  <!-- Footer -->
  <?php include("components/footer.php") ?>
</body>

</html>