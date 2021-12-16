<?php

namespace App\Http\Controllers\frontend;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Http\Requests\SignupRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;


class Login_SignupController extends Controller
{
    //


    public function indexSignup(){	
        return view('frontend.login.signup');
    }

    public function createUser(SignupRequest $request)
    {      
        $user = new User();
        $data = $request->all();

        $user->name = $data['name'];
        $user->email = $data['email'];
        $user->password = Hash::make($data['password']);
        $user->level = 0;

  	  	$file = $request->avatar;

        if(!empty($file)){
            $data['avatar'] = $file->getClientOriginalName();
            $user->avatar = $data['avatar'];
        }
        if($user->save()){
            if(!empty($file)){
            $file->move("upload/user/avatar",$file->getClientOriginalName());
        }
            return redirect('/login')->with('success',__('create account succes'));

        }else{
            return redirect()->back()->withErrors('create account error');
        }

    }

    public function indexLogin(){	
        return view('frontend.login.log');
    }

    public function login(LoginRequest $request)
    { 
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect("/")->with('success',__('login succes'));
        }else{
            return redirect()->back()->withErrors('Login error, Email or Password is not correct');
        }
    }

    // logout
    public function logout(Request $request) {
        Auth::logout();
        session()->flush();
        return redirect('/login');
    }

    

}
