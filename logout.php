<?php
include("config.php");

unset($_SESSION["username"]);
unset($_SESSION["user_id"]);

session_destroy();

header("Location: index.php");

?>
