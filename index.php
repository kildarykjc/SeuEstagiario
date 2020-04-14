<html>

<?php 
// Função que recebe o numero de discos que deve ser maior ou igual zero.
 function hanoi($n){
	$minJogadas;
	if($n >= 0){
		 $minJogadas = pow(2,$n)-1;
	}else {
		 $minJogadas = 'Valor de disco incorreto';
	 }
	 return $minJogadas;
 }
  
 
?>


<head>
	
	<meta charset="UTF-8">
	<title>Torre de Hanói</title>
	
</head>

<body >
	<div>
		<form action="?a=ok" method="POST">
			<input type="text" name="texto" placeholder='Número de discos'/>
			<input type="submit" value="Verificar" />
		</form>
	</div>
	<?php
		// Verifica se existe a ação e verifica se a ação foi igual a 'ok' e se o texto é diferente de vazio.
		if ( isset( $_GET['a'] ) && $_GET['a'] == 'ok' && $_POST['texto'] != '' ) {
			$discos = $_POST['texto'] ;
			echo "Número mínimo de jogadas para $discos discos: ".hanoi($discos);
		}
	?>
	
</body>
</html>
