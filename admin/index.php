<?php
  require("../config.php");
  include("include/includes.php");
?>
<body>
<div style="background-color: black;">
      <?php include("include/header.php"); ?>
    </div>
 <section class="content charts-section">
    <div class="container my-3">

        <div class="row" id="account-welcome">
            <div class="container">
                <div class="card" >
                   <div class="card-header text-center" style="margin-bottom: 50px;">
                       <h2 style="color: black;">Welcome&nbsp;<span style="color: black;">
                        <?php echo $_SESSION["username"]; ?></span></h2>
                   </div>
                </div>
            </div>
        </div>

        <div class="row" id="count">
            <div class="col-md-4">
                <div class="card card-red">
                    <div class="card-header">
                    <div class="count">
                            <div class="icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="info">
                                <div class="number">
                                <?php
                                    $statement = $conn->prepare("SELECT * FROM rooms");
                                    $statement->execute();
                                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    if ($rows != false) {
                                            echo count($rows);
                                    } else {
                                            echo 0;
                                        }
                                ?>
                                </div>
                                <div class="label">Rooms</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-blue">
                    <div class="card-header">
                    <div class="count">
                            <div class="icon">
                                <i class="fa fa-users"></i>
                            </div>
                            <div class="info">
                                <div class="number">
                                <?php
                                    $statement = $conn->prepare("SELECT * FROM users");
                                    $statement->execute();
                                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    if ($rows != false) {
                                        echo count($rows);
                                    } else {
                                        echo 0;
                                    }
                                ?>
                                </div>
                                <div class="label">Users</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-green">
                    <div class="card-header">
                        <div class="count">
                            <div class="icon">
                                <i class="fa fa-bookmark"></i>
                            </div>
                            <div class="info">
                                <div class="number">
                                <?php
                                    $statement = $conn->prepare("SELECT * FROM booking");
                                    $statement->execute();
                                    $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                    if ($rows != false) {
                                        echo count($rows);
                                    } else {
                                        echo 0;
                                    }
                                ?>
                                </div>
                                <div class="label">Reservations</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" id="graphs" style="margin-top: 30px;">
            <div class="col-12 col-md-6">
                <div class="card">
                    <div class="card-header">
                        Booked and unbooked rooms
                    </div>
                    <div class="row">
                    <div class="col-6 col-md-6">
                        <div class="number">
                                    <?php
                                        $statement = $conn->prepare("SELECT * FROM rooms where room_booked=0");
                                        $statement->execute();
                                        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        if ($rows != false) {
                                            echo count($rows);
                                        } else {
                                            echo 0;
                                        }
                                    ?>
                        </div>
                        <div class="label">Rooms Empty</div>
                    </div>
                    <div class="col-6 col-md-6">
                        <div class="number">
                                    <?php
                                        $statement = $conn->prepare("SELECT * FROM rooms where room_booked=1");
                                        $statement->execute();
                                        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        if ($rows != false) {
                                            echo count($rows);
                                        } else {
                                            echo 0;
                                        }
                                    ?>
                        </div>
                        <div class="label">Rooms Booked</div>
                    </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="card card2">
                    <div class="card-header">
                        All room types
                    </div>
                    <div class="graph">
                        <div class="number">
                                    <div class="col-md-6">
                                        <?php   echo "Room Type"; ?>
                                        </div>
                                        <div class="col-md-6">
                                         <?php   echo "Room Count";?>
                                        </div>    
                                    <?php
                                        $statement = $conn->prepare("SELECT room_type, count(room_id) as count_room FROM rooms group by room_type");
                                        $statement->execute();
                                        $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
                                        foreach ($rows as $row) {
                                        ?>
                                        <div class="col-md-6">
                                        <?php   echo $row['room_type']; ?>
                                        </div>
                                        <div class="col-md-6">
                                         <?php   echo $row['count_room'];?>
                                        </div> 
                                       <?php }
                                    ?>
                        </div>  
                    </div>
                </div>
            </div>
        </div>

        
    </div>
 </section>


</body>
<!-- <?php include("include/footer.php"); ?> -->

