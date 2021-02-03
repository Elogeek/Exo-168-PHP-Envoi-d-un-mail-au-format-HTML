<?php
/**
 * 1. Complétez la variable $html, elle devra contenir un texte court de newsletter.
 * 2. Ajoutez au moins une adresse mail ( la vôtre ? ) au tableau $to.
 * 3. Envoyez ce mail au format HTML à toutes les personnes de $ to qui ont souscrit à votre newsletter.
 * Bonus, pour chaque adresse mail indiquer si le mail a bien été envoyer, ou faire un tableau contenant les succès / erreurs et l'afficher après envoi
 *    ex: ['j.conan@fondationface.org' => true, 'toto@fondationface.org' => false] => à vous de trouver la suite !
 */

$to = [
    'j.conan@fondationface.org',
    'elodiechristin@gmail.com'
];

$html = "Coucou, merci de t'être abonné à ma page Travel world ! Voici tes cadeaux de bienvenue !"
?>

<html lang="fr">
    <head>
        <title>Mes actualités</title>
    </head>
    <body>
        <div>
            Dans la prochaine newsletter, tu recevras un voyage gratos!
            <!-- Vos actualités ici -->
        </div>
    </body>
</html>

<?php
$subject = "thank you for following me";
$headers = array (
    'Reply-To' => 'Travelworld@gmail.com',
    'X-Mailer' => 'PHP/' .phpversion(),
    'Mine-Version' => '1.0',
    'Content-type' => 'text/html; charset=Utf-8'
);

//accusé de réception
$headers .= "Disposition-Notification-To:$to";

mail($to[0] && $to[1], $subject, $html,$headers, "-f Travelworld@gmail.com");

if (mail($to[0] && $to [1],$subject, $html, $headers)) {
    // Envoi du message

    echo 'Votre message a bien été envoyé ';
}
else {
    // Non envoyé
    echo "Votre message n'a pas pu être envoyé";
}