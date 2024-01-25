<?php

namespace App\Http;

class Router
{
    private $url = '';
    private $prefix = '';
    private $routes = [];
    private $request;

    public function __construct($url)
    {
        $this->url = $url;
        $this->request = new Request();
        $this->setPrefix();
    }

    private function setPrefix()
    {
        $parseUrl = parse_url($this->url);

        $this->prefix = $parseUrl['path'] ?? '';
    }
    private function addRoute($method, $route, $params = [])
    {
        
    }

    public function get($route, $params = [])
    {
        $this->addRoute('GET',$route, $params);
    }
}
