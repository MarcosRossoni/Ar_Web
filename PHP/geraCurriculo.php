<?php
$dados = array(
    'nome' => $_POST['nome'],
    'nacionalidade' => $_POST['nacionalidade'],
    'data-nascimento' => $_POST['data-nascimento'],
    'estado-civil' => $_POST['estado-civil'],
    'cidade' => $_POST['cidade'],
    'cargo' => $_POST['cargo'],
    'cidade' => $_POST['cidade'],
    'estado' => $_POST['estado'],
    'endereco' => $_POST['endereco'],
    'bairro' => $_POST['bairro'],
    'telefone' => $_POST['telefone'],
    'email' => $_POST['email'],
    'linkedin' => $_POST['linkedin'],
    'github' => $_POST['github'],
    'resumo' => $_POST['resumo'],
    'formacoes' => isset($_POST['formacao-curso']) ?
                   array(
                        'cursos' => $_POST['formacao-curso'],
                        'instituicoes' => $_POST['formacao-instituicao'],
                        'conclusoes' => $_POST['formacao-conclusao']
                    ) : null,
    'experiencias' => isset($_POST['experiencia-cargo']) ? 
                      array(
                        'cargos' => $_POST['experiencia-cargo'],
                        'empresas' => $_POST['experiencia-empresa'],
                        'inicios' =>  $_POST['experiencia-inicio'],
                        'fins' =>  $_POST['experiencia-fim'],
                      ) : null
                      );
require_once("modelo.php");