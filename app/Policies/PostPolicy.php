<?php

namespace App\Policies;

use App\User;
use App\Role;
use App\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

   /* metodo que si puede optar por la oferta
   */

   public function opt_for_post( User $user, Post $post){

        return ! $user->freelancer || $user->freelance->id !== $post->freelance_id;
    //si elk usuario no es freelance o el usuario es distinto al que lo ha publicado
   }

   public function postule(User $user){
        return $user->role_id !== Role::ADMIN && ! $user->subscribed('main');
   }

   public function inscribe(User $user, Post $post){
        //nos sirve para saber si el usuario se puede incribir a este post
        return ! $post->invitados->contains($user->invitado->id);
        //esto comprueba si la relacion muchos a muchos que tenemos en nuestro post alguna de ellas
        //es nuestro invitado

   }

   //metodo para que el usuario haga una valoracion al post siempre que no haya escritro una valoracion anteriormente
   //y que este inscrito en el curso


}
