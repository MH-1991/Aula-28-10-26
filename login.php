<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <form action="#" method="post">
        <label for="username">Nome de usuario:</label>
        <input name="username" type="text" required>
        <br><br>
        <label for="password">Senha:</label><br>
        <input name="password" type="password" required>
        <br><br>
        <input type="submit" value="Entrar">
    </form>

    <?php
    if(isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'admin' && $password =='123'){
            echo "login efetuado com sucesso!";
        }
        else{
            echo "Login Incorreto";
        }
    }
    ?>
</body>
</html>