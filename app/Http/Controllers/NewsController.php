<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Traits\ImageUpload;
use App\Http\Requests\NewsFormRequest;

class NewsController extends Controller
{
    use ImageUpload;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::get();
        return view('news.index', compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsFormRequest $request)

    {
        $article = new News();
        $article->title = $request->title;
        $article->content = $request->content;

        $image = $this->ImageUpload($request->image);
        $article->image = $image;

        $article->date = $request->date;

        if ($article->save()) {
            return redirect()->route('news.index')->with('success', 'Article created!');
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
        $article = News::find($id);
        return view('News.edit', compact('article', 'id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(NewsFormRequest $request, $id)
    {
        $article = News::find($id);
        $input = $request->all();

        $title = $request->input('title');
        $content = $request->input('content');
        $image = $request->input('image');
        $date = $request->input('date');


        $article->update($input);
        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::find($id)->delete();

        return redirect()->route('news.index');
    }
}
