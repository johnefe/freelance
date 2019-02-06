<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SubscriptionController extends Controller
{
    //creamos este metodo pq va a entrar a un midleware, y solo
    //afectara a los metodos plans y proecessSubcription
    public function __construct(){
        $this->middleware(function($request, $netx){
            if( auth()->user()->subscribed('main')){
                return redirect('/home')
                ->with('message',['warning', __("actualmente ya estas en otro plan")]);
                //falta incluir el archivo para que aprezca este mensaje en caso de que ya este subscrito
            }
            return $netx($request);
        })
        ->only(['plans','processSubscription']);
    }

    public function plans(){
        return view('suscripciones.planes');

    }

    public function processSubscription(){
        $token = request('stripeToken');
        try{
            if( \request()->has('coupon')){
                \request()->user()->newSubscription('main',\request('type'))
                ->withCoupon(\request('coupon'))->create($token);

            }else{
                \request()->user()->newSubscription('main',\request('type'))
                ->create($token);
            }

            return redirect(route(subscriptions.admin))
            ->with('message',['success', __('la suscripcion se ha llevado correctamente')]);

        }catch(\Exception $exception){
            $error = $exception->getMessage();
            return back()->with('message',['danger', $error]);

        }

    }

    public function admin(){
        $subscriptions = auth()->user()->subscriptions;
        return view('suscripciones.admin', compact('subscriptions'));
    }

    public function resume(){
        $subscription = \request()->user()->subscription(\request('plan'));
        if($subscription->cancelled() && $subscription->onGracePeriod()){
            \request()->user()->subscription(\request('plan'))->resume();
            return back()->with('message',['message',__('has reanudado tu suscripcion correctamente')]);

        }
        return back();
    }
//ssdsdsd
    public function cancel(){

        auth()->user()->subscription(\request('plan'))->cancel();
        return back()->with('message',['success', __("la suscripcion se ha cancelado correctamente")]);

    }
}
