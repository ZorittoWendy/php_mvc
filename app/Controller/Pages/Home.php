<?php

namespace App\Controller\Pages;

use App\Utils\View;
use App\Model\Entity\Organization;

/* Metodo responsavel por retornar o conteudo (view) da nossa home 
@return string */

class Home extends Page
{
    public static function getHome()
    {
        // Organização 
        $obOrganization = new Organization;
        // VIEW DA HOME
        $content = View::render('pages/home', [
            'name'         => $obOrganization->name,
            'description'  => $obOrganization->description,
            'site'         => $site,
        ]);
        //RETORNA A VIEW DA PAGINA 
        return parent::getPage('ZORITTO - Canal - HOME', $content);
    }
}
