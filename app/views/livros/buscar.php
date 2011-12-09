
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
					<span class="preco">
						R$: <?php echo $livro['preco']; ?>
					</span>	
					<span class="botoes">
						<a href="?module=compras&action=adicionar&id=<?php echo $livro['id']?>" class="button" value="Comprar" >Comprar</a>
					</span>
				</div>
					<?php if(++$contador == 4){ $contador = 0; ?>
						<div id="clear"></div>
					<?php } ?>
			<?php } ?>
			</form>
	</div>
