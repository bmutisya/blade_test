<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "welcome to laraaavel";

        //return  view('Pages.index', compact('title'));
        return view('Pages.index');
    }
    public function about(){
        $title ='Welcome to about us';

        return  view('Pages.about')->with('title', $title);
    }
    public function services(){
        $data = array(
        'title' =>'services',
        'services' =>['web design','Programming', 'seo']
        );
        return  view('Pages.services')->with($data);
    }
}
