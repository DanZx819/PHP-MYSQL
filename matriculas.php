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
                    <th>Nome Curso</th>
                    <th>Deletar</th>
                </tr>
                <?php 
                    while ($linha = mysqli_fetch_array($consulta_matriculas)) {
                        echo '<tr>';
                        echo '<td>' . $linha['nome_aluno'] . '</td>';
                        echo '<td>' . $linha['nome_curso'] . '</td>';
                ?>
                    <td><a href="deleta_matricula.php?id_aluno_curso=<?php echo $linha['id_aluno_curso']; ?>">Deletar</a></td>

                </tr>
                <?php 
                    }
                ?>
            </table>
            <a href="?pagina=inserir_matricula" class="btn btn-success" id="btn_insert">Inserir Matricula</a>
        </div>
    </main>

    <footer>
        <div class="container" id="footer">
            <p>@2025 Green Dog Cursos - Todos os direitos reservados</p>
        </div>
    </footer>
</body>
</html>
