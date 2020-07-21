<?php
// Alterando o nome e iniciando a sessão
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();

// Puxando o arquivo de configuração para utiliza-lo em todo o projeto
require 'config.php';

// Alterando o fuso horário
date_default_timezone_set('America/Sao_Paulo');

// Instanciando as classes dos models e dos controllers
spl_autoload_register(function($class){
    if(file_exists('app/controllers/'.$class.'.php')){
        require 'app/controllers/'.$class.'.php';
    }else if(file_exists('app/core/'.$class.'.php')){
        require 'app/core/'.$class.'.php';
    }else if(file_exists('app/models/'.$class.'.php')){
        require 'app/models/'.$class.'.php';
    }
});

$core = new Core();
$core->run();
?>