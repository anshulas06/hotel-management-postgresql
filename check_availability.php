<?php

include("config.php");
include("./include/includes.php");
if(!isset($_SESSION['username'])) {
    header('location: login.php');
}


if($_SERVER['REQUEST_METHOD'] == "POST"){
    $_SESSION['checkIn']=$_POST['check-in'];
    $_SESSION['checkOut']=$_POST['check-out'];
    $_SESSION['adult']=$_POST['count-adults'];
    $_SESSION['children']=$_POST['count-children'];
    
    // if(isset($_SESSION['children']))
    //     echo $_SESSION['children'];
    // if(isset($_SESSION['adult']))
    //     echo $_SESSION['adult'];
    

    // echo $_SESSION['checkIn']; 
    // echo $checkOut;
    // echo $adult;
    // echo $children;
    //  header("location: about.php");
}
?>

<body>
<div class="room-hd">
<?php
    include("./include/header.php");
?>
    <div class="text-center mb-100 feature-hd" style="margin-bottom: 400px;">
        <h1>Available Rooms</h1>
    </div>
    <div class="offers_area padding_top">
        <div class="container">
            <div class="row">
                <?php
                    // $query="update rooms set room_booked=0 from booking where check_out_date<cast(now() as date)";
                    // $stmt=$conn->prepare($query);
                    // $stmt->execute();
                    $result="select * from rooms where room_booked=0";
                    foreach($conn->query($result)as $rows)
                    {                                
                    ?>
                    <div class="col-xl-4 col-md-4">
                        <div class="single_offers">
                            <div>
                                <div><img src="./media/<?php echo $rows["room_image"];?>" alt="#" class="avail_img"></div>                               
                            </div>
                            
                            <h5><?php echo $rows["room_name"];?></h5>
                            <h6>Price: <?php echo $rows["room_price"];?></h6>
                            <h6>Number of beds: <?php echo $rows["room_beds"];?></h6>
                            <h6>Amenities: <?php echo $rows["room_amenities"];?></h6>
                            <button class="btn btn-light" ><a href="booking.php?room_id=<?php echo $rows["room_id"];?>&room_name=<?php echo $rows["room_name"]?>&room_price=<?php echo $rows["room_price"]?>" class="book_now">book now</a></button>

                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
                
</body>
<!-- <?php
    include "./include/footer.php";
    ?> -->
