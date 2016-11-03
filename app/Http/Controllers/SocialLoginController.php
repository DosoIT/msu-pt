<?php

namespace App\Http\Controllers;
use Input;
use Socialite;
use Auth;
use Redirect;
use Hash;

class SocialLoginController extends Controller {
    public function __construct()
    {
    }

    public function index()
    {
        return view('/homepage');
    }

    public function facebookAuthRedirect() {
        return Socialite::with('facebook')->redirect();
    }

    public function facebookSuccess() {

        $provider = Socialite::with('facebook');
        if (Input::has('code')){
            $user = $provider->stateless()->user();
            //dd($user);
            $email = $user->email;
            $name  = $user->name;
            $password = substr($user->token,0,10);
            $facebook_id = $user->id;

            if($email == null){ // case permission is not email public.
                $user = $this->checkExistUserByFacebookId($facebook_id);
                if($user == null){
                    $email = $facebook_id;
                }
            }
            else
            {
                $user = $this->checkExistUserByEmail($email);
                if($user != null){
                    if($user->facebook_id == ""){ // update account when not have facebook id.
                        $user->facebook_id = $facebook_id;
                        $user->save();
                    }
                }
            }

            if($user != null){ // Auth exist account.
                Auth::login($user);
                return redirect('/homepage');
            }
            else{ // new Account.
                $user = $this->registerUser($email,$name,$password,$facebook_id);
                Auth::login($user);
                return redirect('/homepage');
            }
        }
        return redirect('/');
    }

    private function checkExistUserByEmail($email){
        $user = \App\User::where('email','=',$email)->first();
        return $user;
    }

    private function checkExistUserByFacebookId($facebook_id){
        $user = \App\User::where('facebook_id','=',$facebook_id)->first();
        return $user;
    }

    private function registerUser($email,$name,$password,$facebook_id){
        $user = new \App\User;

        $user->email = $email;
        $user->name = $name;
        $user->password = Hash::make($password); // Hash::make
        $user->facebook_id = $facebook_id;
        $user->save();

        return $user;
    }

}