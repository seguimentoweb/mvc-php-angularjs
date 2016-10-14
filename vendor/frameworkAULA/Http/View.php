<?php
namespace FrameworkAULA\Http;

use Klein\ServiceProvider;

class View extends ServiceProvider
{
    public function render($view = [], $data = [])
    {
        parent::render("app/Views/" . $view, $data);
    }
}