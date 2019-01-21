<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // se elimina esto es para que home siempre sea pubica
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // bvamos a traer todos los post registrados y que esten en estado publicado
        $posts = Post::withCount(['invitados'])
        ->with('category','freelance','reviews')
        ->where('status', Post::PUBLISHED)
        ->latest()//ordsenados en forma que fueron agregados recientemente
        ->paginate(12);

        //dd($posts);
        return view('home', compact('posts'));
    }
}
