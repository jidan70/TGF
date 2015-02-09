<?php
include('../modele/connexion_bdd.php')
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
  </style>

</head>
<body>
  <div>

    <?php include('template/header.php') ?>

    <div class="col-md-10 col-md-offset-1" style="border-radius:5px;margin-top:80px;padding-top:15px;">
      <form class="col-md-4 col-md-offset-4" action="../controleur/add_video.php" method="post">
        <p><input class="form-control" type="text" name="v_id" placeholder="enter the v_id (www.youtube.com/watch?v='THIS')"/></p>
        <p><input class="form-control" type="text" name="title" placeholder="enter the title"/></p>
        <p><input class="btn btn-primary" type="submit" value="add the video" /></p>
    </div>

    <div class="col-md-10 col-md-offset-1" style="border-radius:5px;margin-top:80px;padding-top:15px;">

    <section class="row">

          <div class="col-md-10 col-md-offset-1" style="margin-bottom:15px;">

            <div class="btn-groupe" data-toggle="buttons">
              <?php
              $videos = $tgf_base->query('SELECT title FROM videos ORDER BY id DESC');

              while($video = $videos->fetch())
              {
              ?>
              <label style="color:#000;font-family:TransformersMovie;border-left:solid 1px;margin-bottom:2px;" class="btn btn-primary">
                <input type="radio"><?php echo $video['title'] ;?>
              </label>
              <?php
              }
              $videos->closeCursor();
              ?>
          </div>

        </div>

          <div class="col-md-10 col-md-offset-1">
            <div class="embed-responsive embed-responsive-16by9">
              <?php
              $first = $tgf_base->query('SELECT title, v_id FROM videos ORDER BY id DESC');

              $firs = $first->fetch()
              ?>
              <iframe width="854" height="510" src="https://www.youtube.com/embed/<?php echo $firs['v_id']; ?>" frameborder="0" allowfullscreen></iframe>
              <?php
              $videos->closeCursor();
              ?>
            </div>
          </div>



    </section>

  </div>

  <?php include('template/footer.php') ?>

  </div>

<?php include('template/script.php') ?>


<script>
$(function (){
        $('.carousel').carousel();
        $('blockquote a').tooltip();

        <?php
        $links = $tgf_base->query('SELECT v_id FROM videos ORDER BY id DESC');
        $video_number = 1;
        while($link = $links->fetch())
        {
        ?>
        $('.btn-groupe .btn:nth-child(<?php echo $video_number ;?>)').click(function () {
          $('iframe').attr('src', 'https://www.youtube.com/embed/<?php echo $link['v_id'] ;?>');
        })
        <?php
        $video_number ++;
        }
        $links->closeCursor();
        ?>
      });
</script>


</body>
</html>
