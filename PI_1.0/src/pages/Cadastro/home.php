<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body{
            background: rgba(248,248,255);
            text-align: center;
              
        }
        .box{
            position: absolute;
            top: 60%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: rgb(52,211,77);
            padding: 30px;
            border-radius: 10px;
        }
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
    </style>
</head>
<body>
        
    <img src="LogoMakr.png" >
    
    <div class = "box">
        <a href="../login/tela_login.php"><b>Login</b></a>
        <a href="formulario.php"><b>Cadastre-se</b></a>
    </div>
</body>
</html>