<?php
  require("../config.php");
  include("./include/includes.php");
?>
<body>
<div style="background-color: black;">
      <?php include("include/header.php"); ?>
    </div>
      <section class="content">
      <div class="text-danger text-center">
        <h1>User Details</h1>
      </div>
        <table
          id="dtVerticalScrollExample"
          class="table table-striped table-bordered small"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th class="th-sm">Email</th>
              <th class="th-sm">First name</th>
              <th class="th-sm">Last name</th>
              <th class="th-sm">DOB</th>
              <th class="th-sm">Phone</th>
              <th class="th-sm">Admin</th>
              <!-- <th class="th-sm">Address</th> -->
            </tr>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM users";
            $statement = $conn->prepare($sql);
            $statement->execute();
            $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

            foreach ($rows as $row) {
             
            ?>
            <tr>
              <td><?= $row["user_email"] ?></td>
              <td><?= $row["user_fname"] ?></td>
              <td><?= $row["user_lname"] ?></td>
              <td><?= $row["user_dob"] ?></td>
              <td><?= $row["user_phone"] ?></td>
              <td class="<?= $row["user_admin"] == 1 ? "table-green": "table-red"; ?>"><?= $row["user_admin"] == 1 ? "Admin" : "-" ?></td>
            </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </section>

    
</body>
<!-- <?php include("include/footer.php"); ?> -->
