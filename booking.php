<?php

include("config.php");
include("./include/includes.php");

if(!isset($_SESSION['username'])) {
   header('location: login.php');
}
$room_id=$_GET['room_id'];
$room_name=$_GET['room_name'];
$room_price=$_GET['room_price']
?>

<body>
<div class="room-hd">
<?php
    include "./include/header.php";
    ?>

                    <div class="container form-cl mh-100">
                        <div class="row">
                            <div class="text-center" style="margin-bottom: 20px;">
                                <h1>Booking Details</h1>
                            </div>
                        <div >
                        <div class="col-md-12">
                           <form method="POST" action="booking_controller.php" id="reservation_details">
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <span class="form-label">Check In</span>
                                       <input class="form-control" name="check_in" id="check_in" type="text" required value="<?php if (isset($_SESSION['checkIn'])) {
            echo $_SESSION['checkIn'];} ?> " readonly/>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <span class="form-label">Check out</span>
                                       <input class="form-control" name="check_out" id="check_out" type="text" required value="<?php if (isset($_SESSION['checkOut'])) {
            echo $_SESSION['checkOut'];
         } ?> "readonly/>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="no_adults">Adults</label>
                                       <input type="text" class="form-control" name="adults" id="adults" value="<?php if(isset($_SESSION['adult'])){
                                          echo $_SESSION['adult'];}?> " readonly/>
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <label for="no_children">Children</label>
                                       <input type="text" class="form-control" name="children" id="children" value="<?php if(isset($_SESSION['children'])) {
                                          echo $_SESSION['children'];}?> " readonly/>
                                    </div>
                                 </div>
                              </div>
                              <div class="row">
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <span class="form-label">Room Type</span>
                                       <input class="form-control" name="room_name" id="room_name" type="text" required value="<?php if (isset($room_name)) {
                                          echo $room_name;
                                          }?> " readonly/>
                                          
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">
                                       <span class="form-label">Total Price</span>
                                       <input class="form-control" name="room_price" id="room_price" type="text" required value="<?php if (isset($room_name)) {
                                          echo $room_price;
                                          }?> " readonly/>
                                          
                                    </div>
                                 </div>
                                 <div class="col-sm-6">
                                    <div class="form-group">

                                       <input class="form-control" name="room_id" id="room_id" type="text" required value="<?php if (isset($room_id)) {
                                          echo $room_id;
                                          }?> " readonly/>
                                          
                                    </div>
                                 </div>
                              </div>
                              <div class="form-btn text-center text-lg-start mt-4 pt-2">
                                 <button type="submit" name="confirm_booking" id="confirm_booking" class="btn btn-primary btn-lg">Confirm Booking</button>
                              </div>
                           </form>
                        </div>
                     </div>
</div>
</div>
</body>


<!-- <?php
include("./include/footer.php");
?> -->

<script>
   document.getElementById("room_id").style.display="none";
</script>
