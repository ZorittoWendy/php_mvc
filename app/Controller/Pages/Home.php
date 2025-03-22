<?php

namespace App\Controller\Pages;

use App\Utils\View;

/* Metodo responsavel por retornar o conteudo (view) da nossa home 
@return string */

class Home extends Page
{
    public static function getHome()
    {
        // VIEW DA HOME
        $content = View::render('pages/home', [
            'name' => 'zoritto - github',
            'description' => 'pagina do github: https://github.com/ZorittoWendy/php_mvc',
            'site' => 'www.linkedin.com/in/wendeson-farias'
        ]);
        //RETORNA A VIEW DA PAGINA 
        return parent::getPage('ZORITTO - Canal - HOME', $content);
    }
}
