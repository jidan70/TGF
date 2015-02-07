<?php
include_once('../modele/connexion_bdd.php');

if (isset($_POST['message']))
{
  $insertion_message = $tgf_base->prepare('INSERT INTO chat(message, date_creation) VALUES(:message, NOW())');
  $insertion_message->execute(array(
    'message' => $_POST['message']
  ));
  header('Location: ../vue/chat.php');
}
