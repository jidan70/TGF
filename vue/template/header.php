<div class="row hidden-xs hidden-sm menu-nav" style="padding-top:20px;">
  <div id="header" class="col-md-12 col-md-offset-0" style="border:#4682B4 solid 4px;border-top:none;border-radius:0px 0px 25px 25px;padding-bottom:10px;padding-top:10px;">
    <div id="titre-div">
      <div  id="titre-div" class="col-md-12 col-md-offset-0">
        <h1 id="team-gone-fly" style="transform: rotate(-7deg);z-index:30;text-shadow:0 0 10px #000000" class="text-center col-xs-7 col-md-offset-2">TEAM GONE FLY</h1>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-1" style="margin-top:10px;">
      <nav class="navbar navbar-default" style="border:#2a9fd6 solid 4px;background:rgba(136,136,136,0.7)">
        <ul class="nav navbar-nav">
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="index"><i class="fa fa-home"></i> Home </a></li>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="mixtapes"><i class="fa fa-download"></i> Mixtapes </a></li>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="pictures"><i class="fa fa-camera-retro"></i> Pictures </a></li>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="videos"><i class="fa fa-video-camera"></i> Videos </a></li>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="chat"><i class="fa fa-comment-o"></i> Chiraq-Chat </a></li>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="shop"><i class="fa fa-shopping-cart"></i> Shop </a></li>
<?php
if (isset($_SESSION['pseudo']) && isset($_SESSION['id_log']))
{
?>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="controleur/logout"><i class="fa fa-user-times"></i> Log out </a></li>
<?php
}
else
{
?>
          <li style="font-family:TrueLies;" class="navigation-champ"><a style="color:#000;font-weight:bold" id="login" href="#"><i class="fa fa-user"></i> Log in </a></li>
<?php
}
?>
        </ul>
      </nav>
    </div>
    </div>
  </div>

<div id="arriere-login">
</div>

  <div id="login-window">
    <div class="col-md-12 col-offset-0">
      <fieldset>
        <h1 style="color:rgb(6,6,6)" class="font-global text-center">Log in</h1>
        <hr/>
        <form action="controleur/connexion" id="form-connexion" method="post">
          <p class="text-form"><label for="pseudo">Name</label><input type="text" name="pseudo" id="pseudo" class="form-control"/></p>
          <p class="text-form"><label for="pass">Password</label><input type="password" name="pass" id="pass" class="form-control"/>
          <span class="verif-zone" id="verif-login"> </span>
          </p>
          <input id="bouton-log-form" type="submit" class="btn btn-default" value="Log in"/>
        </form>
      </fieldset>
      <fieldset>
        <h1 style="color:rgb(6,6,6)" class="font-global text-center">Sign up</h1>
        <hr/>
        <form action="controleur/signup" method="post">
          <p class="text-form"><label for="pseudo_new">Name </label>
            <input type="text" name="pseudo_new" id="pseudo_new" class="form-control"/><span class="verif-zone" id="verif-pseudo"> </span>
          </p>
          <p class="text-form"><label for="mail">Email</label>
            <input type="mail" name="mail" id="mail" class="form-control"/><span class="verif-zone" id="verif-mail"> </span>
          </p>
          <p class="text-form"><label for="new_pass">Password</label>
            <input type="password" name="new_pass" id="new_pass" class="form-control"/><span class="verif-zone" id="verif-pass"> </span>
          </p>
          <p class="text-form"><label for="pass_verif">Password Verification</label>
            <input type="password" name="pass_verif" id="pass_verif" class="form-control"/><span class="verif-zone" id="verif-pass2"> </span>
          </p>
          <input type="submit" id="bouton-signup" class="btn btn-default" value="Sign up"/>
        </form>
      </fieldset>
    </div>
  </div>

<div class="row hidden-lg hidden-md menu-nav">
  <div id="header" class="col-md-10 col-md-offset-1" style="border:#4682B4 solid 4px;border-top:none;border-radius:0px 0px 5px 5px;padding-bottom:10px;padding-top:30px;">
    <div>
      <div class="col-md-12">
        <h1 id="team-gone-fly" class="text-center">TEAM GONE FLY</h1>
      </div>
    </div>
    <div class="col-md-10 col-md-offset-2" style="margin-top:10px;">
      <nav class="navbar navbar-default" style="border:#2a9fd6 solid 4px;background:rgba(136,136,136,0.7)">
        <ul class="nav navbar-nav">
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="vue/index"><i class="fa fa-home"></i> Home </a></li>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="vue/mixtapes"><i class="fa fa-download"></i> Mixtapes </a></li>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="vue/pictures"><i class="fa fa-camera-retro"></i> Pictures </a></li>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="vue/videos"><i class="fa fa-video-camera"></i> Videos </a></li>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="vue/chat"><i class="fa fa-comment-o"></i> Chiraq-Chat </a></li>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="vue/shop"><i class="fa fa-shopping-cart"></i> Shop </a></li>
<?php
if (isset($_SESSION['pseudo']) && isset($_SESSION['id_log']))
{
?>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" href="controleur/logout"><i class="fa fa-user-times"></i> Log out </a></li>
<?php
}
else
{
?>
          <li style="font-family:TrueLies;text-align:center;" class="navigation-champ"><a style="color:#000;font-weight:bold" id="login2" href="#"><i class="fa fa-user"></i> Log in </a></li>
<?php
}
?>

        </ul>
      </nav>
    </div>
  </div>
</div>
