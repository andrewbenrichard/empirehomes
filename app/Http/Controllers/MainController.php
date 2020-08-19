<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class MainController extends Controller
{
  
    public function index()
    {
        $title = "Home";
        return view('home')->with('title', $title);
    }
  
    public function about()
    {
        
        $title = "About Us";
        return view('about')->with('title', $title);
    }
  
    public function services()
    {
        
        $title = "Our Services";
        return view('services')->with('title', $title);
    }
  
    public function projects()
    {
        
        $title = "Projects";
        return view('projects')->with('title', $title);
    }
  
    public function contact()
    {
        
        $title = "Contact Us";
        return view('contact')->with('title', $title);
    }
    
}
