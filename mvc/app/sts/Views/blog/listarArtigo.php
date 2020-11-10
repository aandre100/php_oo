<?php 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
	</head>
	<body>
        <h1>listar artigo!!!</h1>
        <table>
            <tr>
                <th>id</th><th>titulo</th><th>conteúdo</th>
        <?php foreach($this->dados['artigos'] as $artigo){ ?>    
            <tr>    
                <td> <?php echo $artigo['id']; ?></td>
                <td> <?php echo $artigo['titulo']; ?></td>
                <td> <?php echo $artigo['conteudo']; ?></td>
</tr>
        <?php } ?>

	</body>
</html>