<?php
include('db/config.php'); // Don't need to '../' because this file is included in index.php
$sql = 'SELECT COUNT(*) FROM donners';

$result = mysqli_query($con, $sql);

while ($row = mysqli_fetch_assoc($result)) {
  $donners = $row['COUNT(*)'];
}

mysqli_close($con);
?>

<div class="p-3 bg-primary text-white text-center">
  <h1>City University - Blood Bank</h1>
  <p>
    A single drop of your blood could be a drop of life for someone else
  </p>

  <h3>Number of donners: <?php echo '' . $donners; ?></h3>
</div>