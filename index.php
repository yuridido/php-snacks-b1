<!-- Snack 2
Passare come parametri GET name, mail ed age e verificare (cercando i metodi
che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri,
che mail contenga un punto e una chiocciola e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php
$nome = $_GET['name'];
$eta = $_GET['age'];
$mail = $_GET['mail'];

var_dump(is_nan($eta));

if (empty($nome) || strlen($nome) < 3) {
    $mess = 'Accesso negato: nome non inserito o troppo corto';
} else {
    if (empty($eta) || is_int($eta) == false) {
        $mess = 'Accesso negato: inserire l\'età con un numero valido';
    } else {
        if (empty($mail)) {
            $text = 'Accesso negato: non hai inserito la mail';
        } else {
            if ((strpos($mail, '@') !== false) && (strpos($mail, '.') !== false)) { // devo usare l'identità di genere, altrimenti lo 0 risulta false
                $text = 'Accesso riuscito';
            } else {
                $text = 'Accesso negato, mail non valida';
            }
        }
    }
}

var_dump($mess);


?>
