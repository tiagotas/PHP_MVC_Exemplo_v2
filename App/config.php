<?php

/**
 * Caminhos de Diretório
 * A função define() serve ára definir uma constante do PHP (sem o cifrão
 * e sempre escritas em maiúsculo). As constantes conterão caminhos absolutos
 * de diretórios até os arquivos, para iso usamos a função dirname que retorna
 * o caminho absoluto até um determinado arquivo e usamos como base o próprio arquivo,
 * com o uso da constante do PHP chamada __FILE__ Para ver o caminho completo
 * contido dentro de cada função, dê um echo na constante.
 * 
 * Leituras complementares sobre:
 * Função define => https://www.php.net/manual/pt_BR/function.define.php
 * Função dirname => https://www.php.net/manual/pt_BR/function.dirname.php
 * Constante Mágica __FILE__ => https://www.php.net/manual/pt_BR/language.constants.magic.php
 * 
 */
define('BASEDIR', dirname(__FILE__, 2));
define('VIEWS', BASEDIR . '/View/modules/');

/**
 * Dados de conexão ao Banco de Dados
 * As variáveis de ambiente (environment) contém informações sobre o ambiente
 * em que o sistema/site/app está executando. Aqui nós estamos add as informações
 * do banco de dados. Como se trata de uma variável super global, esses dados estão 
 * disponíveis em toda aplicação, até chegar no momento da conexão com o db.
 * ( será que isso é seguro?)
 * 
 * Leia mais em: https://www.php.net/manual/pt_BR/reserved.variables.environment.php
 */
$_ENV['db']['host'] = 'localhost:3306';
$_ENV['db']['user'] = 'root';
$_ENV['db']['pass'] = 'cajuru@2022';
$_ENV['db']['database'] = 'db_mvc';