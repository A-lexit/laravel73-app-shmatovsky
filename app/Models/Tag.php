<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $fillable = ['label'];                                  //2.1 Заполняем таблицы данными         //дозволити всі поля у вигляді масиву з явим показом потрібних


    public $timestamps = false;                                      //2.1    НАЧЕ відключаємо поле $timestamps, оскільки воно не потрібно, але воно було створено автоматично


    public function article() {
        return $this->belongToMany(State::class);                     //2.1       Взаємодія багато до багатьох
    }
}
