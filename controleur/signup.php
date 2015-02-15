<?php
  include_once('../modele/connexion_bdd.php');
  session_start();

  if(isset($_POST['pseudo_new']) && isset($_POST['mail']) && isset($_POST['new_pass']) && isset($_POST['pass_verif']) )
  {
    if($_POST['new_pass'] == $_POST['pass_verif'] && preg_match('#^[A-Za-z\d_-]{7,}$#i', $_POST['pseudo_new']) && preg_match('#^[A-Za-z0-9\._-]+@[A-Za-z0-9\._-]+\.[A-Za-z]{2,6}$#i', $_POST['mail']))
    {
    $search_info = $tgf_base->prepare('SELECT mail, pseudo FROM membres WHERE mail = :mail_recept AND pseudo = :pseudo_verif');
    $search_info->execute(array(
      'mail_recept' => $_POST['mail'],
      'pseudo_verif' => $_POST['pseudo_new']
    ));
    $info_find = $search_info->fetch();

      if (empty($info_find))
      {
      $name = htmlspecialchars($_POST['pseudo_new']);
      $mail = htmlspecialchars($_POST['mail']);
      $pass = sha1($_POST['new_pass']);
      $integration_donnee = $tgf_base->prepare('INSERT INTO membres(pseudo, password, mail, date_signup)VALUES(:pseudo, :pass, :mail, NOW())');
      $integration_donnee->execute(array(
        'pseudo' => $name,
        'pass' => $pass,
        'mail' => $mail
      ));
      $integration_donnee->closeCursor();

      //connexion directly
      $selection_id = $tgf_base->prepare('SELECT id from membres WHERE mail = :mail AND pseudo = :pseudo');
      $selection_id->execute(array(
        'mail' => $mail,
        'pseudo' => $name
      ));
      $id_selected = $selection_id->fetch();

      $_SESSION['pseudo'] = $name;
      $_SESSION['id_log'] = $id_selected['id'];

      $selection_id->closeCursor();
      header('Location: ../index');
      }
    }
    else
    {
    header('Location: ../index');
    }
  }
  else
  {
    header('Location: ../index');
  }
