<?php
session_start();
print_r($_SESSION);
unset($_SESSION['email']);
unset($_SESSION['id']);
header("Location: index.php");


// if (isset($_GET['all'])) {
// 	# code...
// }














