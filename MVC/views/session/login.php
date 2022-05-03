<div class="container-auto">

<H1>Connexion</H1>


<?php if (!isset($_SESSION["user_is_connect"])) : ?>

    <form method="POST" class="form">
        <div>
            <label for="username">Nom d'utilisateur</label>
            <input type="text" id="username" name="username" placeholder="Entrer votre nom d'utilisateur" aria-describedby="usernameHelp">
        </div>
        <div>
            <label for="password">Mot de passe</label>
            <input type="password" id="password" name="password" placeholder="Entrer votre mot de passe">
        </div>
        <button type="submit">Se connecter</button>
    </form>

    <?php
    if ((isset($options["responseType"])) && ($options["responseType"] === "error")) {
            echo "Identifiant ou mot de passe incorrect";
        }
    ?>

<?php else : ?>
    <h4>Connexion réussie en tant qu'admin </h4>
    <h5>Vous pouvez ajouter, consulter, modifier ou supprimer <a href="?page=news">les articles</a></h5>
<?php endif; ?>