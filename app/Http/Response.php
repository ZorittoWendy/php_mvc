<?php

namespace App\Http;

class Response
{
    /* Codigo do status HTTP    
    @var interger */
    private $httpCode = 200;

    /* Cabeçalho do response
    var array */
    private $headers = [];

    /* Tipo de contéudo que está sendo retornado
    var string */
    private $contentType = 'text/html';

    /* Conteudo do Response 
    var mixed */
    private $content;

    /* Método responsavel por iniciar a classe e definir os valores
    param interger $httpCode 
    param mixed $content 
    param string $contentType */
    public function __construct($httpCode, $content, $contentType = 'text/html')
    {
        $this->httpCode = $httpCode;
        $this->content = $content;
        $this->setContentType($contentType);
    }

    /* Método responsável por alterar o content  type do response 
   param string $contentType */
    public function setContentType($contentType)
    {
        $this->contentType = $contentType;
        $this->addHeader('Content-Type', $contentType);
    }

    /* Método responsável por adicionar um registro no cabeçalho de response
   param string $key
   param string $value */

    public function addHeader($key, $value)
    {
        $this->headers[$key] = $value;
    }

    /* Metodo responsável por enviar os headers para o navegador */
    public function sendHeaders()
    {
        //STATUS
        http_response_code($this->httpCode);
        //ENVIAR HEARDERS
        foreach ($this->headers as $key => $value) {
            header($key . ': ' . $value);
        }
    }

    /* Metodo resposável por enviar a resposta ao usuario */
    public function sendResponse()
    {
        //Envia os headers
        $this->sendHeaders();
        // imprimir os conteudo
        switch ($this->contentType) {
            case 'text/html':
                echo $this->content;
                exit;
        }
    }
}
