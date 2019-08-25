<?php

namespace App\Modules\Article\Tasks;

use App\Modules\Article\Repositories\ArticleRepository;
use App\Ship\Abstraction\AbstractTask;
use App\Ship\Criterias\Eloquent\ThisEqualThatCriteria;

class GetArticlesTask extends AbstractTask
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

    public function run()
    {
        return $this->repository->get($this->getSelectedFields());
    }

    /**
     * @param string $fieldName
     * @param string $fieldValue
     * @throws \Prettus\Repository\Exceptions\RepositoryException
     */
    public function getByField(string $fieldName, string $fieldValue)
    {
        $this->repository->pushCriteria(new ThisEqualThatCriteria($fieldName, $fieldValue));
    }
}
