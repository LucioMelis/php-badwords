<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php
$parolaCensurata = $_GET["censura"];
$paragrafo ='Dopo tante peripezie si parte con PHP';
$nuovoParagrafo = str_replace($parolaCensurata,'***', $paragrafo);
?>

<h1>Si parte:</h1>
<p><?php echo($paragrafo) ?></p>
<p><?php echo(strlen($paragrafo)) ?></p>

<h1>Nuovo Paragrafo:</h1>
<p><?php echo($nuovoParagrafo) ?></p>
<p><?php echo(strlen($nuovoParagrafo)) ?></p>
<h2>La Parola che hai scelto di censurare:</h2>
<p><?php echo($parolaCensurata) ?></p>


