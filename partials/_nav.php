<?php 


$loggedin = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true;

echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/Login System">iSecure</a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="/Login System/welcome.php">Home</a>
      </li>';

      if(!$loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/Login System/login.php">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/Login System/signup.php">Signup</a>
        </li>';
      }

      if($loggedin){
        echo '<li class="nav-item">
          <a class="nav-link" href="/Login System/logout.php">Logout</a>
        </li>';
      }

    echo '</ul>
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>';
?>
