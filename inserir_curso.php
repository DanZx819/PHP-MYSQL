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
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matricula">Matriculas</a>
            </div>
        </div>

        
    </header>
    
    <main>
        <div id="conteudo" class="container1" id="form-box">
            <h1>Inserir um novo curso</h1>
            <form method="post" action="processa_curso.php">
                <label>Nome curso</label>
                <input type="text" name="nome_curso" placeholder="Insira o Curso">
                <label>Carga Horaria</label>
                <input type="text" name="carga_horaria" placeholder="Insira a Caraga Horaria">

                <input type="submit" value="Inserir curso">
            </form>
        </div>
    </main>
    
    <footer ><div class="container" id="footer"><p>@2025 Green Dog Cursos - Todos os direitos reservados</p></div></footer>
</body>
</html>