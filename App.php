<?php

namespace App;

use App\Routes\Request;
use App\Routes\Route;

class App
{
    public function run() {
        $request = new Request();
        $route = new Route($request);
        $action = $route->action();
        return $action;
    }
}
