<?php

namespace App\Modules\Article\Http\Controllers;

use App\Modules\Article\Actions\DeleteArticleAction;
use App\Modules\Article\Actions\GetArticleAction;
use App\Modules\Article\Actions\GetListArticlesAction;
use App\Modules\Article\Actions\SaveArticleAction;
use App\Modules\Article\Actions\UpdateArticleAction;
use App\Modules\Article\Http\Requests\ArticleRequest;
use App\Modules\Article\Http\Requests\SaveArticleRequest;
use App\Modules\Article\Http\Requests\UpdateArticleRequest;
use App\Modules\Article\Transformers\ArticlesTransformer;
use App\Modules\Article\Transformers\ArticleTransformer;
use App\Ship\Parents\ApiController;

class ArticleController extends ApiController
{
    /**
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index()
    {
        $articles = $this->call(GetListArticlesAction::class);

        return ArticlesTransformer::collection($articles);
    }

    /**
     * @param SaveArticleRequest $request
     * @return ArticleTransformer
     */
    public function store(SaveArticleRequest $request)
    {
        $article = $this->call(SaveArticleAction::class, [$request]);

        return new ArticleTransformer($article);
    }

    /**
     * @param ArticleRequest $request
     * @return ArticleTransformer
     */
    public function show(ArticleRequest $request)
    {
        $article = $this->call(GetArticleAction::class, [$request->id]);

        return new ArticleTransformer($article);
    }

    /**
     * @param UpdateArticleRequest $request
     * @return ArticleTransformer
     */
    public function update(UpdateArticleRequest $request)
    {
        $article = $this->call(UpdateArticleAction::class, [$request]);

        return new ArticleTransformer($article);
    }

    /**
     * @param ArticleRequest $request
     * @return array
     */
    public function destroy(ArticleRequest $request)
    {
        $this->call(DeleteArticleAction::class, [$request->id]);

        return $this->success();
    }
}
