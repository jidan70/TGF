<?php
  include_once('../modele/connexion_bdd.php');

  if (isset($_POST['pseudo']))
  {
    $search_pseudo = $tgf_base->prepare('SELECT pseudo FROM membres WHERE pseudo = :pseudo');
    $search_pseudo->execute(array(
      'pseudo' => $_POST['pseudo']
    ));

    $pseudo_find = $search_pseudo->fetch();

    if(!empty($pseudo_find)){
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
