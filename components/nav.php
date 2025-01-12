<?php ?>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid justify-content-center">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="/final">Home</a>
      </li>
      <?php
      session_start();
      if (isset($_SESSION['user'])) {

        $user = $_SESSION['user_name'];
        echo "<li class='nav-item'><a class='nav-link active' href='/final/admin/admin-logout.php'>Logout ($user)</a></li>";
      } else {
        echo "<li class='nav-item'><a class='nav-link active' href='/final/admin'>Login</a></li>";
        echo "<li class='nav-item'><a class='nav-link active' href='/final/admin/admin-sign-up.php'>Sign up</a></li>";
      }
      ?>
    </ul>
  </div>
</nav>