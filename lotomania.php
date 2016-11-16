<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<title>Lotomania - Teste</title>

	<!-- CSS Aplicado-->
	<style>
		body{
			background: ##909497;
		}

		h1{
			text-align: center;
			color: #7D6608;
			background: #B7950B;
			text-transform: uppercase;
			font-size: 3em;
			border: 7px solid #7D6608;
			font-family: "helvetica";
		}

		.numbers{
			display: flex;
			flex-direction: row;
   			flex-wrap: wrap;
   			background: #7D6608;
		}
		.numbers div {
			background: #B7950B;
			padding: 5px;
			margin: 2px;
			justify-content: space-around;
			color: #fff;
			font-size: 4em;
			width: 9%;
			text-align: center
		}
		form{
			display: flex;
			justify-content: center;	
			margin-bottom: 50px;
		} 

		form input{
			background: #145a32;
			border: 8px solid #145a32;
			color: #fff;
			font-size: 2em;
		}
	</style>
</head>
	<body>
		
		<h1>Lotomania - Teste</h1>

		<!-- Botão para sortear os numeros -->
		<form method="post" action="lotomania.php">
			<input name="sortear" type="submit" value="Sortear Números" />
		</form>


			<?php
			if(isset($_POST['sortear'])){ 
			echo '<div class="numbers">';
				//Definido o range dos numeros
			    $min=1;
			    $max=100;

			    //Array para amarzenar os numeros gerados
				$arrayNumerosGerado = array();

				//Condição responsavel por gerar os 50 numeros de forma randomica
			    for ($i=1; $i <= 50 ; $i++){
			    	//Pega o numero gerado
			  	   $numero = rand($min,$max);
			  	   //Valida se o numero gerado já existe dentro do array
			  	    if (in_array($numero,$arrayNumerosGerado)) {
			  		    $i--; // caso exista vou decrementar uma possição no loop
			  	    }else{
			  	    	//Caso o numero nao exista ele é adicionado ao array
			  		    $arrayNumerosGerado[] = $numero;
			  	    }
			    }
			    //Será realizado a ordenação dos numeros 
				sort($arrayNumerosGerado);
				  
				$tamanhoArray = count($arrayNumerosGerado);
				//Lista os numeros na tela 
				for($y = 0; $y < $tamanhoArray; $y++){
				  	echo "<div>", ($arrayNumerosGerado[$y]), "</div>" ;
				}
			echo '</div>';
			}
			?>
	</body>	
</html>

