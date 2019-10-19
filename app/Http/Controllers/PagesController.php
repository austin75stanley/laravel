<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $data='Welcome to Laravel';
        return view('pages.index',compact('data'));
    }
    public function about(){
        $title='About';
        return view('pages.about')->with('title',$title);
    }
    public function services(){
        $data=array(
            'title'=>'Services',
            'services'=>['programming','SEO','cloning']
        );

        return view('pages.services')->with($data);
    }
}
