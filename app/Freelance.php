<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Freelance
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $user_id
 * @property string|null $title
 * @property string|null $biography
 * @property string|null $website_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereBiography($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Freelance whereWebsiteUrl($value)
 */
class Freelance extends Model
{
    //
    public function posts(){//podemos accceder a todos los post de un freelance sin seleccionar una columa
        return $this->hasMany(Post::class);
    }

    public function user(){//para acceder al usuario que pertenece a este freelance
        return $this->belongsTo(User::class)->select('id','role_id','name','email');
    }
}
