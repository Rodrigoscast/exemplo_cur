<?php include("cabecalho.php");
include("banco-jogo.php");

verificaUsuario(); 

if(count($_POST)>0){
	adicionaJogo($conexao, $_POST);
}
?>

<div class="bloco-geral">
	<div class="filtros-lista">
		<div>Tipo</div>
		<div>Subtipo</div>
		<div>Preço</div>
		<div>Cor</div>
		<div>Tamanho</div>
	</div>
	<div class="produtos">
		<?php
		$carrinho = listaJogo ( $conexao );
		shuffle($carrinho);
	
		foreach ( $carrinho as $jogo ) :
			include 'produtos-carrinho.php';
		endforeach?>
	</div>
</div>


	
<?php include("rodape.php");?>