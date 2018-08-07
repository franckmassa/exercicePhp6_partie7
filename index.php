<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <title>Exercice6</title>
    </head>
    <body>
        <?php
        //On masque le formulaire après l'envoi des données
  if(empty($_GET)){
            ?>
            <!--Création d'un formulaire qui redirige vers la page avec la méthode GET-->
            <form action="index.php" method="get">
                <select name="civility">
                    <option value="Mr">Mr</option>
                    <option value="Mrs">Mme</option>
                </select>
                <p><label for="firstName">Prénom :</label><input type="text" name="firstName" id="firstName" /><br/></p>
                <p><label for="lastName">Nom :</label><input type="text" name="lastName" id="lastName" /></p>
                <input type="submit" />
            </form>
                <?php
            } else {
                //on récupère et on écrit les valeurs
    if(isset($_GET['civility']) && isset($_GET['firstName']) && isset($_GET['lastName'])){
                    echo $_GET['civility'] . ' ' . $_GET['firstName'] . ' ' . $_GET['lastName'];
                }
            }
            ?>
    </body>
</html>
