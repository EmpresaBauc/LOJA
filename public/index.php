<?php
	require '../../dashboard/init.php';
  	require DIRETORIO_HELPERS  . 'verifica.php';
	require DIRETORIO_MODULES  . 'avancoins/avancoins.php';

?>

<?php
	# chamando função responsável por atualizar as ações diárias do colaborador no período atual
  atualizaAcoesDiarias();

  # chamando função responsável por atualizar as ações mensais do colaborador no período atual
  atualizaAcoesMensais();

  # chamando função responsável por atualizar a quantidade de moedas na carteira do colaborador
  atualizaCarteira();

  # chamando função responsável por retornar a quantidade atual de moedas do colaborador
  $avancoins = retornaQuantidadeDeMoedasDaCarteira();

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta name="viewprt" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Loja Avanção</title>
  <link rel="stylesheet" href="../libs/normalize/css/normalize-7.0.0.css">
  <link rel="stylesheet" href="../libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../libs/css/loja.css">

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<h1 class="textotitulo">LOJA AVANÇÃO</h1>
			</div>
			<div class="col-sm-1"><!-- terceira coluna da linha -->
              <div class="text-right">
                <p>
                  <img class="moeda" src="<?php echo BASE_URL; ?>public/img/others/avancoins.png" alt="Moeda Avancoins">
                </p>
              </div>
            </div>
            <div class="col-sm-2" id="avancoins-margem">
              <div class="text-left">
                <p>
                  <?php foreach ($avancoins as $avancoin) : ?>
                    <img class="avancoins" src="<?php echo $avancoin; ?>" alt="Avancoins">
                  <?php endforeach; ?>
                </p>
              </div>
            </div><!-- terceira coluna da linha -->
<!-- terceira coluna da linha -->
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					  	<div class="text-center">
					  		<img class="imgproduto" src="../assets/imagens/acai1.jpg">
					   		<h5 class="produto">Açaí 300ml</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">100</text>
					   	 </div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/acai2.jpg">
					   		<h5 class="produto">Açaí 500ml</h5>
							<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">150</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/ventilador1.jpg">
					   		<h5 class="produto">Ventilador de Mesa</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">500</text>
					   	</div>
					  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
					   		<img class="imgproduto" src="../assets/imagens/pendrive1.jpg">
					   		<h5 class="produto">Pendrive 64GB</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">500</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/manicure1.jpg">
					   		<h5 class="produto">Manicure</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">400</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
					   		<img class="imgproduto" src="../assets/imagens/cinema1.jpg">
					   		<h5 class="produto">Par de Ingressos Cinema</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">700</text>
					   	</div>
					  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/valeverde2.jpg">
					   		<h5 class="produto">Cachaça Vale Verde</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">700</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
						<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/pizza1.jpg">
					   		<h5 class="produto">Rodízio de Pizza com Acompanhante</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">1000</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
					   		<img class="imgproduto" src="../assets/imagens/dia.jpg">
					   		<h5 class="produto">Folga</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">1000</text>
					   	</div>
					  </div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					  	<div class="text-center">
					   		<img class="imgproduto" src="../assets/imagens/jack1.jpg">
					   		<h5 class="produto">Jack Daniels</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">1500</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					  	<div class="text-center">
					   		<img class="imgproduto" src="../assets/imagens/absolut3.jpg">
					   		<h5 class="produto">Absolut Vodka</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">1500</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					  	<div class="text-center">
					   		<img class="imgproduto" src="../assets/imagens/babybeef1.jpg">
					   		<h5 class="produto">Rodízio Babe Beef com Acompanhante</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">1500</text>
					   	</div>
					  </div>
				</div>
			</div>
			
		</div>
		<div class="row">
			<div class="col-md-4 col-md-offset-2">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/hometheater.jpg">
					   		<h5 class="produto">Home Theater</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">3000</text>
					   	</div>
					  </div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="panel panel-default">
					  <div class="panel-body">
					   	<div class="text-center">
						   	<img class="imgproduto" src="../assets/imagens/semana1.jpg">
					   		<h5 class="produto">Uma semana de folga</h5>
					   		<img class="imgmoeda" src="../assets/avancoins.png">
					   		<text class="preco">5000</text>
					   	</div>
					  </div>
				</div>
			</div>
		</div>
	</div>

 <script src="../libs/jquery/js/jquery-3.2.1.min.js"></script>
 <script src="../libs/bootstrap/js/bootstrap.min.js"></script>

</body>
</html>
