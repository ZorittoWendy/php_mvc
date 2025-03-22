<?php

namespace App\Controller\Pages;

use App\Utils\View;

/* Metodo responsavel por retornar o conteudo (view) da nossa pagina generica
@return string */

class Page
{
    /* Metódo responsável por renderizar a página
    @return string */
    private static function getHeader()
    {
        return View::render('pages/header');
    }
    /* Metódo responsável por redenrizar o rodapé da página
    @return string */
    private static function getFooter()
    {
        return View::render('pages/footer');
    }

    /* Metodo responsável por retornar o conteudo (view ) da nossa página genérica @return string */
    public static function getPage($title, $content)
    {
        return View::render('pages/page', [
            'title'     => $title,
            'header'    => self::getHeader(),
            'content'   => $content,
            'footer'    => self::getFooter(),
        ]);
    }
}
