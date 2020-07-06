<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthenticationController extends Controller
{
    public function Register(Request $request){
        $this->validate($request, [
           'email' => 'bail|required|unique:users',
           'password' => 'bail|required'
        ]);
        try {
             User::newUser($request->email, $request->password);
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect(route('user.dashboard'))->with('success','Authentication Successfull');
            }
            else{
                return  redirect()->back()->with('failure', 'user could not be signed in');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', $exception->getMessage());
        }
    }
    public function Login(Request $request){
        $this->validate($request, [
            'email' => 'bail|required',
            'password' => 'bail|required'
        ]);
        try {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])){
                return redirect(route('user.dashboard'))->with('success','Authentication Successfull');
            }
            else{
                return  redirect()->back()->with('failure', 'Invalid Email or Password');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', $exception->getMessage());
        }
    }

    public function redirectToProvider($social){
        try {
            return Socialite::driver($social)->redirect();
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', $exception->getMessage());
        }
    }

    public function handleProviderCallback($social)
    {
        try {
            $user = Socialite::driver($social)->user();
            if ($user->getEmail() != null){
                $check_user = User::where('email', $user->getEmail())->first();
                if ($check_user){
                    Auth::loginUsingId($check_user->id);
                    return redirect(route('user.dashboard'))->with('success', 'Authentication Successfull');
                }
                else{
                    User::newUser($user->getEmail(), $user->getEmail(), $user->getName());
                    if (Auth::attempt(['email' => $user->getEmail(), 'password' => $user->getEmail()])) {
                        return redirect(route('user.dashboard'))->with('success', 'Authentication Successfull');
                    }
                    else{
                        return redirect(route('login'))->with('failure', 'Account Could Not Be Verified');
                    }
                }
            }
            else{
                return redirect(route('login'))->with('failure', 'Account Could Not Be Verified');
            }
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', $exception->getMessage());
        }

        // $user->token;
    }
}
