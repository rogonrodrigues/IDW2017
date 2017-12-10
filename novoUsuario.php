<?php
include "conecta.php";

if(isset($_POST["postar"])) $postar=$_POST["postar"];
if(isset($_POST["email"])) $email=$_POST["email"];
if(isset($_POST["senha"])) $senha=$_POST["senha"];
if(isset($_POST["nome"])) $nome=$_POST["nome"];
if(isset($_POST["endereco"])) $endereco=$_POST["endereco"];
if(isset($_POST["estado"])) $estado=$_POST["estado"];
if(isset($_POST["cidade"])) $cidade=$_POST["cidade"];
if(isset($_POST["cep"])) $cep=$_POST["cep"];

// use estas 3 linhas para evitar problemas de acentua��o (caso seu BD esteja com outra codifica��o)
$nome=utf8_decode($nome);
$endereco=utf8_decode($endereco);
$cidade=utf8_decode($cidade);


if(isset($postar) && $postar=="S")
{
	if(!empty($email) && !empty($senha) && !empty($nome) && !empty($endereco) && 
		!empty($estado) && !empty($cidade) && !empty($cep)) {
		$res = mysqli_query($con, "SELECT email FROM usuario WHERE email='$email'");
		if(mysqli_num_rows($res)==0) {	// e-mail n�o existe, pode cadastrar
			$res = mysqli_query($con, "INSERT INTO usuario VALUES ('$email','$senha','$nome','$endereco','$cidade','$estado','$cep')");
			include "cadastraPedido.php";
		}
		else
			echo "<p class=\"erro\">Este e-mail j� existe em nosso cadastro.</p>";
	}
	else 
		echo "<p class=\"erro\">Favor preencher todos os campos!</p>";
}
?>
<form id="formAjax" action="javascript:void%200" onSubmit="javascript:enviaDados('php/novoUsuario.php'); return false;">
  <p class="titulo">Cadastre-se agora</p>
  <p>E-mail: <input name="email" type="text" maxlength="100" <?php if(isset($email)) echo "value=\"$email\""; ?>> 
  (seu e-mail ser&aacute; sua identifica&ccedil;&atilde;o no site) </p>
  <p>Escolha uma senha: <input name="senha" type="password" size="20" maxlength="20"></p>
  <p>Nome completo: <input name="nome" type="text" size="40" maxlength="100" <?php if(isset($nome)) echo "value=\"$nome\""; ?>></p>
  <p>Endere&ccedil;o: <input name="endereco" type="text" size="50" maxlength="100" <?php if(isset($endereco)) echo "value=\"$endereco\""; ?>></p>
  <p>Cidade: <input name="cidade" type="text" size="20" maxlength="50" <?php if(isset($cidade)) echo "value=\"$cidade\""; ?>>&nbsp; 
  Estado: <input name="estado" type="text" size="2" maxlength="2" <?php if(isset($estado)) echo "value=\"$estado\""; ?>>&nbsp; 
  CEP: <input name="cep" type="text" size="10" maxlength="8" <?php if(isset($cep)) echo "value=\"$cep\""; ?>></p>
  <input type="hidden" name="postar" value="S">
  <p><input name="concluir" type="submit" value="Concluir"></p>
</form>
