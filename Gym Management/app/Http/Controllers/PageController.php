<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function home()
        {
            return view('home');
        }
    
        public function programs()
        {
            return view('programs');
        }
    
        public function trainers()
        {
            return view('trainers');
        }
    
        public function schedule()
        {
            return view('schedule');
        }
    
        public function contact()
        {
            return view('contact');
        }
        
}