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
        <a href="?pagina=inserir_cursos"> Inserir novo curso</a>
        <div id="conteudo" class="container">
            
            <table style="border: 1px solid #ccc; width:100%  ">
                <tr>
                    <th>Nome Curso</th>
                    <th>Carga Horaria</th>

                </tr>
                <?php 
                    while($linha = mysqli_fetch_array($consulta_cursos)){
                        echo '<tr><td>'.$linha['nome_curso'].'</td>';
                        echo '<td>'.$linha['carga_horaria'].'</td></tr>';
                    }
                ?>
            </table>

        </div>
    </main>
    
    <footer ><div class="container" id="footer"><p>@2025 Green Dog Cursos - Todos os direitos reservados</p></div></footer>
</body>
</html>