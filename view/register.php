<?php
$file = "appr/" . $_POST['user'] . ".php";
if (file_exists($file)) {
    echo "User already exists!";
    echo "<meta http-equiv='refresh' content='5; URL=./index.php'>";
    die;
}

$crypt = crypt ( $_POST['pass'], '$2a$13$' . sha1(preg_replace("/[^a-zA-Z0-9]+/", "", $_POST['user'])) . md5("4e707693b984367ed707693b984367edadf5a022867e") );;
file_put_contents($file, $crypt);

?>

<meta http-equiv="refresh" content="5; URL=./index.php">
Du wirst vom Administrator freigeschalten<br>
Schickt am besten noch eine private Nachricht an Der-Eddy aus Elitepvpers<br><br>
<a href="index.php">Link</a>