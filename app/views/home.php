<div id="content">
	<div id="livros">
	
			<?php $contador = 0; ?>
			<?php foreach($data as $livro){ ?>
				<div class="produto">
					<div class="imgproduto" style="background: #FFFFFF url('<?php echo "fotos/{$livro['url']}";?>')no-repeat center top;"></div>
					<?php echo $livro['titulo']; ?>
				</div>
					<?php if(++$contador == 4){ $contador = 0; ?>
						<div id="clear"></div>
					<?php } ?>
			<?php } ?>
			
	</div>
</div>