<?php
include_once('../modele/connexion_bdd.php');
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <!--  <meta http-equiv="Refresh" content="1" URL="http://localhost/TGF/vue/chat.php"> -->
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

    <div class="chat col-md-10 col-md-offset-1" style="margin-top:50px;">

      <fieldset class="col-md-4 col-md-offset-4" style="border:#2a9fd6 solid 3px;border-radius:4px;background:rgba(136,136,136,0.9);padding:10px;">
        <form action="../controleur/envoi_message.php" method="post">
          <p class="text-center"><textarea class="form-control" name="message" id="message" placeholder="enter your message here"></textarea><p>
          <input type="submit" class="btn btn-primary pull-right" value="send">
        </form>
      </fieldset>

    </div>

      <div id="chat-section" class="chat-section col-md-10 col-md-offset-1" style="border:#2a9fd6 solid 2px;border-radius:4px;background:rgba(136,136,136,0.2); margin-top:40px;">
        <h1 class="text-center font-global">Chiraq</h1>
        <hr style="margin-bottom:30px;"/>
        <?php
        $messages = $tgf_base->query('SELECT message from chat ORDER BY date_creation DESC');

        while($message = $messages->fetch())
        {
        ?>
        <div class="row">
          <div class="col-md-4 col-md-offset-1" style="margin-top:20px;border:solid 1px;border-radius:5px;background:#fff;">
            <p style="margin-top:10px;color:#000;"><?php echo nl2br(htmlspecialchars($message['message'])); ?></p>
          </div>
        </div>
        <?php
        }

        $messages->closeCursor();
        ?>

      </div>

      <?php include('template/footer.php') ?>

  </div>

  <?php include('template/script.php') ?>


</body>
</html>
