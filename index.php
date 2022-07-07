<?php

include("config.php");
include("./include/includes.php");
// echo $_SESSION['user_id'];
?>

<body>
    <div class="body-pg">
    <?php
    include "./include/header.php";
  
    ?>
        <div class="container text-center main-hd mh-100">
            <h1 class="display-1">Book your rooms here for an amazing stay!</h1>      
        </div>
    
                                
                         
                <div class="container form-cl mh-100">
                        <div class="row">
                            <div class="text-center">
                                <h3>Check Availability</h3>
                            </div>
                            <form class="form-horizontal" method="POST" action="check_availability.php">
                                <div class="row align-items-center g-3 div-form">
                                        <div class="col-auto">
                                            <label class="control-label col-sm-3" for="date">Check in Date:</label>
                                            <div class="col-sm-3">
                                                <input class="form-control" type="date" placeholder="Check in date" name="check-in" id="check-in">
                                            </div>
                                        </div>
                                    
                                        <div class="col-auto">
                                            <label class="control-label col-sm-3" for="date">Check out Date:</label>
                                            <div class="col-sm-3">
                                                <input class="form-control" type="date" placeholder="Check out date" name="check-out" id="check-out">
                                            </div>
                                        </div>
                                
                                </div>  
                                <div class="row align-items-center g-3 div-form">
                                        <div class="col-auto">
                                            <label class="control-label col-sm-3">Number of Adults:</label>
                                            <div class="col-sm-3">
                                                <select class="form-control" name="count-adults" id="count-adults">
                                                    <option value="1" selected>1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                    
                                        <div class="col-auto">
                                            <label class="control-label col-sm-3">Number of Children:</label>
                                            <div class="col-sm-3">
                                                <select class="form-control"  name="count-children" id="count-children">
                                                    <option value="0" selected>0</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                </select>
                                            </div>
                                        </div>
                                </div>
                                    <div class="form-group">
                                        <div class="col-sm-12 text-center">
                                            <button type="submit" class="btn btn-primary">Check Availability</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>

</div>
</body>

<?php
    include "./include/footer.php";
    ?>

