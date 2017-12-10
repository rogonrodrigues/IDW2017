<!DOCTYPE html>
<html>
<head>

<link rel = "stylesheet" href = "js/estilo.css" type = "text/cs">
<script type = "text/javascript" src = "js/bibliotecaAjax.js"> </script>
<script type = "text/javascript" src = "js/loja.js"> </script>
<meta http-equiv = "Content-Type" content = "text/html"; charset = "UTF-8">

<title> Lojas Caramuru - Trabalho de conclusão do Introdiução de Desenvolvimento Web </title>

</head>

<body>
<h2 align = center><img src = "C:\Users\User\Desktop\FATEC\DESENVOLVIMENTO WEB\AJAX e PHP\loja\figuras\lojaK.gif">  </h2>
<table width="800" border="0" align = "center" cellpading ="0" cellspacing = "0">
	<tr valign = "top">
	<td colspan = "3"><div align = "right">
	<p> <span id = "avisos"></span> &nbsp;&nbsp;
	<img src = "C:\Users\User\Desktop\FATEC\DESENVOLVIMENTO WEB\AJAX e PHP\loja\figuras\home.gif" width = "26" height = "26" align = "absmiddle">
	<a href = "javascript:loja('inicio',0)"> Home </a> &nbsp;&nbsp;//acertar o link
	<img src = "C:\xampp\htdocs\loja\figuras\carrinho.gif" width = "36" height = "25">
	<a href = "javascript:loja('carrinho',0)"> Meu Carinho</a></p>
	</div></td>
	</tr>
	
	<tr valign = "top">
	<td width="20" class = "fundocinza">
	<p class = "titulo">Categorias</td>
	<p><?php include "php/mostraMenu.php"; ?></p>
	</td>
	<td width = "20">&nbsp;</td>
	<td width = "630" class = "fudolaranja">
	<div id = "Conteudo"></div>
	</td>
	</tr>
</table>

	<p align = "center" class = "rodape">Copyright &copy; Lojas Caramuru - Todos os direitos resrvados. Este é um site
	trabalho Acadêmico.	Fictício, construído com foco de aprendizado. </p>
	<p align = "center">&nbsp;</p>

</body>
</html>
