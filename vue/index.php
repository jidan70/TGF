<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Team Gone Fly</title>
  <link rel="stylesheet" href="bootstrap/dist/css/bootstrap_cyborg.min.css">
  <link rel="stylesheet" href="css/tgf.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
  <style>
  .icon-soc{
    color:#4682b4;
  }
  </style>

</head>
<body>


  <div>

    <?php include('template/header.php') ?>

    <div style="margin-top:20px;">
      <div class="row col-md-offset-2 col-xs-offset-3">
        <div class="g-ytsubscribe" data-channel="teamgeniusfilms" data-layout="full" data-count="hidden"></div>
      </div>

      <div class="col-md-10 col-md-offset-0 col-xs-10" style="border-radius:5px;margin-top:10px;">
        <div class="col-xs-10 col-xs-offset-2">
          <div class="media embed-responsive embed-responsive-16by9">
            <iframe width="854" height="510" src="https://www.youtube.com/embed/MAbTMslDKCM" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>


    <div class="hidden-xs hidden-sm col-md-1 col-xs-1" style="margin-top:10px;">
      <p><a href="http://instagram.com/daddyo_tgf_ceo/" target="_blank"><i class="fa fa-instagram fa-5x icon-soc"></i></a></p>
      <p><a href="https://www.youtube.com/channel/UCz9_dH1ROZOPpbylOeGcJeg" target="_blank"><i class="fa fa-youtube-square fa-5x icon-soc"></i></a></p>
      <p><a href="https://www.facebook.com/daddyo62ent" target="_blank"><i class="fa fa-facebook-official fa-5x icon-soc"></i></a></p>
      <p><a href="https://twitter.com/thereal_daddyo" target="_blank"><i class="fa fa-twitter-square fa-5x icon-soc"></i></a></p>
    </div>
    <div class="hidden-md hidden-lg col-md-1 col-xs-1" style="margin-top:10px;">
      <p><a href="http://instagram.com/daddyo_tgf_ceo/" target="_blank"><i class="fa fa-instagram fa-3x icon-soc"></i></a></p>
      <p><a href="https://www.youtube.com/channel/UCz9_dH1ROZOPpbylOeGcJeg" target="_blank"><i class="fa fa-youtube-square fa-3x icon-soc"></i></a></p>
      <p><a href="https://www.facebook.com/daddyo62ent" target="_blank"><i class="fa fa-facebook-official fa-3x icon-soc"></i></a></p>
      <p><a href="https://twitter.com/thereal_daddyo" target="_blank"><i class="fa fa-twitter-square fa-3x icon-soc"></i></a></p>
    </div>
  </div>

  <div>

    <?php include('template/footer.php') ?>

  </div>

  <?php include('template/script.php') ?>
  <script src="https://apis.google.com/js/platform.js"></script>

</body>
</html>
