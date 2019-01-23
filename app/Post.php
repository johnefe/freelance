<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Post
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post query()
 * @mixin \Eloquent
 * @property int $id
 * @property int $freelance_id
 * @property int $category_id
 * @property int $level_id
 * @property string $name
 * @property string $description
 * @property string $slug
 * @property string|null $picture
 * @property string $status
 * @property int $previous_approved
 * @property int $previous_rejected
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereFreelanceId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereLevelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post wherePreviousApproved($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post wherePreviousRejected($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereSlug($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Post whereUpdatedAt($value)
 */
class Post extends Model
{
    const PUBLISHED = 1;//publicado
    const PENDING = 2;//pendiente
    const REJECTED = 3;//rechazado

    //metodo que me sirve para acceder a la
    public function pathAttachment(){
        return "/images/posts/". $this->picture;
    }

    //metodo para acceder a los detalles del post mediante el slug
    public function getRouteKeyName(){
        return 'slug';
    }

    protected $withCount = ['reviews','invitados'];

    public  function category(){

        return $this->belongsTo(Category::class)->select('id','name');
    }

    public  function goals(){
        return $this->hasMany(Goal::class)->select('id', 'post_id', 'goal');
    }

    public  function level(){

        return $this->belongsTo(Level::class)->select('id','name');
    }

    public  function reviews(){
        return $this->hasMany(Review::class)->select('id', 'post_id', 'rating','comment','created_at');
    }

    public  function requirements(){
        return $this->hasMany(Requirement::class)->select('id', 'post_id', 'requirement');
    }

    public function invitados(){
        return $this->belongsToMany(Invitado::class);
    }

    public function freelance(){
        return $this->belongsTo(Freelance::class);
    }

    public function getRatingAttribute(){
        return $this->reviews->avg('rating');
    }

    //para obtener los posts relacionados a cierto post
    public function relatedPosts(){
        return Post::with('reviews')->whereCategoryId($this->category->id)
            ->where('id','!=', $this->id)
            ->latest()
            ->limit(6)
            ->get();

    }

}
