 <!-- this page is for distroy session  -->

<?php
session_start();
if(session_destroy())
{
header("Location: login.php");
}
?>
