<?php 

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	</head>
	<body><div class="container">
        <h1>listar artigo!!!</h1>
        
        <table class="table table-dark ">
            <tr>
                <th>id</th><th>titulo</th><th>conteúdo</th>
        <?php foreach($this->dados['artigos'] as $artigo){ ?>    
            <tr>    
                <td> <?php echo $artigo['id']; ?></td>
                <td> <?php echo $artigo['titulo']; ?></td>
                <td> <?php echo $artigo['conteudo']; ?></td>
</tr>
        <?php } ?>
        </table>
        </div>

	</body>
</html>