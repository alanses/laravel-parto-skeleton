<?php

namespace App\Modules\Article\Actions;

use App\Modules\Article\Tasks\GetArticlesTask;
use App\Ship\Abstraction\AbstractAction;

class GetArticleAction extends AbstractAction
{
    public function run(int $id)
    {
        $article = $this->call(GetArticlesTask::class, [], [
            ['setSelectedFields' => [['id', 'header', 'short_description', 'description']]],
            ['getByField' => ['id', $id]]
        ]);

        return $article->first();
    }
}
