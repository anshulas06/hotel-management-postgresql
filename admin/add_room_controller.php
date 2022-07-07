<?php
  require("../config.php");

  
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
  $room_number = $_POST['room_number'];
  $room_name = $_POST['room_name'];
  $room_type = $_POST['room_type'];
  $room_floor = $_POST['room_floor'];
  $room_amenities = $_POST['amenities'];
  $room_beds = $_POST['room_beds'];
  $room_capacity = $_POST['room_capacity'];
  $bed_type = $_POST['bed_type'];
  $room_price = $_POST['room_price'];
  $room_featured = $_POST['room_featured'] == "yes" ? 1 : 0;
  $room_view = $_POST['room_view'];
  
  $room_image = $_FILES['room_image']['name'];

  if(isset($_FILES['room_image']))
  {
    $file_temp=$_FILES['room_image']['tmp_name'];
    $target_file="../media/";
    if(move_uploaded_file($file_temp, $target_file.$room_image))
      echo "Uploaded";
    else 
      echo "Failed";
  }
  
  



  $sql = "INSERT INTO rooms (room_number, room_name, room_type, room_featured, room_price, room_image, room_floor, room_view, room_beds, bed_type, room_capacity, room_amenities) VALUES (:room_number, :room_name, :room_type, :room_featured, :room_price, :room_image, :room_floor, :room_view, :room_beds, :bed_type, :room_capacity, :room_amenities)";

  $stmt = $conn->prepare($sql);

  $stmt->execute(array(
    ":room_number" => $room_number,
    ":room_name" => $room_name,
    ":room_type" => $room_type,
    ":room_featured" => $room_featured,
    ":room_price" => $room_price,
    ":room_image" => $room_image,
    ":room_floor" => $room_floor,
    ":room_view" => $room_view,
    ":room_beds" => $room_beds,
    ":bed_type" => $bed_type,
    ":room_capacity" => $room_capacity,
    ":room_amenities" => $room_amenities
  ));

  if($stmt) 
    echo "Successfully added new Room";
  else 
    echo "Nope";
  header("location: rooms.php");
  }
  ?>
