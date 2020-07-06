<?php

namespace App\Http\Controllers;

use App\Feedback;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class HomepageController extends Controller
{
     public function Homepage(){
         return view('actions.homepage');
     }
     public function Feature(){
         return view('actions.feature');
     }
     public function Pricing(){
         return view('actions.pricing');
     }
     public function Login(){
         return view('actions.login');
     }
     public function changePassword(){
         return view('actions.change-password');
     }
     public function proceedChangePassword(Request $request){
         $check_user = User::where('email', $request->email)->first();
         try {
             if ($check_user){
                 Mail::to($request->email)->send(new \App\Mail\changePassword($check_user));
                 return redirect()->back()->with('success', 'A reset link has been sent to your
                 email, Kindly check to proceed');
             }
             else{
                 return redirect()->back()->with('failure', 'Account Does not Exist');
             }
         }
         catch (\Exception $exception){
             return redirect()->back()->with('failure', $exception->getMessage());
         }
     }

     public function getInTouch(Request $request){
         $this->validate($request, [
            'name' => 'bail|required',
            'email' => 'bail|required',
            'subject' => 'bail|required',
         ]);
         try {
             $add_feedback = Feedback::newFeedback($request);
             return redirect()->back()->with('success', "Message Successfully Sent");
         }
         catch (\Exception $exception){
             return redirect()->back()->with('failure', $exception->getMessage());
         }

     }
     public function userChangePassword($token){
         $user = User::where('token', $token)->first();
         if ($user){
             return view('actions.change-final-password', compact('token'));
         }
         else{
             return redirect(route('login'))->with('failure', "Token Expired");
         }
     }
     public function submitNewPassword(Request $request){
         $this->validate($request, [
             'new_password' => 'bail|required',
         ]);
         $user = User::where('token', $request->token)->update([
             'token' => Str::random(15),
             'password' => $request->new_password,
         ]);
         if ($user){
             return redirect(route('login'))->with('success', 'Password Changed Successfully, Kindly login now');
         }
         else{
             return redirect()->back()->with('failure', 'Password Could not be changed');
         }
     }
}
