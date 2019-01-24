<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Invitado
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Invitado whereUserId($value)
 */
class Invitado extends Model
{
    //
    protected  $fillable = ['user_id','title'];

    public function posts(){
        return $this->belongsToMany(Post::class);//relacion muchos a muchos
    }

    public function user(){//un invitado tambien es usuario
        return $this->belongsTo(User::class)->select('id','role_id','name','email');
    }
}
