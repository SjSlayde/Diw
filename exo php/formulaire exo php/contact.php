<!DOCTYPE html>
<html lang="fr">

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jarditou</title>
    <link rel="stylesheet" href="css/cssjarditou.css">
    <link rel="stylesheet" href="css/media.css">
<body>
    <header>
        <div id="tete">
            <img src="/img/jarditou_logo.jpg" alt="jarditou" title="jarditou" id="images"><br>
            <h3 id="text">La qualité depuis 70 ans<h3>
        </div>
        <nav>
            <ul>
                <li><a href="Jarditou.html" title="Accueil">Acueil</a></li>
                <li><a href="tableauxHTLM.html" title="Tableau brabecue">Tableau</a></li>
                <li><a href="concatc.html" title="concatc">Contact</a></li>
            </ul>
        </nav>
        <img width="100%" src="img/promotion.jpg" alt="bannierejarditou" title="bannierejarditou">
    </header>
    <div id="parent">
    <article class="child">
    <h3>Formulaire de concact:</h3>
    <form id="form" action="script.php" method="POST" enctype="multipart/form-data">
        <fieldset>
            <p>*C'est zones sont obligatoires</p>
            <fieldset>
                <legend>Vos Coordonnées</legend>
                <label for="Nom">Nom*:</label><input type="text" name="nom" id="Nom" ><br>
                <label for="Prénom">Prénom*:</label><input type="text" name="Email" id="Prenom"><br>
                <br>
                <label for="Sexe">Sexe*:</label><input id="Sexe" type="radio" name="Sexe" >Féminin<input id="Sexe2" type="radio" name="Sexe">Masculin<br>
                <br>
                <label for="date">Date de naissance :</label><input type="date" name="ddn" id="date"><br>
                <label for="cp">Code Postal :</label><input type="text" name="CodePostal" id="cp"><br>
                <label for="Adresse">Adresse :</label><input type="text" name="Adresse" id="Adresse"><br>
                <label for="ville">Ville :</label><input type="text" name="ville" id="ville"><br>
                <label for="Email">Email :</label><input type="text" name="Email" placeholder="@gmai.com" id="Email"><br>
            </fieldset>
            <fieldset>
                <legend>Votre demande</legend>
                <label for="Sujet">Sujet*:</label>
                <select id="Sujet">
                    <option id="choix" value="" selected>Veuillez selectionner un produit</option>
                    <option value="Mescommandes">Mes commandes</option>
                    <option value="Questionsurunproduit"> Question sur un produit</option>
                    <option value="Réclamation">Réclamation</option>
                    <option value="Autre">Autres</option>
                </select><br>
                <label for="Demande">Votre question*:</label><textarea name="Demande" rows="4" cols="30" id="Demande"></textarea>
                <label for="fichier">Vous pouvez inserer des documents utile a votre demande.</label><input type="file" name="fichier" id="fichier">
            </fieldset>
            <br>
            <input id="validition" type="checkbox" name="case" ><label>* J'accepte le traitement informatique de ce formulaire.</label><br>
            <br>
            <button type="submit">Soumettre</button><input type="reset" value="Annuler">
        </fieldset>
    </form>
    </article>
    <div id="CD" class="child">[colonne Droite]</div>
    </div>
    <footer>
        <nav>
            <ul>
                <li><a href="fin.html" title="rick">Mention Légales</a></li>
                <li><a href="fin.html" title="rick">Horaires</a></li>
                <li><a href="fin.html" title="rick">Plan du site</a></li>
            </ul>
        </nav>
    </footer>
<script src="contactcheck.js"></script>
</body>

</html>