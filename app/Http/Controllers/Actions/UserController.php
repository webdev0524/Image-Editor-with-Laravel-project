<?php

namespace App\Http\Controllers\Actions;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __construct(){
        $this->middleware('checkAuth')->except('Logout');
    }

    public function Dashboard(){
        return view('actions.dashboard');
    }

    public function Logout(){
        Auth::logout();
        return redirect(route('homepage'))->with('success', 'Log out Successfully');
    }

    public function updateProfileDetails(Request $request){
        try {
            $user = User::where('id', Auth::user()->id)->first();
            if ($request->hasFile('profile_photo') && $request->file('profile_photo')->getSize() > 300000){
                return redirect()->back()->with('failure', 'Image size should not be greater than 3MB');
            }
            if ($request->hasFile('profile_photo') && $request->file('profile_photo')->getSize() < 300000){
                $image_name = User::processImage($request->file('profile_photo'),  'Profile_Picture');
                $user->profile_picture = $image_name;
            }
            if ($request->last_name != null){
                $user->last_name = $request->last_name;
            }
            if ($request->first_name != null){
                $user->first_name = $request->first_name;
            }
            if ($request->job_title != null){
                $user->job_title = $request->job_title;
            }

            $user->save();
            return redirect()->back()->with('success', 'Account Successfully Updated');
        }
        catch (\Exception $exception){
            return redirect()->back()->with('failure', 'Account Details Could not be Updated');
        }
    }
}
