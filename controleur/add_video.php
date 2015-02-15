<?php
include('../modele/connexion_bdd.php');

  if (isset($_POST['v_id']) && isset($_POST['title']))
  {
    $add_video = $tgf_base->prepare('INSERT INTO videos(v_id, title) VALUES(:v_id, :title)');
    $add_video->execute(array(
      'v_id' => $_POST['v_id'],
      'title' => $_POST['title'],
    ));

    header('Location: ../videos');
  }
