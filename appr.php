<?php
//Sendet aktuelle Benutzer zur Freischaltung an meine Email und zeigt diese an
$email = "secret";

session_start();
if (!$_SESSION['id'] == "Der-Eddy") {
    die ("Bad Login");
}
    
if ( ($files = @scandir('appr/')) && (count($files) > 3) )
{
	foreach ($files as $file) {
            $msg = $file . "\\";
        }
        $msg = wordwrap ($msg, 70);
        mail($email, 'New Registrations', $msg);
}

echo $msg;
?>
