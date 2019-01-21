<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Invitado;
use App\User;
use App\UserSocialAccount;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function logout( Request $request){

        auth()->logout();
        session()->flush();//limpia todas las sesiones
        return redirect('/login');
    }

    public function redirectToProvider(string $driver){

        return Socialite::driver($driver)->redirect();
    }
    public function  handleProviderCallback(string $driver){

        if(!request()->has('code') || request()->has('denied')){

            session()->flash('message', ['danger', __("Inicio de sesión cancelado")]);
            return redirect('login');
        }
        $socialUser = Socialite::driver($driver)->user();
        //dd($socialUser);
        $user=null;
        $success = true;//si no hay ningun error sera true
        $email = $socialUser->email;
        $check = User::whereEmail($email)->first();

        if($check){
            $user = $check;//si el usuario ya existe en bd no se da de alta
        }else{
            \DB::beginTransaction();// empezamos una transaccion
            try{
                $user =User::create([
                    "name" => $socialUser->name,
                    "email"=>$email
                ]);
                UserSocialAccount::create([
                    "user_id"=>$user->id,
                    "provider"=>$driver,
                    "provider_uid"=>$socialUser->id//identificador de este usuario en la plataforma de autenticacion
                ]);
                Invitado::create([
                    "user_id"=>$user->id//aqui relacion a un usuario con un invitado
                ]);
            }
            catch (\Exception $exception){
                $success = $exception->getMessage();
                \DB::rollBack();//deshacer todo lo quye se hay podido hacer
            }
        }
        if($success=== true){
            \DB::commit();
            auth()->loginUsingId($user->id);
            return redirect(route('home'));
        }
        session()->flash('message',['danger', $success]);
        return redirect('login');
    }
}
