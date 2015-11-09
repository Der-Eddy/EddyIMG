<?php
session_start();
$_SESSION['id'] = '';
$_SESSION['pw'] = '';
session_unset();
?>
<meta http-equiv="refresh" content="0; URL=./index.php">
<a href="index.php">Link</a>