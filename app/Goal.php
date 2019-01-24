<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Goal
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $post_id
 * @property string $goal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereGoal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Goal whereUpdatedAt($value)
 */
class Goal extends Model
{
    public function post(){
        return $this->belongsTo(Post::class);
    }
}
