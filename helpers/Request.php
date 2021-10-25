<?php

class Request
{
    public $BODY, $GET, $POST, $METHOD, $URI, $PATH,$originalUri;

    function __construct()
    {
        $this->METHOD = $_SERVER["REQUEST_METHOD"];
        $this->originalUri= $_SERVER["REQUEST_URI"];
        $inputJSON = file_get_contents('php://input');
        $this->BODY = json_decode($inputJSON, TRUE);
        switch ($this->METHOD) {
            case "GET":
                $this->GET = $_GET;
                break;
            case "POST":
                $this->POST = $_POST;
                break;
        }
        $path = $_SERVER["REQUEST_URI"];
        $path = explode("/", $path);
        $path = array_slice($path, 2);
        $this->PATH = $path;
    }
}
