<?php

namespace App\Modules\Article\Entities;

use App\Ship\Abstraction\AbstractEntity;

class Article extends AbstractEntity
{
    protected $fillable = [
        'header',
        'short_description',
        'description'
    ];
}
