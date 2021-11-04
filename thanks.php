<?php

require "functions.php";

const MSG_ERROR_NAME  = "Seul les lettres, espaces et le tiret sont permis";
const MSG_ERROR_EMAIL = "L'email est invalide";
const MSG_ERROR_PHONE = "Le numéro de téléphone est invalide";
const MSG_ERROR_SUBJECT = "Merci de choisir un sujet";


if (isset($_POST['send'])) {
    if (not_empty(['lastname', 'firstname', 'email', 'phone', 'subject', 'message'])) {
        $errors = [];
        extract($_POST);

        $lastname = test_input($lastname);
        $firstname = test_input($firstname);
        $email = test_input($email);
        $phone = test_input($phone);
        $subject = test_input($subject);
        $message = test_input($message);

        if (!validateName($lastname)) {
            $errors['lastname'] = MSG_ERROR_NAME;
        }

        if (!validateName($firstname)) {
            $errors['firstname'] = MSG_ERROR_NAME;
        }

        if (!validateEmail($email)) {
            $errors['email'] = MSG_ERROR_EMAIL;
        }

        if (!validatePhone($phone)) {
            $errors['phone'] = MSG_ERROR_PHONE;
        }

        if (!validateSubject($subject)) {
            $errors['subject'] = MSG_ERROR_SUBJECT;
        }

        if (count($errors) == 0) {
            $message = sprintf("Merci %s %s de nous avoir contacté à propos de “%s”.Un de nos conseiller vous contactera soit à l’adresse %s 
            ou par téléphone au %s dans les plus brefs délais pour traiter votre demande : %s", $firstname, $lastname, $subject, $email, $phone, $message);
        }
    } else {
        $errors[] = "Veuillez SVP remplir tous les champs !";
        //sauvegarde des champs en erreurs
    }
}



$pageActive = '';

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
            <h1>Thanks !!!</h1>
            <div class="container-cards">
                <div class="card">
                    <div class="card-header">
                        <span>informations</span>
                    </div>
                    <div class="card-body">
                        <?php
                        if (isset($errors) && count($errors) > 0) { ?>
                            <ol>
                                <?php foreach ($errors as $error) {
                                    echo '<li class="error">' . $error . '</li>';
                                } ?>
                            </ol>
                        <?php    } else {
                            echo "<p>$message</p>";
                        }
                        ?>
                    </div>
                    <div class="card-footer">
                        <span>informations</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php require('parts/footer.php') ?>
</body>

</html>