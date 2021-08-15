<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Traits\ImageUpload;
use App\Http\Requests\ProjectCreateRequest;
use App\Http\Requests\ProjectUpdateRequest;

class ProjectController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();
        return view('project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('project.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectCreateRequest $request)
    {
        $project = new Project();
        $project->title = $request->title;
        $project->description = $request->description;
        $project->content = $request->content;
        $project->location = $request->location;
        $project->year = $request->year;

        $image_first = $this->ImageUpload($request->image_first);
        $project->image_first = $image_first;
        $image_second = $this->ImageUpload($request->image_second);
        $project->image_second = $image_second;
        $image_third = $this->ImageUpload($request->image_third);
        $project->image_third = $image_third;
        $image_fourth = $this->ImageUpload($request->image_fourth);
        $project->image_fourth = $image_fourth;

        if ($project->save()) {
            return redirect()->route('project.index')->with('success', 'Project created!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        return view('project.edit', compact('project', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ProjectUpdateRequest $request, $id)
    {
        $project = Project::find($id);
        
        $project->title = $request->title;
        $project->description = $request->description;
        $project->content = $request->content;
        $project->location = $request->location;
        $project->year = $request->year;

        if($request->image_first != ''){
            $image_first = $this->ImageUpload($request->image_first);
            $project->image_first = $image_first;
        }
        if($request->image_second != ''){
            $image_second = $this->ImageUpload($request->image_second);
            $project->image_second = $image_second;
        }
        if($request->image_third != ''){
            $image_third = $this->ImageUpload($request->image_third);
            $project->image_third = $image_third;
        }
        if($request->image_fourth != ''){
            $image_fourth = $this->ImageUpload($request->image_fourth);
            $project->image_fourth = $image_fourth;
        }

        if ($project->save()) {
            return redirect()->route('project.index')->with('success', 'Project updated!');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Project::find($id)->delete();

        return redirect()->route('project.index');
    }
}
