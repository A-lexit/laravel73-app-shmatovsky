<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = ['likes', 'views', 'article_id'];      //2.1 Заполняем таблицы данными         //дозволити всі поля у вигляді масиву з явим показом потрібних

    public $timestamps = false;                                      //2.1    НАЧЕ відключаємо поле $timestamps, оскільки воно не потрібно, але воно було створено автоматично
}


//2.1       Взаємодії немає, оскільки ніколи не будемо діставати статтю із статистики
