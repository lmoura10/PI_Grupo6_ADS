<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="form.css" media="screen">
    <title>Agendamento</title>

</head>
<body>
<a href="../../pages/menu/tela_menu.php"> 
        <img src="../../assets/images/LogoMakr.png"></a>
    <div class="box">
        <form action="done.html">
            <fieldset>
                <legend><b>Fórmulário de Agendamento</b></legend>
                <br>
                <!-- Dados do Paciente"-->                
                <h3>Meus Dados</h3>
                <label for="nome"><b>Nome</b></label>
                <input type="text" name="nome" value="Fulano de Tal" class="inputUser" readonly>
                <br><br>
                <label for="tel"><b>Telefone</b></label>
                <input type="tel" name="tel" class="inputUser" value="(11) 988775599" required > 
                <br><br>
                <label for="email"><b>E-mail:</b></label>
                <input type="email" name="email" value="fulonodetal@teste.com" class="inputUser">
                <br><br>


                <h3>Você será atendido por</h3>
                <label for="nome"><b>Nome</b></label>
                <input type="text" name="nome" value="Médico XPTO" class="inputUser" readonly>
                <br><br>
                <label for="nome"><b>Especialidade</b></label>
                <input type="text" name="nome" value="XPTO" class="inputUser" readonly>
                <br><br><br>

                <!-- Data e horário da Consulta-->
                <label for="data_consulta"><b>Data da Consulta:</b></label>
                <input type="date" name="data_consulta" id="data_consulta" required>
                <br><br>
                <div>
                    <label for="labelInput"><strong>Horário da Consulta</strong></label>
                    <select id="FormPagto" required>
                        <option selected disabled value="">Selecione</option>
                        <option>08:00</option>
                        <option>10:30</option>
                        <option>14:50</option>
                        <option>16:30</option>
                    </select>
                </div>
                <br><br><br>

                <!-- Valor da Consulta-->
                <div class="inputBox">
                    <input type="text" name="valor" id="valor" class="inputUser" value="R$ 100,00" required>
                    <label for="valor" class="labelInput"><b>Valor da Consulta:</b></label>
                </div>
                <br><br>

                <!-- Campo de forma de pagamento com 3 opções para escolha (select option) e css de classe "campo"-->
                <div>
                    <label for="labelInput"><strong>Forma de Pagamento</strong></label>
                    <select id="FormPagto" required>
                        <option selected disabled value="">Selecione</option>
                        <option>Débito</option>
                        <option>Crédito</option>
                        <option>Pix</option>
                    </select>
                </div>

                <br><br>
                <div class="campo">
                <input type="submit" name="submit" id="submit" value="Agendar">
                <br><br>
            </fieldset>
        </form>
    </div>
</body>
</html>