
<html>
<!-- ouverture de mon formulaire -->
<form action="/ma-page-de-traitement" method="get">

<!-- entrée des champs -->

    <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name">
    </div>

    <div>
        <label for="ville">Ville :</label>
        <input type="text" id="ville" name="user_town">
    </div>

    <div>
        <label for="phone">Téléphone :</label>
        <input type="text" id="tel" name="user_phone">
    </div>


    <div>
        <label for="mail">E-mail :</label>
        <input type="email" id="mail" name="user_mail">
    </div>

    <!-- création de l'input pour valider -->

    <input type="submit" name="valider" value="OK"/>

</form>
<!-- fermeture de mon formulaire -->
</html>


<!-- affichage des données récupérées avec echo (ça ne marche pas...) -->
<?php
echo "Nom: ".$_GET["user_name"]."<br />";
echo "Ville: ".$_GET["user_town"]."<br />";
echo "Téléphone: ".$_GET["user_phone"]."<br />";
echo "Email: ".$_GET["user_mail"]."<br />";




// RESSOURCES : 
// https://developer.mozilla.org/fr/docs/Web/Guide/HTML/Formulaires/Mon_premier_formulaire_HTML?fbclid=IwAR149p577Hrv4vCcM9I3Sh2O10a6XWyotB2vuSXtHSmPg4ggH4WCkB4CpU4
// https://sylvie-vauthier.developpez.com/tutoriels/php/grand-debutant/?page=formulaires&fbclid=IwAR149p577Hrv4vCcM9I3Sh2O10a6XWyotB2vuSXtHSmPg4ggH4WCkB4CpU4
