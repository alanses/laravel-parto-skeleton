<?php

namespace App\Modules\Article\Actions;

use App\Modules\Article\Http\Requests\UpdateArticleRequest;
use App\Modules\Article\Tasks\UpdateArticleTask;
use App\Ship\Abstraction\AbstractAction;

class UpdateArticleAction extends AbstractAction
{
    public function run(UpdateArticleRequest $request)
    {
        return $this->call(UpdateArticleTask::class, [
            $this->getDataForUpdateArticle($request),
            $request->id
        ]);
    }

    /**
     * @param UpdateArticleRequest $request
     * @return array
     */
    private function getDataForUpdateArticle(UpdateArticleRequest $request)
    {
        return $request->only([
            'header',
            'short_description',
            'description'
        ]);
    }
}
