<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\LoginUserRequest;
use App\Models\ConnectionActive;
use App\Models\User;

class AuthController extends Controller
{
    /*
     * Method for login user in the system
     * 
     * 
    */
    public function login(LoginUserRequest $request){
        
        $name = $request->name;

        $password = $request->password;

        $userName = User::search_by_name($name);

        if($userName->name == $name){

            $user = User::verify_password($password);

            if($user->password == $password){

                $userId = $user->id;

                $connectionUser = new ConnectionActive();

                $connectionUser->state = "active";

                $connectionUser->user_id = $userId;

                $connectionSave = $connectionUser->save();

                if($connectionSave){

                    return redirect('/client');

                }

            }

        }

    }

    /*
     * Method for show login view to user
     * 
     * 
    */
    public function login_view(){
        return view("user.login.login");
    }

    /*
     * Method for logout user the system
     * 
     * 
    */
    public function logout(){

        $logout = ConnectionActive::closeConnection(1);

        if($logout == true){

            return redirect('/');

        }

    }
}
