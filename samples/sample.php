<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title>CSSMagic</title>
<meta name="generator" content="Geany 1.27" />
<link rel="stylesheet" type="text/css" href="theme.php?<?php echo http_build_query($_GET);?>">
</head>

<body>
<h1>CSSMagic</h1>
<p id="paragrafo">CSSMagic fornece uma forma simples de gerenciar temas CSS sem a necessidade de pré-processadores. Tudo com PHP apenas.</p>
<form action="sample.php" method="get" class="myclass">
<label for="cor">Selecione uma cor para o tema:</label>
<select name="cor" id="cor">
	<option value="red">Vermelho</option>
	<option value="green">Verde</option>
	<option value="blue">Azul</option>
</select>
<button type="submit">Colorir</button>
</form>

</body>

</html>
