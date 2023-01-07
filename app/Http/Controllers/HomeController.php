<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function test(Request $request){


//        $listUser = DB::table('users')
//            ->where(function ($query) {
//                $query->where("name", "=", "test1");
//                $query->where("email", "=", "test1@gmail.com");
//            })->orWhere('id', '>', 10);

//        $listUser = DB::table('users')
//            ->orderBy("id", "DESC")
//            ->orderBy("name", "DESC")
//            ->get();

//        $listUser = DB::table("users")
//            ->limit(5)
//            ->offset(2)
//            ->get();

//        DB::table('users')
//            ->where("id", "=", 1)
//            ->update([
//                "name" => "Hoang 123",
//                "email" => "hoang@gmail.com"
//            ]);

        DB::table('users')->insertOrIgnore([
            [
                'name' => '1223asd',
                'email' => '113asdasd',
                'password' => Hash::make(123),
                'created_at' => Carbon::now()
            ],
            [
                'name' => '122333asdasd',
                'email' => '113wedfwefasdasd',
                'password' => Hash::make(123),
                'created_at' => Carbon::now()
            ]
        ]);
//
//        DB::table('users')->where('id', "=", "2")->delete();

//        $user = new User();
//         $user->setAttribute("name", "hoang 123");
//        $user->setAttribute("email", "hoang12341");
//        $user->setAttribute("password", Hash::make("123"));
//        $user->save();




        $listUser = User::orderBy('id', 'DESC')->get();




        return response()->json([
            $listUser
        ]);
    }
}
