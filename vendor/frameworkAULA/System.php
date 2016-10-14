<?php
namespace FrameworkAULA;

/**
 * Class System
 * @package FrameworkAULA
 * Gerenciar o get URL
 */
class System
{
    private $url;
    private $controller;
    private $action;

    public function __construct()
    {
        $this->setUrl($_GET);
        $this->setController();
        $this->setAction();
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     * @return System
     */
    public function setUrl($url)
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getController()
    {
        return $this->controller;
    }

    /**
     * @param mixed $controller
     * @return System
     */
    public function setController()
    {
        $this->controller = empty($this->url['controller']) ? 'Index' : $this->url['controller'];
    }

    /**
     * @return mixed
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     * @return System
     */
    public function setAction()
    {
        $this->action = $this->controller = empty($this->url['action']) ? 'index' : $this->url['action'];
    }

    public function run()
    {
        $controller = "App\\Controllers\\" . ucfirst($this->controller) . "Controller";
        $action = $this->action;

        $instance = new $controller();
        $instance->$action();
    }
}