<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['name','slug','color'];
    protected $table = 'tags';

    public function getRouteKeyName()
    {
        return "slug";
    }

    //Relacion muchos a muchos
    public function posts(){

        return $this->belongsToMany(Post::class);

    }
}
