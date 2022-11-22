<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="estilo.css">
    <style>
        a{
    text-decoration: none;
    color: black;
    border: 3px solid rgba(248,248,255);
    border-radius: 10px;
    padding: 10px;
   
        }
    a:hover{
            background-color: rgb(111, 245, 131);
        }
        .inputSubmit{
    background-color: rgb(52,211,77);
    outline: none;
    border-radius: 15px;
    border-style: solid;
    padding: 15px;
    width: 100%;
    border: none;
    color: white;
    font-size: 20px;
    cursor: pointer;
    
}
.inputSubmit:hover{
    background-color: rgb(111, 245, 131);
   color: black;
}   
    </style>
</head>
<body>
    <br>
    <a href="../Cadastro/home.php">Voltar</a>
    <div class="tela-login">
        <img src="LogoMakr.png">
        <h1 aling = "center">Login</h1>
        <form action="testeLogin.php" method="POST">
            <input type="text" name="email" placeholder="Email">
            <br><br>
            <input type="password" name = "senha"placeholder="Senha">
            <br><br>
            <input class= "inputSubmit"type="submit" name = "submit" value="Enviar">
            <!-- <form action="../Menu/tela_Menu.html">
                <button type="submit">Enviar</button>
            </form> -->
        </form>
    </div>
</body>
</html>