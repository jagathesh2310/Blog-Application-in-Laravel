<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Article extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'title',
        'content',
        'status',
        'user_id',
        'category_id',
        'image',

    ];
    public function tags(){
        return $this->belongsToMany(Tag::class,'article_tags');
    }
    public function user(){
       return $this->belongsTo(User::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
   public function scopePublished($query){
       return $query->where('status','published');
   }
   public function comments(){
        return $this->hasMany(Comment::class);
   }
   public function views(){
        return $this->belongsToMany(User::class,'article_user')
            ->withPivot('like');
   }
   public function likedUsers(){
        return $this->views()->wherePivot('like',true);
   }

}
