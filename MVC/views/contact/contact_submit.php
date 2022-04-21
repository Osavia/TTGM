    <!-- Affichage du page title : -->

    <div class="page-title">
        <div class="container-auto">
            <div class="page-path">
                <h1>Nous contacter</h1>
                <div class="row-center">
                    <a href="?page=home">ACCUEIL</a>
                    <span> / NOUS CONTACTER</span>
                </div>
            </div>
        </div>
    </div>

    <div class="container-auto">

<h1>Message bien reçu !</h1>

<h4>Nous reviendrons vers vous dès que possible</h4>

<div>

    <div>
        <h5>Rappel de vos informations</h5>
        <p>Email : <?php echo ($_POST['email']); ?></p>
        <p>Objet : <?php echo ($_POST['object']); ?></p>
        <p>Message : <?php echo strip_tags($_POST['message']); ?></p>
    </div>

</div>