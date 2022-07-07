<?php

include("config.php");
if($_SERVER['REQUEST_METHOD'] == "POST")
{
    $checkIn=$_POST['check_in'];
    $checkOut=$_POST['check_out'];
    $adult=$_POST['adults'];
    $children=$_POST['children'];
    $roomId=$_POST['room_id'];
    $price=$_POST['room_price'];
    // echo $_SESSION['user_id'];
    //Modify Room

    $bdate=date('Y-m-d');
    $query2="insert into booking(user_id, room_id, booking_date, no_adults, no_children, amount, check_in_date, check_out_date) values(:user_id, :room_id, :bdate, :no_adults, :no_children, :price, :checkIn, :checkOut)";
    $stmt=$conn->prepare($query2);
    
    $stmt->execute(array(
        ":user_id"=> $_SESSION['user_id'],
        ":room_id"=> $roomId, 
        ":bdate" => $bdate,
        ":no_adults"=> $adult,
        ":no_children"=> $children, 
        ":price"=>$price,
        ":checkIn"=> $checkIn,
        ":checkOut"=> $checkOut,
    ));

    $query1="UPDATE rooms SET room_booked=1 where room_id=:room_id";
    $stmt=$conn->prepare($query1);
    
    $stmt->execute(array(
        ":room_id"=> $roomId
    ));

    //Create a new booking
    header("location: account-booking.php");
}
?>