<?php
namespace App\Controllers;

use FrameworkAULA\Http\Controller;

class IndexController extends Controller
{
    public function index()
    {
        $this->service->render('index.phtml');
    }

    public function test()
    {
        echo "This is an test";
    }
}