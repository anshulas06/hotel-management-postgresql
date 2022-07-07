
<?php

include("config.php");
include("./include/includes.php");


?>
<body>
<div class="room-hd">
    <?php
    include "./include/header.php";
    ?>

    
    <div class="text-center mb-100 feature-hd">
        <h1>Featured Rooms</h1>
    </div>

</div>
    
        <div class="rooms_here">
        <div class="container">
            <div class="row">
                <?php
                    $query="update rooms set room_booked=0 from booking where check_out_date<cast(now() as date)";
                    $stmt=$conn->prepare($query);
                    $stmt->execute();
                    $result="select * from rooms where room_featured=1 and room_booked=0";
                    foreach($conn->query($result)as $rows)
                    {                                
                    ?>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_offers">
                            <div class="about_thumb">
                                <div><img src="./media/<?php echo $rows["room_image"];?>" alt="#" class="avail_img"></div>                               
                            </div>
                            <h5><?php echo $rows["room_name"];?></h5>
                            <h6>Price: <?php echo $rows["room_price"];?></h6>
                            <h6>Number of beds: <?php echo $rows["room_beds"];?></h6>
                            <h6>Amenities: <?php echo $rows["room_amenities"];?></h6>
                            <!-- <button class="btn btn-light" ><a href="booking.php?room_id=<?php echo $rows["room_id"];?>&room_name=<?php echo $rows["room_name"]?>&room_price=<?php echo $rows["room_price"]?>" class="book_now">book now</a></button> -->
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>  
        </div>
    </div>
    <!-- features_room_end -->

</body>
<?php
    include("./include/footer.php");
    
?>