<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('created_at','desc')->get();
        $categories =Category::orderBy('created_at','DESC')->get();
        return view('admin.news.index',[
            'news' =>$news ,
            'categories'=>$categories,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $news =News::orderBy('created_at','DESC')->get();
        $categories =Category::orderBy('created_at','DESC')->get();
        return view('admin.news.create',[
            'news'=>$news,
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $news = new News();
        $news->title=$request->title;
        $news->image= '/' .$request->image;
        $news->annons=$request->annons;
        $news->text=$request->text;
        $news->cat_id=$request->cat_id;
        $news->save();
        
     
        
        return redirect()->back()->withSuccess('Новость Добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $categories =Category::orderBy('created_at','DESC')->get();

        return view('admin.news.edit',[
            'categories'=>$categories,
            'news'=>$news,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, News $news)
    {
        $news->title=$request->title;
        $news->image= '/' .$request->image;
        $news->annons=$request->annons;
        $news->text=$request->text;
        $news->cat_id=$request->cat_id;
        $news->save();

        return redirect()->back()->withSuccess('Новость Обновлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->back()->withSuccess('Новость была успешно Удалена');
    }
}
