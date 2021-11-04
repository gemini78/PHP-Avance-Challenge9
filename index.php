<?php

$pageActive = 'home';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge 9 : Sécuriser la prise de contact</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php require('parts/topbar.php')  ?>
    <main>
        <div class="wrapper">
            <h1>Challenge 9 : Sécuriser la prise de contact</h1>
            <div class="container-cards">
                <div class="card">
                    <div class="card-header">
                        <span>Formulaire</span>
                    </div>
                    <div class="card-body">
                        <form action="thanks.php" method="post">
                            <div class="box-input">
                                <label for="lastname">Nom :</label>
                                <input type="text" id="lastname" name="lastname" required>
                            </div>
                            <div class="box-input">
                                <label for="firstname">Prénom :</label>
                                <input type="text" id="firstname" name="firstname" required>
                            </div>
                            <div class="box-input">
                                <label for="email">Email :</label>
                                <input type="email" id="email" name="email" required>
                            </div>
                            <div class="box-input">
                                <label for="phone">Téléphone :</label>
                                <input type="phone" id="phone" name="phone" required>
                            </div>
                            <div class="box-input">
                                <label for="subject">Sujet :</label>
                                <select name="subject" id="subject" required>
                                    <option value="no choice">Merci de choisir un sujet</option>
                                    <option value="Intelligence artificielle">Intelligence artificielle</option>
                                    <option value="Mathématiques appliquées">Mathématiques appliquées</option>
                                    <option value="La théorie des cordes">La théorie des cordes</option>
                                    <option value="Supraconductivité">Supraconductivité</option>
                                    <option value="Sciences & Nature">Sciences & Nature</option>
                                    <option value="Mécanique Quantique">Mécanique Quantique</option>
                                    <option value="Design pattern">Design pattern</option>
                                    
                                </select>
                            </div>
                            <div class="box-input">
                                <label for="message">Message :</label>
                                <textarea name="message" id="message" rows="5" required></textarea>
                            </div>
                            <div class="button">
                                <button type="submit" name="send">Envoyer votre message</button>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer">
                        <span>Formulaire</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>