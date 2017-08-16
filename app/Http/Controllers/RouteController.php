<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RouteController extends BaseController
{
    public function route_name()
    {

        return 'laravel RouteController.php@route_name-route_name:'.route('route_name_url');

    }

    public function route_name_url_id($id = 0)
    {

        return 'laravel RouteController.php@route_name-route_name_url_id: '.route('route_name_url_id',array('id' => $id));

    }
}
