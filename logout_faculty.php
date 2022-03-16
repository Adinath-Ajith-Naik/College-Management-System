<?php

session_start();

if(isset($_SESSION['faculty_id']))
{
	unset($_SESSION['faculty_id']);

}

header("Location: home.php");
die;