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
        <h1>All Rooms</h1>
      </div>
        <table
          id="dtVerticalScrollExample"
          class="table table-striped table-bordered small"
          cellspacing="0"
        >
          <thead>
            <tr>
              <th class="th-sm">No.</th>
              <th class="th-sm">Name</th>
              <th class="th-sm">Type</th>
              <th class="th-sm">Featured</th>
              <th class="th-sm">Image</th>
              <th class="th-sm">Price</th>
              <th class="th-sm">Booked</th>
              <th class="th-sm">Floor</th>
              <th class="th-sm">View</th>
              <th class="th-sm">Beds/ Type</th>
              <th class="th-sm">Cap.</th>
              <th class="th-sm">Actions</th>
            </tr>
          </thead>
          <tbody>
            <?php
              $statement = $conn->prepare("SELECT * FROM rooms");
              $statement->execute();
              $rows = $statement->fetchAll(PDO::FETCH_ASSOC);

              foreach ($rows as $row) {
                  if ($row["room_booked"] == 1) {
                      $tableClass = "table-green";
                  } else {
                      $tableClass = "table-red";
                  } ?>
            <tr>
              <td><?= $row["room_number"] ?></td>
              <td><?= $row["room_name"] ?></td>
              <td><?= $row["room_type"] ?></td>
              <td class="<?= $row["room_featured"] == 1 ? "table-green": "table-red"; ?>"><?= $row["room_featured"] == 1 ? "Featured" : "Not Featured" ?></td>
              <td class="td-img"><img width=200 height=100 class="table-img img-responsive" src="../media/<?=$row["room_image"] ?>" alt=""></td>
              <td><?= $row["room_price"] ?></td>
              <td class="<?= $tableClass ?>"><?= $row["room_booked"] == 1 ? "Yes" : "No"; ?></td>
              <td><?= $row["room_floor"] ?></td>
              <td><?= $row["room_view"] ?></td>
              <td><?= $row["room_beds"]." / ".$row["bed_type"] ?></td>
              <td><?= $row["room_capacity"] ?></td>
              <td>
                <a href="delete_room.php?room_id=<?= $row["room_id"]; ?>" class="text-danger"> <span class="fa fa-trash">Delete</span>&nbsp;</a>
                &nbsp;
                /
                &nbsp;
                <a  href="edit_room.php?room_id=<?= $row["room_id"]; ?>" class="text-success"> <span class="fa fa-pencil">Edit</span></a>
              </td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
      </section>

   
    
</body>
<!-- <?php include("include/footer.php"); ?> -->
