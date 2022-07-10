<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserInformation;
use Illuminate\Support\Facades\DB;

class LogInLogOutController extends Controller
{
    public function signUp()
    {

        return view("log.in");
    }

    public function store(Request $request)
    {

        $userInformation = new UserInformation();

        $userFullName = $request["userName"];

        $userArray = explode(" ", $userFullName);
        $userFirstName = $userArray[0];

        $i = 1;
        $userLastName = "";

        while (count($userArray) >= $i) {

            if (isset($userArray[$i])) {

                $userLastName .= (" " . $userArray[$i]);
            }

            $i++;
        };


        $userInformation->first_name = $userFirstName;
        $userInformation->last_name = $userLastName;
        $userInformation->email = $request["userEmail"];
        $userInformation->password = $request["userPassword"];

        $userInformation->save();

        return redirect()->route("home.index");
    }

    public function login()
    {
        return view("log.login");
    }

    public function logUser(Request $request)
    {

        $userLogin = $request["userLogin"];
        $userPassword = $request["userPassword"];



        $verifyUser = DB::selectOne(
            "SELECT password from user_information WHERE first_name = '$userLogin' OR email = '$userLogin'"
        );

        if (!isset($verifyUser->password)) {
            return redirect()->route("login");
        }

        // $verifyPassword = DB::select(
        //     "SELECT password FROM user_information WHERE first_name = '$verifyUser'"
        //     )

        if ($verifyUser->password === $userPassword) {

            return  redirect()->route("home.index");
        }

        return redirect()->route("login");
    }
}
