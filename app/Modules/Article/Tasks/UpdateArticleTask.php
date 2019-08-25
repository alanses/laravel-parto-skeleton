<?php

namespace App\Modules\Article\Tasks;

use App\Modules\Article\Repositories\ArticleRepository;
use App\Ship\Abstraction\AbstractTask;

class UpdateArticleTask extends AbstractTask
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    /**
     * UpdateArticleTask constructor.
     * @param ArticleRepository $repository
     */
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $attributes
     * @param integer $id
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run(array $attributes, int $id)
    {
        return $this->repository->update($attributes, $id);
    }
}
