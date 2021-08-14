<?php

namespace App\Http\Controllers\Api;

use App\Models\Project;
use App\Http\Resources\ProjectResource;

class ProjectController extends ResponseController
{
    public function index()
    {
        $projects = Project::orderBy("created_at", "desc")->get();

        if ($projects->isEmpty()) {
            return $this->sendResponse("error", "There are no projects available.", 404);
        }

        return $this->sendResponse('success', ProjectResource::collection($projects), 200);
    }

    public function show($id)
    {
        $project = Project::find($id);

        if ($project === null) {
            return $this->sendResponse("error", "The project with that ID doesn't exists.", 404);
        }

        return $this->sendResponse("success", new ProjectResource($project), 200);
    }
}
