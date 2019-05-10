<?php

namespace App\Http\Controllers;
use Sentinel;
use Activation;
use Mail;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function register(){
    	return view('authentication/register');
    }

    public function postRegister(Request $request){

    	#dd($request->all());

    	#$users = Sentinel::registerAndActivate($request->all());
        


        $user = Sentinel::register($request->all());
        $activation = Activation::create($user);
    	$role = Sentinel::findRoleBySlug('manager');

    	$role->users()->attach($user);

        $this->sendEmail($user, $activation->code);

    	return redirect('/login');
    }

    private function sendEmail($user, $code){

        Mail::send('emails.activation',[

                'user' => $user,
                'code' => $code
        ], function($message) use ($user){
            $message->to($user->email);
            $message->subject("Hello $user->first_name, activate your account.");
        } );
    }
}
