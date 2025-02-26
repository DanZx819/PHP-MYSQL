<?php 
#Base de dados
include 'db.php';

#Conteúdo da pagina

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}else{
    $pagina = 'home';
}
if($pagina == 'cursos'){
    include 'cursos.php';
}elseif ($pagina == 'alunos'){
    include 'alunos.php';
}elseif ($pagina == 'matricula'){
    include 'matriculas.php';
}elseif ($pagina == 'inserir_cursos'){
    include 'inserir_curso.php';
}else{
    include 'home.php'; // Agora só é incluído uma vez
}


?>