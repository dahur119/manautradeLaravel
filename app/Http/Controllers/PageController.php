<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class PageController extends Controller
{
    public function index(){
        $blogs = Blog::limit(3)->get();
    
        return view('index', compact('blogs'));
    }

    public function about(){
        return view('about');
    }

    public function team(){
        return view('team');
    }

    public function product(){
        return view('product');
    }

    public function contact(){
        return view('contact');
    }

    public function blog(){
        return view('blog');
    }


    public function services(){
        return view('services');
    }
    
}
