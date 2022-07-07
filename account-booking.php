<?php
require_once("config.php");
include("./include/includes.php");
?>
  <body>
    <div style="background-color: black;">
      <?php include("./include/header.php"); ?>
    </div>
    <div class="text-center" style="margin-bottom: 20px;">
      <h3>Booking Details</h3>
    </div>
    <div class="container">
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
        <div class="col-md-9" style="color: black;">
        <table
          id="dtVerticalScrollExample"
          class="table table-striped table-bordered small"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th class="th-sm">Check in date</th>
              <th class="th-sm">Check out date</th>
              <th class="th-sm">Room Type</th>
              <th class="th-sm">Price</th>
            </tr>
          </thead>
          <tbody>
            <?php
                    // echo $_SESSION["user_id"];
                    $sql = "SELECT check_in_date, check_out_date, room.room_name, amount FROM booking NATURAL JOIN rooms as room WHERE booking.user_id = :user_id";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute(array(
                        ":user_id" => $_SESSION['user_id'],
                    ));
                    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
                    foreach($rows as $row) {

               
                ?>
                  <tr>
                  <td><?= $row["check_in_date"] ?></td>
                  <td><?= $row["check_out_date"] ?></td>
                  <td><?= $row["room_name"] ?></td>
                  <td><?= $row["amount"] ?></td>
                  </tr>
                <?php 
    }
                ?>
                </tbody>
                </table>
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
