<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>EddyIMG</title>

  <link href='//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="./Semantic-UI/build/packaged/css/semantic.css">

  <script src="//code.jquery.com/jquery-2.1.4.min.js"</script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src="./Semantic-UI/build/packaged/javascript/semantic.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
</head><body>
  <?php 
    require 'session.php';
    require 'folder.php';?>
  <a href="./index.php" id="header"><div class="ui huge header"><i class="cloud icon"></i>EddyIMG</div></a>
  Probably an ImageHoster
  <div class="blue ui message"><div class="ui red left corner label"><div class="text">New</div></div>Wahrscheinlich lade ich hier Bilder hoch</div>
  <div class="ui horizontal divider"><img src="epvp.png" alt="Epvp Logo"></div>
  
  <?php
  if ($_GET['site'] == "register") {
      require 'registerpage.php';
      die;
  } elseif ($_GET['site'] == "about") {
      require 'about.php';
      die;
  }
  if (!isset($_GET['dir'])) {
      folder("Anime");
      folder("Hentai/Ecchi");
      folder("GIF");
      folder("S4 League");
  } else {
      folder($_GET['dir'], True);
  }
  ?>
  
  <div id="footer" style="color: #555555"><a href="./index.php?site=about"><i class="info letter icon"></i>About</a> | <a href="http://www.elitepvpers.com"><i class="external url icon"></i>Elitepvpers</a></div>
  <div class="ui right blue corner label"><div class="text">Beta</div></div>
  
  <?php
  if ($login == True) {
      require 'uploadpage.php';
  } else {
      require 'loginpage.php';
  }
  ?>
  
  <script>
    $('.ui.modal')
        .modal();
    $('.login.modal')
        .modal();
    $('#upload').click(function(){
      $('.ui.modal')
        .modal("show");
    });
    $('#login').click(function(){
      $('.login.modal')
        .modal("show");
    });
    
  </script>
</body>
