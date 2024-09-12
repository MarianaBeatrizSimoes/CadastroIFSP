<?php
include('inicia_sessao.php');
//limpa variaveis de sessao
session_unset();
//destroi a sessao
session_destroy();
//volta para pagina inicial
header('Location: index.php');
?>