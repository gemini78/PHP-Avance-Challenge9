<?php
$pageActive = 'about';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 8 : Simuler une prise de contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('parts/topbar.php')  ?>
    <main>
        <div class="wrapper">
            <div class="about">
                <div class="content">
                    <h1>A propos</h1>
                    <div class="rules">
                        <div class="content">
                            <p>
                            À partir de ce que tu as réalisé lors de la précédente quête, tu vas pouvoir aller plus loin dans l’amélioration de ce formulaire.<br>
                            Comme tu dois t’en douter, tu vas devoir rajouter une partie validation des informations fournies par l’utilisateur.<br>
                            Ainsi, tous les champs doivent être obligatoirement remplis avant de pouvoir soumettre le formulaire. <br>Une fois le formulaire soumis :
                            </p>
                            <ul>
                                <li>Si toutes les données attendues sont saisies correctement, l’utilisateur voit apparaître le message précédemment intégrer lors de la quête précédente sur le fichier thanks.php.</li>
                                <li>En cas d’erreur, l’utilisateur est notifié par un message lui indiquant qu’il manque des informations ou que le format des données n’est pas bon, toujours sur thanks.php. Ne cherche pas à afficher les erreurs sur form.php pour le moment.</li>
                            </ul>
                            <p style="background: grey;padding:15px;color:white">
                                Vérifier un à un tous les champs afin de s'assurer qu'ils sont correctement remplis, avec la bonne syntaxe, peut s’avérer long et fastidieux. Pour cette quête, on ne te demandera pas de tout vérifier à l'aide de PHP.</p>
                            <p style="background: grey;padding:15px;color:white">Occupe toi dans un premier temps de la partie serveur, ensuite tu pourras passer à la partie client. Car si tu le fais dans l’ordre inverse, le navigateur t’empêchera de valider le formulaire.</p>
                            <h3>Critères de validation</h3>
                            <ul>
                                <li style="font-size: 0.9rem;">Le formulaire de contact comporte toujours les champs :</li>
                                <li style="font-weight: bold;">nom,</li>
                                <li style="font-weight: bold;">prenom,</li>
                                <li style="font-weight: bold;">e-mail,</li>
                                <li style="font-weight: bold;">téléphone,</li>
                                <li style="font-weight: bold;">sujet (sous forme de liste déroulante),</li>
                                <li style="font-weight: bold;">message (textarea).</li>                                
                            </ul>
                            <h3>Côté PHP</h3>
                            <p>Tous les champs sont requis et ne doivent pas être vides. 
                                Le format du champ e-mail doit être en plus vérifié à l’aide de <span style="color:red;">filter_var</span>.</p>
                            <h3>Côté client / front :</h3>
                            <p>Tous les champs sont requis. De plus, la validité du champ e-mail est également vérifiée pour correspondre au format attendu.</p>
                            <p>Le code est disponible sur un dépot Github.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>