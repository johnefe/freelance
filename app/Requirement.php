<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Post;

/**
 * App\Requirement
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $post_id
 * @property string $requiriment
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement whereRequiriment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Requirement whereUpdatedAt($value)
 */
class Requirement extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
