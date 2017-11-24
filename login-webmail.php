<?php

//$dominio = $_SERVER['HTTP_HOST']; //Informe aqui o seu domínio
// $urlAtual = explode(".", $_SERVER['HTTP_HOST']);
// if(isset($urlAtual[1]) && !isset($urlAtual[2]) && !isset($urlAtual[3])){ $dominio = $urlAtual[1]; }
// if(isset($urlAtual[1]) && isset($urlAtual[2]) && !isset($urlAtual[3])){ $dominio = $urlAtual[1].".".$urlAtual[2]; }
// if(isset($urlAtual[1]) && isset($urlAtual[2]) && isset($urlAtual[3])){ $dominio = $urlAtual[1].".".$urlAtual[2].".".$urlAtual[3]; }
$dominio = "oregionalsul.com";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$email = $usuario . "@" . $dominio;
$login = "https://" . $dominio . ":2096/login/";

echo "<form method=\"POST\" name=\"login_form\" action=\"$login\" style=\" display: none;\">
<input type=\"text\" name=\"user\" size=\"22\" value=\"$email\" />

<input type=\"password\" name=\"pass\" size=\"22\" value=\"$senha\" />
<input type=\"submit\" value=\"Entrar\">
<script language=\"JavaScript\">document.login_form.submit();</script></form>";

?>
