<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tag extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = [
        'name',
    ];
    public function tags(){
        return $this->belongsToMany(Article::class,'article_tags');
    }
}
