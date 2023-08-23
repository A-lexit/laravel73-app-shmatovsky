<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'body', 'img', 'slug'];      //2.1 Заполняем таблицы данными         //дозволити всі поля у вигляді масиву з явим показом потрібних

    //protected $guarded = [];                                     //2.1 Заполняем таблицы данными          //дозволити тільки всі поля

    public function comments() {
        return $this->hasMany(Comment::class);               //2.1       Взаємодія один до багатьох
    }


    public function state() {
        return $this->hasOne(State::class);                   //2.1       Взаємодія один до одного
    }


    public function tags() {
        return $this->belongsToMany(State::class);                     //2.1       Багато до багатьох
    }


}
