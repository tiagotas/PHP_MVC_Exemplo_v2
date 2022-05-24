<?php

/**
 * Definição do namespace da controller. Veja que temos o namespace chamado "App"
 * e dentro do namespace App temos o subnamespace "Controller". Também é importante
 * observar que eles são o mesmo caminho de diretórios e usamos barra invertida
 * para definir os namespaces.
 * Leia mais sobre namespaces => http://www.diogomatheus.com.br/blog/php/entendendo-namespaces-no-php/
 * Namespaces no manual => https://www.php.net/manual/pt_BR/language.namespaces.rationale.php
 */
namespace App\Controller;


/**
 * Classe abstrata Controller para armazenar métodos comuns às classes Controller.
 * Manual do PHP => https://www.php.net/manual/pt_BR/language.oop5.abstract.php
 * Leia mais sobre abstração: https://www.devmedia.com.br/trabalhando-com-abstracao-em-php/28351
 */
abstract class Controller 
{
    /**
     * 
     */
    protected static function render($view, $model = null)
    {
        //$arquivo_view = "View/modules/$view.php";
        $arquivo_view = VIEWS . $view . ".php";

        if(file_exists($arquivo_view))
            include $arquivo_view;
        else
            exit('Arquivo da View não encontrado. Arquivo: ' . $view);
    }    
}