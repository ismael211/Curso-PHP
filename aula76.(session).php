<?php
session_start();

$_SESSION['exemplo'] = "only test";

?>

<a href="arquivo.php">Clique aqui</a>
<!-- Para a outra sessão ser exibida tem que ter o session_start()

