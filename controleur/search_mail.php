<?php
  include_once('../modele/connexion_bdd.php');

  if (isset($_POST['mail']))
  {
    $search_mail = $tgf_base->prepare('SELECT mail FROM membres WHERE mail = :mail');
    $search_mail->execute(array(
      'mail' => $_POST['mail']
    ));

    $mail_find = $search_mail->fetch();

    if(!empty($mail_find)){
      echo 'exist';
    }
    else
    {
      echo 'not';
    }

  }
  else
  {
    echo 'dont';
  }
