<?php

namespace App\Modules\Article\Actions;

use App\Modules\Article\Tasks\GetArticlesTask;
use App\Ship\Abstraction\AbstractAction;

class GetListArticlesAction extends AbstractAction
{
    public function run()
    {
        return $this->call(GetArticlesTask::class, [], [
            ['setSelectedFields' => [['id', 'header', 'short_description']]]
        ]);
    }
}
