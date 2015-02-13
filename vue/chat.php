<?php
session_start();
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
  <?php include('template/smiley.php') ?>
  <div id="ar-fenetre-modale"></div>


  <div>

    <?php include('template/header.php') ?>


      <div id="chat-section" class="chat-section col-md-10 col-md-offset-1" style="border:#2a9fd6 solid 2px;border-radius:4px;background:rgba(136,136,136,0); margin-top:40px;padding-bottom:40px;">
          <h1 class="text-center font-global">Chiraq</h1>
          <hr style="margin-bottom:30px;"/>
        <div class="col-md-5 col-md-offset-1" style="height:700px;overflow:scroll;border:#2a9fd6 solid 1px;border-radius:5px;">
          <div id="message">

          </div>
        </div>

        <fieldset class="col-md-4 col-md-offset-1" style="border:#2a9fd6 solid 3px;border-radius:4px;background:rgba(136,136,136,0.9);padding:10px;">
          <form id="form-chat" action="../controleur/envoi_message.php" method="post">
            <?php
            if(isset($_SESSION['pseudo']))
            {
            ?>
            <p class="text-center"><textarea class="form-control" id="enter_champ" name="message" placeholder="enter your message here"></textarea><p>
            <?php
            }
            else
            {

            ?>
            <p class="text-center"><textarea class="form-control" id="enter_champ"  name="message" disabled placeholder="enter your message here"></textarea><p>
            <?php
            }
            ?>
            <a id="smiley"><i style="margin-left:10px;cursor:pointer;color:rgb(6,6,6);" class="fa fa-smile-o fa-2x"></i></a>
            <input id="send" type="submit" class="btn btn-default pull-right" value="send">
          </form>
        </fieldset>
      </div>

      <?php include('template/footer.php') ?>

  </div>

  <?php include('template/script.php') ?>
  <script src="js/message.js"></script>
  <script>

  var bouton_smiley = document.getElementById('smiley');
  var tableau_smiley = document.getElementById('tableau-smiley');
  var form_chat = document.getElementById('form-chat');
  var fond_modal = document.getElementById('ar-fenetre-modale');
  var smileys = document.querySelectorAll('#tableau-smiley img');
  var enter_champ = document.getElementById('enter_champ');
  var nbr_sml = smileys.length;

  bouton_smiley.addEventListener('click', function(e) {

    e.preventDefault();
    if (tableau_smiley.style.display == "none" ){
      tableau_smiley.style.display = "block";
      fond_modal.style.display = "block";
    }
    else{
      tableau_smiley.style.display = "none";
      fond_modal.style.display = "none";
    }

  }, false);

  fond_modal.addEventListener('click', function(e) {
    tableau_smiley.style.display = "none";
    fond_modal.style.display = "none";
  }, false);

  for(var i = 0; i < nbr_sml; i++){
    smileys[i].addEventListener('click',function(e) {
      var text_integr = "(" + e.target.id + ")";
      enter_champ.value += text_integr;
    }, false);
  }




  </script>
</body>
</html>
