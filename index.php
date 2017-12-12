<?php
/*

#################################
Programa: Personaliza página que realiza login no webmail do CPANEL & WHM
Autor: Tiago Boeing
Site: tiagoboeing.com.br
Contato: contato@tiagoboeing.com.br
GITHUB: github.com/tiagoboeing
#################################

Instruções/Instructions in portuguese-BR
---------------
1 - Crie uma pasta no seu servidor web com qualquer nome
2 - Cole todos os arquivos na pasta criada
3 - Acesse a URL pelo navegador e confira se tudo é exibido corretamente
4 - Teste o acesso e divirta-se.
---------------
*Dúvidas? Entre em contato.

#################################
CONFIGURE O SITE UTILIZANDO AS VARIÁVEIS ABAIXO

*/
$nomeSite = "Webmail - O Regional Sul";
$arquivoLogo = "logo.png";
$poweredBy = "O Regional Sul";
$urlPoweredBy = "https://oregionalsul.com.br";


// função que permite usuário informar domínio manualmente ou utilizar dinâmico
// esta função não dispensa a configuração no arquivo de login
// *serve apenas para tornar mais bonita a visualização
function dominioEmail($informarManualmente, $dominioManual){

	if($informarManualmente == false){

		echo "@"; // símbolo antes de mostrar e-mail;

		$urlAtual = explode(".", $_SERVER['HTTP_HOST']);
		if(isset($urlAtual[1])){ echo $urlAtual[1]; }
		if(isset($urlAtual[2])){ echo ".".$urlAtual[2]; }
		if(isset($urlAtual[3])){ echo ".".$urlAtual[3]; }

	} else {

		$urlAtual = "";
		echo "@".$dominioManual;

	}

}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>

	<title><?php echo $nomeSite; ?></title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


	<!-- Bootstrap -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

</head>
<body>

	<div class="container-fluid text-center">

		<div class="row">
			<div class="col-md-12" style="margin-top: 40px;">
				<img src="<?php echo $arquivoLogo; ?>" class="img-responsive center-block">
			</div>
		</div>

		<hr>


		<div class="row justify-content-md-center">

			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xll-4" style="margin: 0 auto;">
				<!-- <h3>Formulário de acesso</h3> -->

				<!-- formulário-->

				<form action="login-webmail.php" method="post">

					<div class="form-group">

						<label for="user" class="form-text text-left">Conta</label>

						<div class="input-group mb-2 mb-sm-0">

							<input placeholder="Usuário" type="text" name="usuario" id="user" class="form-control form-control-lg"/>
							<!-- <input type="text" class="form-control" id="inlineFormInputGroupUsername" placeholder="Username"> -->
							<div class="input-group-addon"><?php

							/* APENAS VISUALIZAÇÃO
							Configure aqui se deseja mostrar o domínio manualmente ou de forma dinâmica
							*
							Função: dominioEmail(manual??, dominio)
							*
							*	Argumento 1
							*	- true = informar manualmente
							*	- false = sistema pega dinamicamente
							*
							*	Argumento 2
							*	- domínio; apenas caso tenha definido o ARGUMENTO1 como true
							*
							*/
							dominioEmail(false, "oregionalsul.com.br");

							?></div>

						</div>

						<small class="form-text text-muted text-left">Não insira @dominio, apenas conta.</small>

					</div>


					<div class="form-group">
						<label for="pass" class="form-text text-left">Senha</label>
						<input id="pass" placeholder="Senha" type="password" name="senha" class="form-control form-control-lg"/>
					</div>

					<button id="acessar" type="submit" class="btn btn-success form-control">Acessar</button>

				</form>

				<!--  fim do formulário-->

			</div>
		</div>


		<hr>
		<div class="row justify-content-md-center">

			<div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xll-4" style="margin: 0 auto;">
				<h4>Powered by <a href="<?php echo $urlPoweredBy; ?>" target="_blank"><?php echo $poweredBy; ?></a></h4>

				<p>O serviço de e-mail possui ligação direta com o servidor de hospedagem, eventuais falhas de acesso ou quedas não são de responsabilidade do (a) <b><?php echo $poweredBy; ?>.</b></p>

				<p><a href="http://<?php echo $_SERVER['HTTP_HOST']; ?>/webmail">Acesso manual</a> | <a href="https://cliente.oregionalsul.com.br" target="_blank">Área do Cliente</a></p>
			</div>

		</div>

		<hr>


	</div>



	<!-- BOOTSTRAP JS -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

</body>
</html>
