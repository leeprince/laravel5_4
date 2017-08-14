<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class NewsController extends BaseController
{
    public function index()
    {

        return 'laravel NewsController@index';

    }

    public function add()
    {

        return 'laravel NewsController@add';

    }

    public function delete()
    {

        return 'laravel NewsController@delete';

    }

    public function update()
    {

        return 'laravel NewsController@update';

    }

    public function profile()
    {

        return 'laravel NewsController@update';

    }
}
