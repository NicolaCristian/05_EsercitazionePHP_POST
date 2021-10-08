<html>

<body>

<h1>Prova parametri passati in post</h1>

<?php

//recupero valore parametro nome
$nome_utente= $_POST['nome'];
$email= $_POST['email'];

echo "<p>Ciao ". $nome_utente. "</p> ";
echo "<p>la tua mail è ". $email. "</p>";
?>



</body>


</html>