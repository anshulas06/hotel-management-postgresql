<?php

include("config.php");
include("./include/includes.php");
if(isset($_GET["room_id"]))
$room_id=($_GET["room_id"]);
?>

<body>

<div class="room-hd">
<?php
    include "./include/header.php";
    ?>
<div class="container form-cl mh-100 w-50">
    <div class="row">
        <div class="text-center" style="margin-bottom: 20px;">
            <h1>Register</h1>
        </div>
        <form class="form-horizontal" method="post" action="register_controller.php">
            <div class="form-row">
                <div class="form-group">
                    <label class="control-label col-sm-6" for="date">Email:</label>
                    <div class="col-sm-6">
                        <input type="email" placeholder="Email" name="email" id="email">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="date">Password:</label>
                    <div class="col-sm-6">
                        <input type="password" placeholder="Password" name="pass" id="pass">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="date">First Name:</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="First Name" name="fname" id="fname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="date">Last Name:</label>
                    <div class="col-sm-6">
                        <input type="text" placeholder="Last Name" name="lname" id="lname">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="date">Date of Birth:</label>
                    <div class="col-sm-6">
                        <input type="date" placeholder="Date of Birth" name="dob" id="dob">
                    </div>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-6" for="date">Phone Number:</label>
                    <div class="col-sm-6">
                        <input type="tel" placeholder="Phone Number" name="phone" id="phone">
                    </div>
                </div>
               
                <div class="form-group">
                    <div class="col-sm-12 text-center">
                        <button type="submit" class="btn btn-primary" name="submit" id="register">Register</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>  
</div> 
</body>
<?php
include("./include/footer.php");
?>