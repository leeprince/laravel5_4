<?php

namespace App\Http\Controllers;

use App\Models\Member;

class MemberController extends Controller
{
    public function info()
    {
<<<<<<< HEAD
	   	// return 'MemberController@info';
	   	// return view('member-info');
	    // return view('member/info',[
	    // 	'name' => 'leeprince',
	    // 	'love' => 'basketball',
	    // ]);
=======
//    	 return 'MemberController@info';
//    	 return view('member-info');
//         return view('member/info',[
//         	'name' => 'leeprince',
//         	'love' => 'basketball',
//         ]);
>>>>>>> 24045ab93fbc8568feb16c6ee8bb1a8dbf358e1c

        return Member::getMember();
    }
}
