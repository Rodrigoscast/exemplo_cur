<body>
	<!-- Carousel
    ================================================== -->
	<div class="carrossel-div">
		<div class="carrossel-main">
			<?php
				require_once 'conecta.php';

				$html = [];
				$img_principal = '';

				$query = mysqli_query($conexao, "SELECT * FROM `imagens-carrossel`");

				while ($row = mysqli_fetch_array($query)) {
					$atual = $row["urlcar_img"];
					$show = $row['mostra_img'];
					$princ = $row['isprinc_img'];

					if($show == 1){
						if($princ == 1){
							$img_principal = $atual;
						} else {
							array_push($html, $atual);
						}
					}
				}

				array_unshift($html, $img_principal);

				foreach ($html as $key => $value) { ?>
					<div><img src="<?= $value ?>" alt=""></div>
				<?php }

			?>
		</div>
	</div>
	<!-- /.carousel -->