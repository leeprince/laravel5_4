<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $authUser = $request->user();


        // 默认登录成功后页面
        return view('home', [
            'authUser' => $authUser,
        ]);

        // 自定义重定向
        // return redirect('student_index');
    }
}
