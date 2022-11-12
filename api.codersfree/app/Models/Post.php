<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    
    const BORRADOR=1;
    const PUBLICADO=2;

    //Relacion uno a muchos inversa

    public function user(){
        $this->belongsTo(User::class);
    }

    public function category(){
        $this->belongsTo(User::class);
    }

    //relacion muchos a muchos

    public function tags(){

        $this->belongsToMany(Tag::class);

        return $this->morphMany(Image::class, 'imageable');
    }

    //relacion uno a muchos poliformicas


}
