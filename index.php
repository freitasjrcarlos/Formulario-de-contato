<!DOCTYPE html>
<html>
<head>
	<title>Formulário PHP</title>
</head>
	<body>

		<form action="enviar.php" method="post" name="form" class="contato-form">
			<input id="nome" name="nome" type="text" placeholder="Nome" required>
			<input id="email" name="email" type="text" placeholder="E-mail" required>
			<input id="telefone" name="telefone" type="text" placeholder="Telefone" required>
			<!--<label class="nao-aparece">Se você não é um robô, deixe em branco.</label>
			<input type="text" class="nao-aparece" name="leaveblank">
			<label class="nao-aparece">Se você não é um robô, não mude este campo.</label>
			<input type="text" class="nao-aparece" name="dontchange" value="http://" >	-->				
			<textarea name="mensagem" id="mensagem" placeholder="Mensagem" required></textarea>
			<button id="enviar" name="enviar" type="submit" class="btn">Enviar</button>
		</form>

	</body>
</html>	