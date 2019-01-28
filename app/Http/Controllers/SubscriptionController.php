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

    }
}
