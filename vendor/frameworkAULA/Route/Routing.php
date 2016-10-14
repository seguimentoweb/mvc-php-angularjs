<?php
namespace FrameworkAULA\Route;

use Klein\Klein as Klein;

class Routing extends Klein
{
    public function get($route, $call)
    {
        if (is_string($call)) {
            $explode = explode('@', $call);
            $controller = 'App\\Controllers\\' . $explode[0] . 'Controller';
            $action = $explode[1];
           $this->respond('GET', $route, function($resquest, $response, $service, $app) use ($controller, $action){
                $instance = new $controller();
                $instance->loadVars($resquest, $response, $app);
                return $instance->$action();
            });
        } else {
            parent::get($route, $call);
        }
    }

    public function post()
    {

    }

    public function put()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}