<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'This is the welcome page!!!!!';
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about() {
        $title = 'This is the about page!!!!!';
        return view('pages.about')->with('title', $title);
    }

    public function services() {
        $data = array(
            'title' => 'This is the services page',
            'services' => ['Web Design', 'Photoshop', 'Search Engine Optimization']
        );
        
        return view('pages.services')->with($data);
    }
}
