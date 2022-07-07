<nav class="navbar navbar-expand-md px-md-5">
  <button
    class="navbar-toggler"
    type="button"
    data-toggle="collapse"
    data-target="#navbarSupportedContent"
    aria-controls="navbarSupportedContent"
    aria-expanded="false"
    aria-label="Toggle navigation"
    >
  <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="./index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./rooms.php">Rooms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./about.php">About Us</a>
      </li>
      <?php if ($_SESSION["admin"] == true) {?>
      <li class="nav-item">
        
            
              <a class="nav-link" href="./admin/index.php">Admin</a>
           
      </li>
      <?php } ?>
      <li>
          <a class="nav-link" href="./logout_user.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>