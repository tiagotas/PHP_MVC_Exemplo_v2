<?php

/**
 * Caminhos de Diretório
 */
define('BASEDIR', dirname(__FILE__) . '/../');
define('VIEWS', dirname(__FILE__) . '/View/modules/');

/**
 * Dados de conexão ao Banco de Dados
 */
$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'cajuru@2022';
$_ENV['db']['database'] = 'db_mvc';

