<?php

namespace App\Modules\Article\Tasks;

use App\Modules\Article\Repositories\ArticleRepository;
use App\Ship\Abstraction\AbstractTask;

class DeleteArticleTask extends AbstractTask
{
    /**
     * @var ArticleRepository
     */
    private $repository;

    /**
     * GetArticlesTask constructor.
     * @param ArticleRepository $repository
     */
    public function __construct(ArticleRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @param int $id
     * @return mixed
     */
    public function run(int $id)
    {
        return $this->repository->delete($id);
    }
}
