<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>login</title>
</head>
<body>
    <form action="processa_feedback.php" method="post">
        <label for="username">Nome de usuario:</label>
        <input name="username" type="text" required>
        <br><br>
        <label for="password">Senha:</label><br>
        <textarea name="password" rows="4" required></textarea>
        <br><br>
        <input type="submit" value="Entrar">
    </form>

    <?phpif(isset($_POST['usernamne'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        if($username == 'admin' && $password =='123')
            elseif(login efetuado com sucesso)
    }
</body>
</html>