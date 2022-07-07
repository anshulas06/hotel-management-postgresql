<!-- <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid p-0">
                    <div class="row align-items-center no-gutters">
                        <div class="col-xl-5 col-lg-6">
                            <div class="main-menu">
                                <div> -->
                                <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                                    <div class="container-fluid">
                                        <div class="navbar-header">
                                            <a class="navbar-brand" href="index.php" style="color: white;">Hotel Management System</a>
                                        </div>
                                        <ul class="nav navbar-nav text-center mr-auto navbar-right" >
                                            <li><a href="../index.php" style="color: white;">home</a></li>
                                            <li><a href="rooms.php" style="color: white;">rooms</a></li>
                                            <li><a href="add_room.php" style="color: white;">add rooms</a></li>
                                            <li><a href="users.php" style="color: white;">users</a></li>
                                            <li><a href="reservation.php" style="color: white;">bookings</a></li>
                                            <?php if(isset($_SESSION["username"])) {
                                                echo '<li>'; 
                                                if($_SESSION["admin"]){
                                                    echo '<a href="index.php" style="color: white;">Hello,'.$_SESSION['username'].' </a>'.'</li>';
                                                    
                                                }
                                                else
                                                {
                                                    echo '<a href="account-booking.php" style="color: white;">Hello,'.$_SESSION['username'].' </a>'.'</li>';
                                                    
                                                }
                                                echo '<li><a href="../logout.php" style="color: white;">Logout</a></li>';
                                                
                                            } else{
                                                echo '<li><a href="register.php" style="color: white;">Register</a></li>';
                                                echo '<li><a href="login.php" style="color: white;">Log In</a></li>';
                                            }	?>
                                        <ul>
                                    </div>
                                </nav>
                            <!-- </div>
                        </div>
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header> -->