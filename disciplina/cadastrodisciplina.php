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
<form method="GET" action="crudadisciplina.php">
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
                            <label for=""> Disciplina<br></label>
                            <input type="text" name="disciplina" required>
                        </div>

                        <div class="lacuna">
                            <label for="">CARGO HORARIA<br></label>
                            <input type="text" name="ch" required>
                        </div>
                    </div>

                    <div class="cx2">
                        <div class="lacuna">
                            <label for="">SEMESTRE<br></label>
                            <input type="number" name="semestre" required>
                        </div>

                        <div class="lacuna">
                            <label for="">ID DO PROFESSOR<br></label>
                            <input type="number" name="idprofessor" required>
                        </div>
                    </div>

                    <div class="cx4">
                        <div class="lacuna">
                            <label for="">NOTA 01<br></label>
                            <input type="number" name="nota1" required>
                        </div>

                        <div class="lacuna">
                            <label for="">NOTA 02<br></label>
                            <input type="number" name="nota2" required>
                        </div>
                    </div>

                </div>

                <div class="cadastrar">
                    <input type="submit" name="cadastrodisciplina" value="CADASTRAR">
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