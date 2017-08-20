<?php
    require "config.php";
    require "DB.php";
    $_user = new User();
    $_user->action($_POST["type"]);
?>
