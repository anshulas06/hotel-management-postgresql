<?php

include("config.php");
include("./include/includes.php");


?>
<body>
<div class="room-hd">
<?php
    include "./include/header.php";
    ?>

                    <div class="container form-cl mh-100">
                        <div class="row">
                            <div class="text-center" style="margin-bottom: 20px;">
                                <h1>Login</h1>
                            </div>
                            <div >
                                <form class="form-horizontal" method="POST" action="login_controller.php" style="color: black;">
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label class="control-label col-sm-6" for="date">Email:</label>
                                            <div class="col-sm-6">
                                                <input type="text" placeholder="Username" name="username" id="username">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-6" for="date">Password:</label>
                                            <div class="col-sm-6">
                                                <input  type="password" placeholder="Password" name="password" id="password">
                                            </div>
                                        </div>
                                        
                                        <div class="text-center text-lg-start mt-4 pt-2">
                                            
                                                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" name="submit">Login</button>
                                                <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a class="link-danger" href="register.php">Register</a></p>
                                            
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
</div>   
</body>

<?php
include("./include/footer.php");
?>

