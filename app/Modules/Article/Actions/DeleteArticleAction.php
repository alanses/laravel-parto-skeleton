<?php

namespace App\Modules\Article\Actions;

use App\Modules\Article\Tasks\DeleteArticleTask;
use App\Ship\Abstraction\AbstractAction;

class DeleteArticleAction extends AbstractAction
{
    /**
     * @param int $id
     * @return mixed
     */
    public function run(int $id)
    {
        return $this->call(DeleteArticleTask::class, [$id]);
    }
}
