<?php 
#Base de dados
include 'db.php';

#Conteúdo da pagina

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}else{
    $pagina = 'home';
}

switch($pagina){
    case 'cursos';
    include 'cursos.php'; break;
    
    case 'inserir_cursos';
    include 'inserir_curso.php'; break; 

    case 'alunos';
    include 'alunos.php'; break;
    
    case 'inserir_aluno';
    include 'inserir_aluno.php'; break;

    

    case 'matricula';
    include 'matriculas.php'; break;

    case 'inserir_matricula';
    include 'inserir_matricula.php'; break;

    default: include 'home.php'; break;
}



?>