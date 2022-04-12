<?php
// On appelle la session
// session_start();
// On vide toutes les variables de session
$_SESSION = array();
// On détruit la session
session_destroy();

echo ('Vous avez été déconnecté');

?>