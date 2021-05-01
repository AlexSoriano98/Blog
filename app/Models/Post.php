<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $guarded = ['id', 'created_at', 'update_at'];

    //Relación UNO a MUCHOS INVERSA
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Relación UNO a MUCHOS INVERSA
    public function category(){
        return $this->belongsTo(Category::class);
    }

    //Relación MUCHOS a MUCHOS
    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    //Relación UNO a UNO POLIMORFICA
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
