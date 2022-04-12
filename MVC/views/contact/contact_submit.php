<?php

if (
    (!isset($_POST['email']) || !isset($_POST['message']))
    || (empty($_POST['email']) || empty($_POST['message']))
) {
    echo ('Pour nous contacter, merci de bien saisir un email et un message.');
    return;
}

$email = $_POST['email'];
$message = $_POST['message'];

?>

<h1>Message bien reçu !</h1>

<h4>Nous reviendrons vers vous dès que possible</h4>

<div>

    <div>
        <h5>Rappel de vos informations</h5>
        <p>Email :<?php echo ($email); ?></p>
        <p>Message : <?php echo strip_tags($message); ?></p>
    </div>

</div>