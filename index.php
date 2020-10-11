<?php
session_start();
// Config
require_once 'config.php';
// start.php passará a carregar apenas o modo debugger.
require_once PATH . '/start.php';
// Funções globais
require_once PATH . './functions/globalFunctions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
	<script src="<?php echo HOME_URI;?>/views/js/script.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" >
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<link rel="stylesheet" href="<?php echo HOME_URI;?>/views/css/style.css">
  <title>Site Info</title>
</head>
<body>
  <?php
    //Carrega o header
    include './views/includes/header.php';
    // Carrega a aplicação
    new Main();
    //Carrega o footer
    include './views/includes/footer.php';  
  ?>
</body>
</html>
