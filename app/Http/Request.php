<?php

namespace App\Http;

class Request
{
    /* Metodo de Requisição 
    Var String*/
    private $httpMethod;

    /* URI da página
    Var string */
    private $uri;

    /* parametros de URl ($_GET) 
    Var array */
    private $queryParams = [];

    /* privite description da página ($_POST)
    Var array */
    private $postVars = [];

    /* Cabeçaho da requisação
    Var array*/
    private $headers = [];

    /* Construtor da classe */
    public function __construct()
    {
        $this->queryParams      = $_GET ?? [];
        $this->postVars         = $_POST ?? [];
        $this->headers          =  getallheaders();
        $this->httpMethod       =  $_SERVER['REQUEST_METHOD'] ?? '';
        $this->uri              =  $_SERVER['REQUEST_URI'] ?? '';
    }

    /* Metodo responsavel pro retorno o método HTTP da requisão 
    return string */
    public function getHttpMethod()
    {
        return $this->httpMethod;
    }

    /* Metodo responsavel pro retorno o método URI da requisão 
    return string */
    public function getUri()
    {
        return $this->uri;
    }

    /* Metodo responsavel pro retorno o método URL da requisão 
    return array */
    public function getQueryParams()
    {
        return $this->queryParams;
    }

    /* Metodo responsavel pro retorno o método POST da requisão 
    return string */
    public function getPostVars()
    {
        return $this->postVars;
    }
}
