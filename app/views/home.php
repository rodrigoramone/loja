
	<div id="livros">
	
			<?php $contador = 0; ?>
			<?php foreach($data as $livro){ ?>
				<div class="produto">
					<div class="imgproduto">
						<img src="fotos/<?php echo $livro['url']; ?>" />
					</div>
					<span class="titulo">
						<?php echo $livro['titulo']; ?>
					</span>				
				</div>
					<?php if(++$contador == 4){ $contador = 0; ?>
						<div id="clear"></div>
					<?php } ?>
			<?php } ?>
			
	</div>
