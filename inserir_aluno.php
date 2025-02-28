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
                <a href="?pagina=cursos">Cursos</a>
                <a href="?pagina=alunos">Alunos</a>
                <a href="?pagina=matricula">Matriculas</a>
            </div>
        </div>

        
    </header>
    
    <main>
        <div id="conteudo" class="container1" id="form-box">
            <h1>Inserir um novo Aluno</h1>
            <form method="post" action="processa_aluno.php">
                <label>Nome do Aluno</label>
                <input type="text" name="nome_aluno" placeholder="Insira o Nome">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento">

                <input type="submit" value="Inserir Aluno">
            </form>
        </div>
    </main>
    
    <footer ><div class="container" id="footer"><p>@2025 Green Dog Cursos - Todos os direitos reservados</p></div></footer>
</body>
</html>
<?php 
}else{ ?>

<?php while ($linha = mysqli_fetch_array($consulta_alunos)){ ?>
    <?php if($linha['ID_aluno'] == $_GET['editar']){ ?>

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
            <h1>Editar um Aluno</h1>
            <form method="post" action="edita_aluno.php">
                <input type="hidden" name="ID_aluno" value="<?php echo $linha['ID_aluno']?>">
                <label>Nome do Aluno</label>
                <input type="text" name="nome_aluno" placeholder="Insira o Nome" value=" <?php  echo $linha['nome_aluno'];?>">
                <label>Data de Nascimento</label>
                <input type="text" name="data_nascimento" placeholder="Insira a Data de Nascimento" value="<?php echo $linha['data_nascimento'];?>">

                <input type="submit" value="Editar Aluno">
            </form>
        </div>
    </main>
    
    <footer ><div class="container" id="footer"><p>@2025 Green Dog Cursos - Todos os direitos reservados</p></div></footer>
</body>
</html>
<?php }?>
<?php }?>
<?php }?>