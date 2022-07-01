<?php
session_start();
//destroy session
session_destroy();
//unset cookies
setcookie('login', '', 0, "/");

header("Location: index.php");
?>