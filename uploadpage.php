  <div class="ui blue animated button" id ="upload"><i class="white large upload disk icon"></i>Upload Image!</div>
  <a href="logout.php"><div class="ui red button" id ="logout"><i class="white large lock icon"></i>Logout</div></a>
  <div class="ui modal">
  <i class="close icon"></i>
  <div class="header">
    <i class="large cloud upload icon"></i> Image Upload
  </div>
  <div class="content">
    <div class="left">
      <form enctype="multipart/form-data" method="post" action="upload.php">
        Choose your Tag here:<br><br>
        <select name="folder"> 
        <option value="" selected="Tag"></option>
        <option VALUE="Anime">Anime</option>
        <option VALUE="Hentai-Ecchi">Hentai/Ecchi</option>
        <option VALUE="GIF">GIF</option>
        <option VALUE="S4 League">S4 League</option>
        </select>
        <br><br><br>Choose your picture here:<br><br>
<input name="file" type="file"/><br /><br />
<input type="submit" class="ui green button" value="Ok" style="float:right;">
</form>
    </div>
  </div>
</div>
