<?php
  include_once('../modele/connexion_bdd.php');
  session_start();

  if(isset($_POST['pseudo']) && isset($_POST['pass']))
  {
    $pass = sha1($_POST['pass']);
    $search_log = $tgf_base->prepare('SELECT pseudo, password, id FROM membres WHERE pseudo = :pseudo AND password = :pass');
    $search_log->execute(array(
      'pseudo' => $_POST['pseudo'],
      'pass' => $pass
    ));

    $log = $search_log->fetch();
    if(!empty($log))
    {
      echo 'vrai';
    }
    else
    {
      $search_log->closeCursor();
      echo 'false';
    }
  }
  else
  {
      echo 'nothing';
  }
