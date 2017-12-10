// carrega a p�gina inicial da loja
window.onload = function(){
	Loja('inicio', 0);
}

// envia a requisi��o ao servidor, de acordo com a a��o do usu�rio
function Loja(secao, parametro){
	Aviso(1);	// exibe o aviso "Aguarde..."
	var url="php/loja.php?"+secao+"="+encodeURIComponent(parametro);
	requisicaoHTTP("GET",url,true);
}

// envia a nova quantidade do produto, para atualiza��o no carrinho de compras
function AtualizaQuantidade(campo){
	var id = campo.name;
	var quant = campo.value;
	Loja('quantidade',id+'-'+quant);	
}

// exibe ou oculta a mensagem de espera
function Aviso(exibir) {
	var saida = document.getElementById("avisos");
	if(exibir){
		saida.className = "aviso";
		saida.innerHTML = "Aguarde...processando!";
	}
	else {
		saida.className = "";
		saida.innerHTML = "";
	}
}

// exibe a resposta do servidor
function trataDados(){
	var info = ajax.responseText;
	var saida = document.getElementById("conteudo");
	saida.innerHTML = info;
	Aviso(0);
}
