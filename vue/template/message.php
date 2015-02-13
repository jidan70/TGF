<?php
include_once('../../modele/connexion_bdd.php');

$messages = $tgf_base->query('SELECT message, pseudo_message, DATE_FORMAT(date_creation, "%m-%d-%Y at %H:%i:%s") AS date_creation from chat ORDER BY date_creation DESC');

while($message = $messages->fetch())
{
?>
<div class="row">
  <div class="col-md-10 col-md-offset-0" style="margin-top:20px;margin-left:10px;margin-right:10px;border:solid 1px;border-radius:5px;background:#fff;padding:10px;">
    <p style="margin-top:10px;color:#000;"><?php echo '<strong>' . $message['pseudo_message'] . '</strong> -> <em>' . $message['date_creation'] . '</em> : </br>' . $message['message']; ?></p>
  </div>
</div>
<?php
}

$messages->closeCursor();
?>
