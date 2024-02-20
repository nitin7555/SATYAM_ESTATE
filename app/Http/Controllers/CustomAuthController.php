<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Hash;
use Session;

class CustomAuthController extends Controller
{
    // login
    public function login(){
        return view('login');
    }

    // SignUp
    public function signup(){
        return view('signup');
    }

    // storeUser
    public function storeUser(Request $request){
        $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:1|max:12',
        'confirm_password' => 'required|same:password'
    ]);

    $user = new User;
    $user->name = $request->name;
    $user->email = $request->email;
    $user->password = Hash::make($request->password);

    if ($user->save()) {
        return redirect('/login')->with('success', 'You have registered successfully');
    } else {
        return redirect()->back()->with('fail', 'Something went wrong');
    }
    }

    // Get User
    public function getUser(Request $request){
        $request->validate([
        'email' => 'required|email',
        'password' => 'required|min:1|max:12',
    ]);

    $user = User::where('email','=',$request->email)->first();

    if($user){
        if(Hash::check($request->password, $user->password)){
            $request->session()->put('loginId',$user->id);
            return redirect('/');
        }else{
            return back()->with('fail','Wrong Password.');
        }
    }else{
        return back()->with('fail','This email is not registered.');
    }
    }

    // Logout User
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect('/');
        }
    }

    // Reset Password
    public function forgetPassword(){
        return view('forget_password');
    }

    // Reset Password
    public function forgetUserPassword(Request $request){

        $request->validate([
        'email' => 'required|email|exists:users',
    ]);

        $token = Str::random(64);

        $existingReset = DB::table('password_resets')->where('email', $request->email)->first();

        if ($existingReset) {
            // If it exists, delete the existing record
            DB::table('password_resets')->where('email', $request->email)->delete();
        }

        // Insert the new reset record
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
    

        Mail::send('/emails/reset_password',['token' => $token], function ($message) use ($request){
            $message->to($request->email);
            $message->subject('Reset Password');
        });

        return redirect('/forget-password')->with('success','We have send an email to reset password'); 
        
    }

    // Reset Password Email
    public function resetPasswordEmail($token){

        $resetRecord = DB::table('password_resets')->where('token', $token)->first();

        return view('new_password',compact('token','resetRecord'));
    }


    // reset User Password
    public function resetUserPassword(Request $request){

        $request->validate([
        'email' => 'required|email|exists:users',
        'newPassword' => 'required|min:1|max:12',
        'confirmPassword' => 'required|same:newPassword'
    ]);

        $updatePassword = DB::table('password_resets')->where([
            'email' => $request->email,
            'token' => $request->token
        ])->first();

        if(!$updatePassword){
            return redirect('/reset-password-email/' . $token)->with('fail','Invalid');
        }

        User::where('email', $request->email)->update(['password' => Hash::make($request->newPassword)]);

        DB::table('password_resets')->where(['email' => $request->email])->delete();

        return redirect('/login')->with('success','Password Reset Successfully');
    }
}
