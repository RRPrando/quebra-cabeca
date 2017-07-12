<html>
	<head>
		<style>
			table {border:0; border-spacing: 1px;}
			table tr td{padding:0; margin:0}
		</style>
	</head>
	<body>
		<table>
			<?php for($linha=1; $linha<=6; $linha++) : ?>
			<tr>
				<?php for($coluna=1; $coluna<=8; $coluna++) : ?>
                <td><img src="<?php echo $pecasTabuleiro[(($linha*8)-8+$coluna)-1] ?>" /></td>
				<?php endfor; ?>
			</tr>
			<?php endfor; ?>
		</table>
        <hr>
        <form method="post" action="iniciar_jogo.php">
            <input type="submit" name="zerar" value="Iniciar">
        </form>
        <form method="post" action="inserir_peca.php">
            Linha Origem:<input type="number" name="linhaOrigem" min="1" max="6">
            Coluna Origem:<input type="number" name="colunaOrigem" min="1" max="8">
            <br/><br/>
            Linha Destino:<input type="number" name="linhaDestino" min="1" max="6">
            Coluna Destino:<input type="number" name="colunaDestino" min="1" max="8">
            <input type="submit" name="inserirPeca" value="Inserir Peca">
        </form>
        <hr>
        <table>
            <?php for($linha=1; $linha<=6; $linha++) : ?>
                <tr>
                    <?php for($coluna=1; $coluna<=8; $coluna++) : ?>
                        <td><img src="imagens/<?php echo $pecasEmbaralhadas[(($linha*8)-8+$coluna)-1] ?>" /></td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        </table>
	</body>
</html>