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
  </style>

</head>
<body>
  <div>

    <?php include('template/header.php') ?>

    <div class="col-md-10 col-md-offset-1" style="border-radius:5px;margin-top:80px;padding-top:15px;">

    <section class="row">

          <div class="media-body col-md-10 col-md-offset-1" style="margin-bottom:15px;">
            <div class="btn-group" data-toggle="buttons">
              <label style="color:#000;font-family:TransformersMovie;border-left:solid 1px;" class="btn btn-primary">
                <input type="radio">REGGIE BAYBEE X DADDYO - BLESSING (REMAKE)
              </label>
              <label style="color:#000;font-family:TransformersMovie;border-left:solid 1px;" class="btn btn-primary">
                <input type="radio">Vidéo 2
              </label>
              <label style="color:#000;font-family:TransformersMovie;border-left:solid 1px;" class="btn btn-primary">
                <input type="radio">Vidéo 3
              </label>
            </div>
          </div>
          <div class="col-md-10 col-md-offset-1">
            <div class="embed-responsive embed-responsive-16by9">
              <iframe width="854" height="510" src="https://www.youtube.com/embed/3CxoKV8lKkM" frameborder="0" allowfullscreen></iframe>
            </div>
          </div>

    </section>

  </div>


  </div>

<?php include('template/script.php') ?>


<script>
$(function (){
        $('.carousel').carousel();
        $('blockquote a').tooltip();
        $('.btn-group .btn:nth-child(1)').click(function () {
          $('iframe').attr('src', 'https://www.youtube.com/embed/3CxoKV8lKkM');
        })
        $('.btn-group .btn:nth-child(2)').click(function () {
          $('iframe').attr('src', 'http://www.youtube.com/embed/fRAG4T-iqqY');
        })
        $('.btn-group .btn:nth-child(3)').click(function () {
          $('iframe').attr('src', 'http://www.youtube.com/embed/yua4jzecCIE');
        })
      });
</script>


</body>
</html>
