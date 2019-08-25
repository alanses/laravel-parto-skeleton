<?php

namespace App\Modules\Article\Actions;

use App\Modules\Article\Http\Requests\SaveArticleRequest;
use App\Modules\Article\Tasks\SaveArticleTask;
use App\Ship\Abstraction\AbstractAction;

class SaveArticleAction extends AbstractAction
{
    public function run(SaveArticleRequest $request)
    {
        return $this->call(SaveArticleTask::class, [$this->getDataForCreateArticle($request)]);
    }

    private function getDataForCreateArticle(SaveArticleRequest $request)
    {
        return $request->sanitizeInput(['header', 'short_description', 'description']);
    }
}
