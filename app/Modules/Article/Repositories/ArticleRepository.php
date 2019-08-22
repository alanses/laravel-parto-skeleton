<?php

namespace App\Modules\Article\Repositories;

use App\Modules\Article\Entities\Article;
use App\Ship\Abstraction\AbstractRepository;

class ArticleRepository extends AbstractRepository
{
    protected $fieldSearchable = [];

    /**
    * @throws \Prettus\Repository\Exceptions\RepositoryException
    */
    public function boot()
    {

    }

    /**
    * @return string
    */
    function model()
    {
        return Article::class;
    }
}
