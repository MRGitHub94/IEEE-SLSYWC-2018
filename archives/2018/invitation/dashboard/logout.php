<?
session_start();
session_unset();
session_destroy();

header("location:https://sywc.ieee.lk/invitation/dashboard/login");
exit();
?>