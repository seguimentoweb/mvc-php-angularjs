<?php
namespace FrameworkAULA\Http;

use FrameworkAULA\Http\View;

abstract class Controller
{
    protected $resquest, $response, $service, $app;

    public function loadVars($resquest, $response, $app)
    {
        $this->resquest = $resquest;
        $this->response = $response;
        $this->service = new View($resquest, $response);
        $this->app = $app;
    }
}