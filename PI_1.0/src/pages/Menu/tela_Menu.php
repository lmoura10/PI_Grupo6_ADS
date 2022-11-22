<?php 
     session_start();     
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset ($_SESSION['email']); 
        unset ($_SESSION['senha']) ;
        header('Location: tela_login.php');
    }
    $logado = $_SESSION['email'] ;
    echo "<h1> Bem Vindo <u>$logado</u></h1>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo_Menu.css">
    <style>
         a{
    text-decoration: none;
    color: black;
    border: 3px solid rgba(248,248,255);
    border-radius: 10px;
    padding: 10px;
    position: relative;
    top: -40px;

   
        }
    a:hover{
            background-color: rgb(111, 245, 131);
        }
    </style>
    <title>Document</title>
</head>

<body>    
    <a href="../Cadastro/home.php">Sair</a>    
    

    <h1><img src="LogoMakr.png" alt=""></h1>

   
    
    <div class="container1">      
        

        <div class="cartao1">

            <img src="Psicologia.png" alt="">

            <h2 class="h2_ps">Psicologia</h2>
                        
            <form action="../prof/prof.php">
                <button type="submit">Entrar</button>
            </form>

        </div>

        <div class="cartao1">

            <img src="Livro.png" alt="">

            <h2 class="h2_pi">Links</h2>

            <form action="../links/links.php">
                <button type="submit">Entrar</button>
            </form>

        </div>

    </div>
    
   

</body>
</html>