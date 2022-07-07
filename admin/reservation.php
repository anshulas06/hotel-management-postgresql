<?php
  require("../config.php");
  include("./include/includes.php");
?>
<body>
<div style="background-color: black;">
      <?php include("include/header.php"); ?>
    </div>
 <section class="content">
      
        <table
          id="dtVerticalScrollExample"
          class="table table-striped table-bordered small"
          cellspacing="0"
        >
          
          <thead>
            <tr>
            <TH COLSPAN="10">
              <H3><BR>Current Bookings</H3>
            </TH>
            </tr>
            <tr>
              <th class="th-sm">Booking Id</th>
              <th class="th-sm">First Name</th>
              <th class="th-sm">Last Name</th>
              <th class="th-sm">Room Id</th>
              <th class="th-sm">Booking Date</th>
              <th class="th-sm">Check in</th>
              <th class="th-sm">Check out</th>
              <th class="th-sm">Total Adults</th>
              <th class="th-sm">Total Children</th>
              <th class="th-sm">Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $statement = $conn->prepare("SELECT booking_id, user_fname, user_lname, b. room_id, booking_date, no_adults, no_children, amount, check_in_date, check_out_date FROM booking b NATURAL JOIN rooms NATURAL JOIN users where check_out_date>=cast(now() as date)");
              $statement->execute();
              $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

              foreach ($rows as $row) {
                  ?>
            <tr>
              <td><?= $row["booking_id"] ?></td>
              <td><?= $row["user_fname"] ?></td>
              <td><?= $row["user_lname"] ?></td>
              <td><?= $row["room_id"] ?></td>
              <td><?= $row["booking_date"] ?></td>
              <td><?= $row["check_in_date"] ?></td>
              <td><?= $row["check_out_date"] ?></td>
              <td><?= $row["no_adults"]?></td>
              <td><?= $row["no_children"] ?></td>
              <td><?= $row["amount"] ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>

        <table
          id="dtVerticalScrollExample"
          class="table table-striped table-bordered small"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th COLSPAN="10">
                <h3><br>All Bookings</h3>
              </th>
            </tr>
            <tr>
              <th class="th-sm">Booking Id</th>
              <th class="th-sm">First Name</th>
              <th class="th-sm">Last Name</th>
              <th class="th-sm">Room Id</th>
              <th class="th-sm">Booking Date</th>
              <th class="th-sm">Check in</th>
              <th class="th-sm">Check out</th>
              <th class="th-sm">Total Adults</th>
              <th class="th-sm">Total Children</th>
              <th class="th-sm">Amount</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $statement = $conn->prepare("SELECT booking_id, user_fname, user_lname, b. room_id, booking_date, no_adults, no_children, amount, check_in_date, check_out_date FROM booking b NATURAL JOIN rooms NATURAL JOIN users order by check_out_date desc");
              $statement->execute();
              $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

              foreach ($rows as $row) {
                  ?>
            <tr>
              <td><?= $row["booking_id"] ?></td>
              <td><?= $row["user_fname"] ?></td>
              <td><?= $row["user_lname"] ?></td>
              <td><?= $row["room_id"] ?></td>
              <td><?= $row["booking_date"] ?></td>
              <td><?= $row["check_in_date"] ?></td>
              <td><?= $row["check_out_date"] ?></td>
              <td><?= $row["no_adults"]?></td>
              <td><?= $row["no_children"] ?></td>
              <td><?= $row["amount"] ?></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </section>

   
    
</body>
<!-- <?php include("include/footer.php"); ?> -->


