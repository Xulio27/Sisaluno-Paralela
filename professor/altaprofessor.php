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
<?php
    require_once('../conexao.php');

   $idprofessor = $_POST['id'];

   ##sql para selecionar apens um aluno
   $sql = "SELECT * FROM professor where id= :idprofessor";
   
   # junta o sql a conexao do banco
   $retorno = $conexao->prepare($sql);

   ##diz o paramentro e o tipo  do paramentros
   $retorno->bindParam(':idprofessor',$idprofessor, PDO::PARAM_STR);

   #executa a estrutura no banco
   $retorno->execute();

  #transforma o retorno em array
   $array_retorno=$retorno->fetch();
   
   ##armazena retorno em variaveis
   $nomeprof = $array_retorno['nome'];
   $idade = $array_retorno['idade'];
   $cpf = $array_retorno['cpf'];
   $siape = $array_retorno['siape'];
   $endereco = $array_retorno['endereco'];
   $datanascimento = $array_retorno['datanascimento'];


?>
<form method="POST" action="crudaprofessor.php">
    <div class="primeiro">
        <div class="segundo">
            <form action="#">
                <div class="cabecalho">
                    <div class="titulo">
                        <h1>Alterar Professor</h1>
                    </div>
                </div>

                <div class="conteudo">

                    <div class="cx1">
                        <div class="lacuna">
                            <label for=""> Professor<br></label>
                            <input type="text" name="nomeprof" value="<?php echo $nomeprof;?>" required>
                        </div>

                        <div class="lacuna">
                            <label for="">IDADE<br></label>
                            <input type="text" name="idade" required value="<?php echo $idade;?>">
                        </div>

                    </div>

                    <div class="cx2">
                        <div class="lacuna">
                            <label for="">SIAPE<br></label>
                            <input type="text" name="siape" required value="<?php echo $siape;?>">
                        </div>

                        <div class="lacuna">
                            <label for="">CPF<br></label>
                            <input type="number" name="cpf" required value="<?php echo $cpf;?>">
                        </div>
                    </div>

                    <div class="cx4">
                        <div class="lacuna">
                            <label for="">Data de Nascinento<br></label>
                            <input type="date" name="datanascimento" required value="<?php echo $datanascimento;?>">
                        </div>

                        <div class="lacuna">
                            <label for="">Endereço<br></label>
                            <input type="text" name="endereco" required value="<?php echo $endereco;?>">
                        </div>
                    </div>

                </div>

                <input type="hidden" name="id" value="<?php echo $id;?>">

                <div class="cadastrar">
                    <input type="submit" name="update" value="ALTERAR">
                </div>
            </form>


        </div>
    </div>

    <div class="posicionar">
        <div class="voltar">
            <button class="button"><a href="listaprofessor.php">VOLTAR</a></button>
        </div>
    </div>
    
</form> 
</body>

</html>