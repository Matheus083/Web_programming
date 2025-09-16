!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EXEMPLO</title>
</head>
<body>  
    <h1>Exemplo PHP</h1>
    <?php 
        $timezone = date_default_timezone_set("America/Sao_Paulo");
		echo "<p>O meu nome é Matheus  </p>";
        echo "<p>Hoje é a hora  " . date("H:i:s $timezone ") . "</p>";
        echo "<p>Hoje é dia  " .  date("d") . "</p>";
        echo "<p>Hoje é a data>  " . date("d/m/y ") . "</p>";
	?>
</body> 
</html>