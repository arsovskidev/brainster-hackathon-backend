<?php

namespace App\Http\Controllers\Api;

use App\Models\Service;
use App\Http\Resources\ServiceResource;

class ServiceController extends ResponseController
{
    public function index()
    {
        $services = Service::orderBy("created_at", "desc")->get();

        if ($services->isEmpty()) {
            return $this->sendResponse("error", "There are no services available.", 404);
        }

        return $this->sendResponse('success', ServiceResource::collection($services), 200);
    }
}
