<?php 
    session_start();
    session_unset();
    #$_SESSION['id'] = $_POST['user'];
    #$_SESSION['pw'] = $_POST['pass'];
    #print_r($_SESSION);
    
    $file = "auth/" . $_POST['user'] . ".php";
    if (!file_exists($file)) {
        echo "Bad Login!<br><a href='index.php'>Link</a>";
        echo "<meta http-equiv='refresh' content='5; URL=./index.php'>";
        die;
    }
    
    $crypt = crypt ( $_POST['pass'], '$2a$13$' . sha1(preg_replace("/[^a-zA-Z0-9]+/", "", $_POST['user'])) . md5("4e707693b984367ed707693b984367edadf5a022867e") );
    if (file_get_contents($file) == $crypt){
        echo "Login granted!<br>";
        $_SESSION['id'] = $_POST['user'];
        $_SESSION['pass'] = substr($crypt, -6);
    } else {
        echo "Bad Login!<br><a href='index.php'>Link</a>";
        echo "<meta http-equiv='refresh' content='5; URL=./index.php'>";
        die;
    }

?>
<meta http-equiv="refresh" content="1; URL=./index.php">
<a href="index.php">Link</a>