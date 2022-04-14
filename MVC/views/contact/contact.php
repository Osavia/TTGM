<?php
if (
    (!isset($_POST['email']) || !isset($_POST['message']))
    || (empty($_POST['email']) || empty($_POST['message']))
) { ?>

    <h1>Nous contacter</h1>

    <form method="POST">
        <div>
            <label for="email">Email</label>
            <input type="email" placeholder="Saisissez votre mail" id="email" name="email" aria-describedby="email-help">
            <!-- <div id="">Nous ne conserverons pas votre email.</div> -->
        </div>
        <div>
            <label for="message">Votre message</label>
            <textarea placeholder="Exprimez vous" id="message" name="message"></textarea>
        </div>
        <button type="submit">Envoyer</button>
        <!-- <p>Merci de bien saisir un email et un message.</p> -->
    </form>
<?php } else { ?>

    <h1>Message bien reçu !</h1>

    <h4>Nous reviendrons vers vous dès que possible</h4>

    <div>

        <div>
            <h5>Rappel de vos informations</h5>
            <p>Email : <?php echo ($_POST['email']); ?></p>
            <p>Message : <?php echo strip_tags($_POST['message']); ?></p>
        </div>

    </div>
<?php } ?>




