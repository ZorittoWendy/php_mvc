<?php

namespace App\Utils;

/* Metodo responsavel por retornar o caminhoo de uma view 
@param string $view
@return stirng */

class View
{
    private static function getContentView($view)
    {
        $file = __DIR__ . '/../../resources/view/' . $view . '.html';
        return file_exists($file) ? file_get_contents($file) : '';
    }
    /* metodo responsavel por retorna o conteudo redenrizado da view
    @param string $view
    @param array $vars (string/numeric )
    @return string */
    public static function render($view, $vars = [])
    {
        // CONTEUDO DA VIEW
        $contentView = self::getContentView($view);
        // CHAVES DO ARRAY DE VARIAVEIS
        $keys = array_keys($vars);
        $keys = array_map(function ($item) {
            return '{{' . $item . '}}';
        }, $keys);
        // RETORNA O CONTEUDO DA VIEW
        return str_replace($keys, array_values($vars), $contentView);
    }
}
