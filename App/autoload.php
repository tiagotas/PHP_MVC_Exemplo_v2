<?php

spl_autoload_register(function ($nome_da_classe) {

    //echo "Tentou dar include de: " . $nome_da_classe;

    $classe_controller = 'Controller/' . $nome_da_classe . ".php";
    $classe_model = 'Model/' . $nome_da_classe . ".php";
    $classe_dao = 'DAO/' . $nome_da_classe . ".php";


    if(file_exists($classe_controller))
    {
        include $classe_controller;

    } else if(file_exists($classe_model)) {

        include $classe_model;

    } else if(file_exists($classe_dao)) {
        
        include $classe_dao;
    }

    //include 'classes/' . $class . '.class.php';
});