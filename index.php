<?php 

  // variaveis de ambiente, são variavieis que podem ser acessadas em todos os processos dentro de um mesmo ambiente 

  // NÃO GRAVE SENHAS NEM VARIAVEIS DE AMBIENTE NO GIT
 
    require_once __DIR__.'/vendor/autoload.php';

    use \App\Commun\Environment;

    Environment::load(__DIR__);
    // funcao que retorna todas as variaveis de ambiente do seus Sistema Operacional
    
    $environment = getenv();
    
    die(var_dump($environment));
    //echo getenv('DB_PASS');
    