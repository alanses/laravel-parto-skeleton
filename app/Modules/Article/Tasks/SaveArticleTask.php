<?php

namespace App\Modules\Article\Tasks;

use App\Modules\Article\Repositories\ArticleRepository;
use App\Ship\Abstraction\AbstractTask;

class SaveArticleTask extends AbstractTask
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    /**
     * SaveArticleTask constructor.
     * @param ArticleRepository $repository
     */
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param array $attributes
     * @return mixed
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function run(array $attributes)
    {
        return $this->repository->create($attributes);
    }
}
