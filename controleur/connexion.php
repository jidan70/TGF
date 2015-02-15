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
      $_SESSION['pseudo'] = $log['pseudo'];
      $_SESSION['id_log'] = $log['id'];
      $search_log->closeCursor();
      header('Location: ../index');
    }
    else
    {
      $search_log->closeCursor();
      header('Location: ../index');
    }
  }
  else
  {
    header('Location: ../index');
  }
