               <div class="produto-item">
					<div class="thumbnail" style="margin-top: 5px;">
						<div class="img-div" style="background-image: url('<?=$jogo['imagem']?>');"></div>
						<div class="desc-item">
							<div class="caption">
								<p><?= $jogo['nome'] ?></p>
								<p class="pull-right">R$ <?= $jogo['valor']?></p>
							</div>
							<div class="ratings">
								<p>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
									<span class="glyphicon glyphicon-star"></span>
								</p>
							</div>
							<div class="caption">
								<p>
									<a href="carrinho.php?codigo=<?= $jogo['codigo'] ?>"<?php $_SESSION['tela'] = $_SERVER['SCRIPT_NAME'];?>class="add_carrinho">Comprar</a>
								</p>
							</div>
						</div>
					</div>
				</div>