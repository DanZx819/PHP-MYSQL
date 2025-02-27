

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos PHP&MySQL</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header class="container-pai">

    <div class="container">
            <img src="img/logo.png" alt="Logo" title="Logo" id="img">
            <div id="menu">
                <a href="?pagina=home">Home</a>
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matricula">Matriculas</a>
            </div>
        </div>
        


    </header>

    <main>

        <div id="conteudo" class="container1" id="form-box">
            <h1>Inserir uma Nova Matriculas</h1>
            <p> Selecione o Aluno</p>
            <form action="processa_matricula.php" method="post">
                <select name="escolha_aluno">
                    <option value="">Selecione um aluno</option>
                    <?php
                    while ($linha = mysqli_fetch_array($consulta_alunos)) {
                        echo '<option value="' . $linha['ID_aluno'] . '">' . $linha['nome_aluno'] . '</option>';
                    }
                    ?>
                </select>

                <select name="escolha_curso">
                    <option value="">Selecione um Curso</option>
                    <?php
                    while ($linha = mysqli_fetch_array($consulta_cursos)) {
                        echo '<option value="' . $linha['id_curso'] . '">' . $linha['nome_curso'] . '</option>';
                    }
                    ?>
                </select>


                </select>
                <input type="submit" value="Matricular">
            </form>
        </div>
    </main>

    <footer>
        <div class="container" id="footer">
            <p>@2025 Green Dog Cursos - Todos os direitos reservados</p>
        </div>
    </footer>
</body>

</html>