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
                <thead>
                    <tr>
                        <th>Nome Curso</th>
                        <th>Carga Horaria</th>
                        <th>Editar</th>
                        <th>Deletar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        while($linha = mysqli_fetch_array($consulta_cursos)){
                            echo '<tr><td>'.$linha['nome_curso'].'</td>';
                            
                            echo '<td>'.$linha['carga_horaria'].'</td>';
                            
                    ?>
                        <td><a href="?pagina=inserir_cursos&editar=<?php echo $linha['id_curso'];?>">Editar</a></td>
                        <td><a href="deleta_curso.php?id_curso=<?php echo $linha['id_curso'];?>">Deletar</a></td></tr>
                        

                    <?php 
                        }
                    ?>
                </tbody>
            </table>
            <a href="?pagina=inserir_cursos" class="btn btn-success" id="btn_insert">Inserir novo curso</a>
        </div>
    </main>
    
    <footer ><div class="container" id="footer"><p>@2025 Green Dog Cursos - Todos os direitos reservados</p></div></footer>
</body>
</html>