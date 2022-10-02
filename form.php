<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Formulaire</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>



    <?php

    //var_dump($_GET);


    ?>

    <form action="thanks.php" method="post">

        <div class="input1">
            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="user_name">
        </div>

        <div class="input2">
            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="user_firstname">
        </div>

        <div>
            <label for="courriel">Courriel :</label>
            <input type="email" id="courriel" name="user_email">
        </div>

        <div>
            <label for="phone">Téléphone :</label>
            <input type="text" id="phone" name="user_phone">
        </div>

        <div>
            <label for="subject-select">Choisissez un sujet:</label>
            <select name="user_subject" id="subject-select">
                <option value="">--Merci de choisir un sujet--</option>
                <option value="help">besoin d'aide</option>
                <option value="sos">besoin d'aide d'urgence</option>
                <option value="bof">votre site est mal fichu</option>
            </select>
        </div>
        <div>
            <label for="message">Message :</label>
            <textarea id="message" name="user_message"></textarea>
        </div>

        <div class="button">
            <button type="submit">Envoyer votre message</button>
        </div>

    </form>

    <?php

    //echo  $_POST['user_name'];

    ?>

</body>

</html>