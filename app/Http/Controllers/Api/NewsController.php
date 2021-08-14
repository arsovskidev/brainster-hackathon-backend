<?php

namespace App\Http\Controllers\Api;

use App\Models\News;
use App\Http\Resources\NewsResource;

class NewsController extends ResponseController
{
    public function index()
    {
        $news = News::orderBy("created_at", "desc")->get();

        if ($news->isEmpty()) {
            return $this->sendResponse("error", "There are no news available.", 404);
        }

        return $this->sendResponse('success', NewsResource::collection($news), 200);
    }

    public function show($id)
    {
        $news = News::find($id);

        if ($news === null) {
            return $this->sendResponse("error", "The news with that ID doesn't exists.", 404);
        }

        return $this->sendResponse("success", new NewsResource($news), 200);
    }
}
