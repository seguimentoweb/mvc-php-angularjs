<?php
namespace FrameworkAULA\Http;

use Klein\ServiceProvider;

class View extends ServiceProvider
{
    public function render($view, Array $data = [])
    {
        parent::render(VIEWS . "/" . $view, $data);
    }
}