<!DOCTYPE html>
<head>
  <meta charset="utf-8" />
  <title>Epvp Quotes - by Mods</title>

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="../vendor/semantic/ui/build/packaged/css/semantic.css">

  <script src="../vendor/components/jquery/jquery.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.address/1.6/jquery.address.js"></script>
  <script src="../vendor/semantic/ui/build/packaged/javascript/semantic.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
</head><body>
  <?php 
    require 'session.php';
    require 'folder.php';?>
  <a href="./index.php" id="header"><div class="ui huge header"><i class="cloud icon"></i>Epvp Mods Quotes</div></a>
  Quotes from Mods - For Mods
  <div class="blue ui message"><div class="ui red left corner label"><div class="text">New</div></div>Weil wir Epvp Mods sind bekommen wir fast täglich witzige Nachrichten von Usern zu lesen. Diese Seite sammelt nun eben solche lustige Nachrichten!</div>
  <div class="ui horizontal divider"><img src="epvp.png" alt="Epvp Logo"></div>
  
  <?php
  if ($_GET['site'] == "register") {
      require 'registerpage.php';
      die;
  }
  if (!isset($_GET['dir'])) {
      folder("PMs");
      folder("Complaints");
      folder("Metin2");
      folder("S4 League");
  } else {
      folder($_GET['dir'], True);
  }
  ?>
  
  <div id="footer" style="color: #555555"><a href="../../impressum.php"><i class="info letter icon"></i>Impressum</a> | <a href="http://www.elitepvpers.com"><i class="external url icon"></i>Elitepvpers</a></div>
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
    
    <!-- Piwik -->
  var _paq = _paq || [];
  _paq.push(["setDocumentTitle", document.domain + "/" + document.title]);
  _paq.push(["trackPageView"]);
  _paq.push(["enableLinkTracking"]);

  (function() {
    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://eddy-dev.net/piwik/";
    _paq.push(["setTrackerUrl", u+"piwik.php"]);
    _paq.push(["setSiteId", "3"]);
    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
  })();
<!-- End Piwik Code -->
  </script>
</body>