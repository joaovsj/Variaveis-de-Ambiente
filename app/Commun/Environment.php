<?php 


namespace App\Commun;

class Environment{

    // metodo responsavel por retornar as variaveis de ambiente caso elas existam
    public static function load($dir){
        
        if(!file_exists($dir.'/.env')){
            return false;
        }

        // funcao nativa do PHP que lê um arquivo e retorna suas linhas individualmente em um array 
        $lines = file($dir.'/.env');

        foreach($lines as $line){

            putenv(trim($line)); // limpa os espacos e cria as variaveis de ambiente
            // put-> colocar | environment -> ambiente
        }
    }

}