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

        <h2>Contactez-nous !</h2>
        <p>
            Que ce soit pour une information complémentaire, un renseignement
            pour l'organisation de votre séjour ou tout simplement poser une question.
        </p>

        <div class="container-auto">

            <form action="?page=contact_sub" method="POST" class="form">
                <div>
                    <label for="email">Email :</label>
                    <input type="email" placeholder="Saisissez votre mail" id="email" name="email" required aria-describedby="email-help">
                    <!-- <div id="">Nous ne conserverons pas votre email.</div> -->
                </div>
                <div>
                    <label for="object">Objet :</label>
                    <input type="text" placeholder="Objet du message" id="object" name="object" required></input>
                </div>
                <div>
                    <label for="message">Votre message :</label>
                    <textarea placeholder="Exprimez vous" id="message" name="message" required></textarea>
                </div>
                <button type="submit">Envoyer</button>
                <!-- <p>Merci de bien saisir un email et un message.</p> -->
            </form>
        </div>