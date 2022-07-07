<?php
require_once("config.php");
include("./include/includes.php");
?>
  <body>
  <div style="background-color: black;">
      <?php include("./include/header.php"); ?>
    </div>
    <div class="text-center" style="margin-bottom: 20px;">
      <h3>Account Details</h3>
    </div>
    <div class="container mt-3">
      <div class="row">
        <div class="col-md-3">
          
          <div class="sidenav navbar-expand-md">
            <hr />
            <a href="accounts.php">Account</a>
            <hr />
            <a href="account-booking.php">Bookings</a>
            <hr />
          </div>
        </div>
        <div class="col-md-9">
          <div class="Account-page" style="color: black;">
            <form>
              <?php
                  $sql = "SELECT * FROM users WHERE user_id = :user_id";
                  $stmt = $conn->prepare($sql);
                  $stmt->execute(array(
                    ":user_id" => $_SESSION['user_id'],
                  ));
                  $row = $stmt->fetch(PDO::FETCH_ASSOC);
              ?>
              <div class="form-group">
                  <label for="user_fname">First name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="user_name"
                    id="user_name"
                    placeholder="First name"
                    value="<?= $row["user_fname"] ?>"
                    readonly
                  />
                </div>
                <div class="form-group">
                  <label for="user_lname">Last name</label>
                  <input
                    type="text"
                    class="form-control"
                    name="user_lname"
                    id="user_lname"
                    placeholder="Last name"
                    value="<?= $row["user_lname"] ?>"
                    readonly
                  />
                </div>
                <div class="form-group">
                  <label for="user_email">Email</label>
                  <input
                    type="email"
                    class="form-control"
                    name="user_email"
                    id="user_email"
                    placeholder="Email"
                    value="<?= $row["user_email"] ?>"
                    readonly
                  />
                </div>
                <div class="form-group">
                  <label for="user_phone">Phone number</label>
                  <input
                    type="text"
                    class="form-control"
                    name="user_name"
                    id="user_name"
                    placeholder="First name"
                    value="<?= $row["user_phone"] ?>"
                    readonly
                  />
                </div>
                <div class="form-group">
                  <label for="user_phone">Date of birth</label>
                  <input
                    type="date"
                    class="form-control"
                    name="user_dob"
                    id="user_dob"
                    placeholder="Date of birth"
                    value="<?= $row["user_dob"] ?>"
                    readonly
                  />
                </div>
            </form>
            
            
          </div>
        </div>
      </div>
    </div>
 
  
</body>
<!-- <?php include("./include/footer.php"); ?> -->
  <script>
    $(document).ready(function() {
        $("nav").eq(0).addClass("bg-dark");
        $("nav").eq(0).addClass("navbar-dark");
        // bg-dark navbar-dark 
    });
  </script>
