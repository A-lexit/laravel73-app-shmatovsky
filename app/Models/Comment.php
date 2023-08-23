<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ['subject', 'body', 'article_id'];      //2.1 Заполняем таблицы данными         //дозволити всі поля у вигляді масиву з явим показом потрібних



    public function article() {
        return $this->belong(State::class);                     //2.1      Належить до однієї статті
    }

}
