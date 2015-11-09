<?php 
session_start();

$filetype = GetImageSize($_FILES['file']['tmp_name']);
if($filetype[2] != 0)
   {
      $name = explode(".", $_FILES['file']['name']);
      $name[0] = preg_replace("/[^a-zA-Z0-9]+/", "", $name[0]) . $_FILES['file']['size'];
      move_uploaded_file($_FILES['file']['tmp_name'], $_POST['folder'] . "/" . $name[0] . "." . $_SESSION['id'] . "." . $name[1]);
      echo "Sucessfully uploaded!<br>"
      . "<a href='index.php'>Link</a>"
      . "<meta http-equiv='refresh' content='1; URL=./index.php'>";

    }

else
    {
    echo "Bad upload";
    }

?>

