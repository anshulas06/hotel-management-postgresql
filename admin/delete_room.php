<?php
  require("../config.php");
  include("./include/includes.php");
      // print("<pre>".print_r($row, true)."</pre>");
      if (isset($_POST["submit"])) {
          $room_id=$_GET['room_id'];
          $sql = "DELETE FROM rooms WHERE room_id = :room_id";
          $statement = $conn->prepare($sql);
          $statement->execute(array(
            ':room_id'=>$room_id,
          ));
          header("Location: rooms.php");
      }
      if (isset($_POST["cancel"])) {
          header("Location: rooms.php");
      }

?>
<body>
<div style="background-color: black;">
      <?php include("include/header.php"); ?>
    </div>
<section class="content">
    <?php
      $id = $_GET['room_id'];
            
      $statement = $conn->prepare("SELECT * FROM rooms WHERE room_id = :room_id");
      $statement->execute(array(
        ":room_id" => $id
      ));
      $row = $statement->fetch(PDO::FETCH_ASSOC);

?>
    <h2 class="text-center">Are you sure?</h2>
    <table class="table table-bordered text-center">
  <thead>
    <tr>
      <th scope="col" class="text-center">Fields</th>
      <th scope="col" class="text-center">Details</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     
      <td>Room ID</td>
      <td><?=$row['room_id']?></td>
    </tr>
    <tr>
      
      <td>Room Number</td>
      <td><?=$row['room_number']?></td>
    </tr>
    <tr>
      <td >Room Name</td>
      <td><?=$row['room_name']?></td>
    </tr>
    <tr>
      <td >Room Type</td>
      <td><?=$row['room_type']?></td>
    </tr>
    <tr>
      <td >Room Featured</td>
      <td><?=$row['room_featured']==1?'Yes':'No';?></td>
    </tr>
    <tr>
      <td >Room Booked</td>
      <td><?=$row['room_price']==1? 'Yes': 'No';?></td>
    </tr>
    <tr>
      <td >Room Floor</td>
      <td><?=$row['room_floor']?></td>
    </tr>

    <tr>
      <td >Room View</td>
      <td><?=$row['room_view']?></td>
    </tr><tr>
      <td >Room Beds</td>
      <td><?=$row['room_beds']?></td>
    </tr>
    <tr>
      <td >Bed Type</td>
      <td><?=$row['bed_type']?></td>
    </tr>
    <tr>
      <td >Room Capacity</td>
      <td><?=$row['room_capacity']?></td>
    </tr>
    <tr>
      <td >Room Amenities</td>
      <td><?=$row['room_amenities']?></td>
    </tr>

  </tbody>
</table>
<br>
 <form method="POST" action="delete_room.php?room_id=<?php echo $row['room_id']; ?>">
 <div class="row" style="margin-left: 15%;">
 <div class="col-sm-6">
    <button class="btn btn-primary" name="cancel" id="cancel" style="margin-left: 15%;">Cancel</button>
</div>
 <div class="col-sm-6">
    <button class="btn btn-danger" name="submit" id="submit">Submit</button>
</div>
</div>
 </form>   



</section>
</body>
</html>