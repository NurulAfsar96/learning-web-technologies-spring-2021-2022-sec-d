<?php
session_start();
if (!isset($_COOKIE['status'])) {
	header('Location: Login.php');
}

?>