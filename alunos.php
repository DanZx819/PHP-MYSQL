<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos PHP&MySQL</title>
    <link rel="stylesheet" href="estilo/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <header class="container-pai">
        
        <img src="img/logo.png" alt="Logo" title="Logo" id="img">
        <nav class="nav">
            <div id="menu">
                <a href="?pagina=home">Home</a>
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matricula">Matriculas</a>
            </div>
        </nav>


    </header>

    <main>

        
        <div id="conteudo" class="container1">
        
            <table class="table" id="tabela">
                <tr>
                    <th>Nome Aluno</th>
                    <th>Data Nascimento</th>
                    <th>Editar</th>
                    <th>Deletar</th>
                </tr>
                <?php
                while ($linha = mysqli_fetch_array($consulta_alunos)) {
                    echo '<tr><td>' . $linha['nome_aluno'] . '</td>';
                    echo '<td>' . $linha['data_nascimento'] . '</td>';
                
                ?>
                    <td><a href="?pagina=inserir_aluno&editar=<?php echo $linha['ID_aluno'];?>">Editar</a></td>
                    <td><a href="deleta_aluno.php?id_aluno=<?php echo $linha['ID_aluno'];?>">Deletar</a></td>
                <?php
                }
                ?>
            </table>
            <a href="?pagina=inserir_aluno" class="btn btn-success" id="btn_insert"> Inserir novo Aluno</a>
        </div>
    </main>

    <footer>
        <div class="container" id="footer">
            <p>@2025 Green Dog Cursos - Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>