  <div class="ui green button" id ="login"><i class="white large unlock icon"></i>Login</div>
  <a href="index.php?site=register"><div class="ui orange button" id ="register"><i class="white large key icon"></i>Register</div></a>
  <div class="login modal">
  <i class="close icon"></i>
  <div class="header">
    <i class="large unlock icon"></i> Login
  </div>
  <div class="content">
    <div class="left">
      <form action="auth.php" method="post">
<div class="ui form segment" id="form">
  <div class="field">
    <label>Username</label>
    <div class="ui left labeled icon input">
      <input placeholder="Username" type="text" name="user">
      <i class="user icon"></i>
    </div>
  </div>
  <div class="field">
    <label>Password</label>
    <div class="ui left labeled icon input">
      <input type="password" name="pass">
      <i class="lock icon"></i>
    </div>
  </div>
    <input type="submit" class="ui green button" value="Ok" style="float:right;">
</div>
</form>
    </div>
  </div>
</div>