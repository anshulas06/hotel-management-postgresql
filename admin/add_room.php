<?php
  require("../config.php");
  include("include/includes.php");
?>
<body>
<div style="background-color: black;">
      <?php include("include/header.php"); ?>
    </div>
<section class="content admin-form">

  <div class="container">
  <div class="text-danger text-center">
        <h1>Add Room</h1>
      </div>
  
    <!-- Start of form -->
    <form action="add_room_controller.php" id="add_room_form" method="POST" enctype="multipart/form-data">

      <div class="row">
        <div class="col-sm-12 col-md-6 col-6">
          <div class="form-group">
            <label class="form-label" for="room_number"  style="color: black;">Room Number</label>
            <input type="number" name="room_number" id="room_number" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_name"  style="color: black;">Room Name</label>
            <input type="text" name="room_name" id="room_name" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_type"  style="color: black;">Room Type</label>
            <input type="text" name="room_type" id="room_type" class="form-control " required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_floor"  style="color: black;">Room Floor</label>
            <input type="number" name="room_floor" id="room_floor" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_type"  style="color: black;">Room View</label>
            <input type="text" name="room_view" id="room_view" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_capacity"  style="color: black;">Room Amenities</label>
            <input type="text" name="amenities" id="room_amenities" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_beds"  style="color: black;">Number of Beds</label>
            <input type="number" name="room_beds" id="room_beds" class="form-control" required />
          </div>
        </div>
        <div class="col-sm-12 col-md-6 col-6">
          <div class="form-group">
            <label class="form-label" for="bed_type"  style="color: black;">Bed Type</label>
            <input type="text" name="bed_type" id="bed_type" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_capacity"  style="color: black;">Room Capacity</label>
            <input type="number" name="room_capacity" id="room_capacity" class="form-control" required />
          </div>
          <div class="form-group">
            <label class="form-label" for="room_price"  style="color: black;">Room Price</label>
            <input type="number" name=" room_price" id="room_price" class="form-control " required />
            <small id="room_price_error" class="text-danger">
            </small>
          </div>
          <div class="form-group">
            <label class="form-label" for="room_featured"  style="color: black;">Is the Room featured ?</label><br>
            <input type="radio" class="" id="featured_yes" name="room_featured" value="yes" checked ><span>&nbsp;</span>
            <lable for="featured_no"  style="color: black;">Yes</lable>
            <span>&nbsp;&nbsp;</span>
            <input type="radio" class=" " id="featured_no" name="room_featured" value="no"><span>&nbsp;</span>
            <lable for="featured_no"  style="color: black;">No</lable>
            <br>
          </div>
          <div class="form-group">
            <label class="form-label is-invalid" for="room_image"  style="color: black;">Room Image</label><br>
            <input type="file" name="room_image" accept="image/png, image/jpeg" class="" />
            <small id="room_image_error" class="error-message text-danger">
            </small>
          </div>
          <div class="text-danger" id="error-form">
          </div>
          <div class="form-group my-0.25">
            <button id="add_room" type="submit" name="add_room" value="add_room" class="btn btn-primary">Add Room</button>
          </div>
        </div>
      </div>
    </form>
    <!-- End of form -->
  </div>
</section>
     



</body>
<!-- <?php include("include/footer.php"); ?> -->