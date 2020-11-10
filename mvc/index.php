<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>André</title>
    </head>
    <body>
        
        <?php 
        require './vendor/autoload.php';
        use Core\ConfigController as Home;
        $url = new Home();
        $url->carregar();
        ?>
        
    </body>
</html>