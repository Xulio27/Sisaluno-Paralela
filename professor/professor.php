<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Formulário</title>
    <link rel="stylesheet" href="../pagina.css">
</head>

<body>
<form method="GET" action="crudaprofessor.php">
    <div class="primeiro">
        <div class="segundo">
            <form action="#">
                <div class="cabecalho">
                    <div class="titulo">
                        <h1>Cadastre-se</h1>
                    </div>
                </div>

                <div class="conteudo">

                    <div class="cx1">
                        <div class="lacuna">
                            <label for=""> Professor<br></label>
                            <input type="text" name="nomeprof" required>
                        </div>

                        <div class="lacuna">
                            <label for="">IDADE<br></label>
                            <input type="text" name="idade" required>
                        </div>

                    </div>

                    <div class="cx2">
                        <div class="lacuna">
                            <label for="">SIAPE<br></label>
                            <input type="text" name="siape" required>
                        </div>

                        <div class="lacuna">
                            <label for="">CPF<br></label>
                            <input type="number" name="cpf" required>
                        </div>
                    </div>

                    <div class="cx4">
                        <div class="lacuna">
                            <label for="">Data de Nascinento<br></label>
                            <input type="date" name="datanascimento" required>
                        </div>

                        <div class="lacuna">
                            <label for="">Endereco<br></label>
                            <input type="text" name="endereco" required>
                        </div>
                    </div>

                </div>

                <div class="cadastrar">
                    <input type="submit" name="cadastroprofessor" value="CADASTRAR">
                </div>
            </form>


        </div>
    </div>

    <div class="posicionar">
        <div class="voltar">
            <button class="button"><a href="../index.php">VOLTAR</a></button>
        </div>
    </div>
    
</form> 
</body>

</html>