<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$nome = $_GET['name'];
$eta = $_GET['age'];
$mail = $_GET['mail'];

if (empty($nome) || strlen($nome) < 3) {
    $mess = 'Accesso negato: nome non inserito o troppo corto';
} else {
    if (empty($eta) || is_nan($eta)) {
        $mess = 'Accesso negato: inserire l\'età con un numero valido';
    } else {
        if (empty($mail)) {
            $mess = 'Accesso negato: non hai inserito la mail';
        } else {
            if ((strpos($mail, '@') !== false) && (strpos($mail, '.') !== false)) { // devo usare l'identità di genere, altrimenti lo 0 risulta false
                $mess = 'Accesso riuscito';
            } else {
                $mess = 'Accesso negato, mail non valida';
            }
        }
    }
}

var_dump($mess);


?>
