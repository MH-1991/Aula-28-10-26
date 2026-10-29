<?php
$produto = $_POST['produto'];
$preco=$_POST['preco'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h1>Produto: <?php echo $produto; ?></h1>
    <h1>Registrado com o Preço: <?php echo $preco; ?></h1>
</body>
</html>