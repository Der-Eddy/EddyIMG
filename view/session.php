<?php
  session_start();
  if (isset($_SESSION['id'])){
      $login = True;
  } else {
      $login = False;
  }
  $file = "auth/" . $_SESSION['id'] . ".php";
  $crypt = file_get_contents($file);
  if ($_SESSION['pass'] != substr($crypt, -6)) {
      session_unset();
      echo "<meta http-equiv=''refresh'' content=''0; URL=./index.php''>";
  }
?>