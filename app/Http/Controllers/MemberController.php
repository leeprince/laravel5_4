<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function info()
    {
//    	 return 'MemberController@info';
//    	 return view('member-info');
//         return view('member/info',[
//         	'name' => 'leeprince',
//         	'love' => 'basketball',
//         ]);

        return Member::getMember();
    }
}
