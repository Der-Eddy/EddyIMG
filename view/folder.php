<?php
function folder($folder, $displayAll = False) {
session_start();
require 'ranks.php';
if (isset($_SESSION['id'])){
    $login = True;
} else {
    $login = False;
}
$limit = 0;

echo "<div class='ui huge header'><i class='folder icon'></i>$folder</div>
        <table><tr>";

if ($login == true) {
    $open = array_merge(
        glob($folder.'/*.jpg'),
        glob($folder.'/*.png'),
        glob($folder.'/*.gif')
    );
    foreach ($open as $file)
    {
        $files[filectime($file)]=$file;
    }
    ksort($files);

    if (count($files) > 0){
    
    foreach (array_reverse($files) as $file) {
        echo "<th><div style=position:relative;>";
        if (filemtime($file) >= time() - 259200) {
            echo "<div class='ui red left corner label'><div class='text'>New</div></div>";
        }
        $uploader = explode(".", basename($file, ".jpg"));
        
        if (in_array($uploader[1], $globals)) { 
            $color = "orange";
        } elseif (in_array($uploader[1], $mods)) { 
            $color = "green";
        } else { 
            $color = "blue";
        }
        
        echo "<div class='ui bottom $color attached label'>" . $uploader[1] . "</div>";
        echo "<a href='$file' target='_blank'><img src=$file height='200'></a>";
        echo "</div></th>";
        $limit++;
        if ($displayAll == False && $limit == 5){
            echo "</tr></table>"
            . "<br><a href='index.php?dir=$folder'><div class='ui button'><i class='white large forward mail icon'></i>More pictures from this album</div></a>";
            break;
        }
        if ($displayAll == True && $limit == 5) {
            echo "</tr><tr>";
            $limit = 0;
        }
    }
        if ($displayAll == True || $limit > 0) {
            echo "</tr></table>";
        }
        
    } else {
        echo "<div class='ui icon message'>
    <i class='meh icon'></i>
    <div class='content'>
      <div class='header'>
        Looks like no one uploaded a picture for this tag yet!
      </div>
      <p>Be the first and upload a funny picture with this tag!</p>
    </div>
  </div>";
    }

} else {
    echo "<div class='ui icon message'>
    <i class='meh icon'></i>
    <div class='content'>
      <div class='header'>
        Looks like you have no rights to see this area!
      </div>
      <p>Login to see this pictures!</p>
    </div>
  </div>";
}

echo "<div class='ui horizontal divider'><img src='epvp.png' alt='Epvp Logo'></div>";
}
?>