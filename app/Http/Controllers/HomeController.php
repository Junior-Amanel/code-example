<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;

use function GuzzleHttp\Promise\all;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $news=News::orderBy('created_at','desc')->take(4)->get();
        return view('test',[
            'news'=>$news,
            'categories'=>$categories,
        ]);
        $this->middleware('auth');
        
    }
    public function allnews()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $news=News::orderBy('created_at','desc')->get();
        return view('allnews',[
            'news'=>$news,
            'categories'=>$categories,
        ]);
        $this->middleware('auth');
        
    }

    public function test()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $news=News::orderBy('created_at','desc')->take(4)->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('test',[
            'news'=>$news,
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
        $this->middleware('auth');
        
    }

    public function aboutnews($id)
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $news=News::where('id',$id)->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('newspost',[
            'news'=>$news,
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function aboutUs()
    {
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('aboutUs',[
            'newsland'=>$newsland,
        ]);
        $this->middleware('auth');
        
    }
    public function newsland()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('sensLab',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function technicalservices()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('technicalservices',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    

    public function newsland1()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('mikroLab',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function newsland2()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('himLab',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }


    public function newsmeat()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('meatCeh',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function newsmilk()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('milkCeh',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function newsbred()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('bredCeh',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function newsfruit()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('fruitCeh',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function shortCourse()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('shortCourse',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    public function upperSkillCourse()
    {
        $categories =Category::orderBy('created_at','DESC')->get();
        $newsland=News::orderBy('created_at','desc')->take(4)->get();
        return view('upperSkillCourse',[
            'categories'=>$categories,
            'newsland'=>$newsland
        ]);
    }
    
}
