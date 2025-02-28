<?php 
if(!isset($_GET['editar'])){?>

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

<?php } else{?>
<?php while ($linha = mysqli_fetch_array($consulta_cursos)){ ?>
        <?php if($linha['id_curso'] == $_GET['editar']){ ?>

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
            <h1>Editar o Curso</h1>
            <form method="post" action="edita_curso.php">
                <input type="hidden" name="id_curso" value="<?php echo $linha['id_curso']?>">
                <label>Nome curso</label>
                <input type="text" name="nome_curso" placeholder="Insira o Curso" value="<?php echo $linha['nome_curso']?>">
                <label>Carga Horaria</label>
                <input type="text" name="carga_horaria" placeholder="Insira a Caraga Horaria"  value="<?php echo $linha['carga_horaria']?>">

                <input type="submit" value="Inserir curso">
            </form>
        </div>
    </main>
    
    <footer ><div class="container" id="footer"><p>@2025 Green Dog Cursos - Todos os direitos reservados</p></div></footer>
</body>
</html>

<?php }?>
<?php }?>
<?php }?>