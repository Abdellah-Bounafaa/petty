<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Home()
    {
        $donations = Donation::where('status', "1")->latest()->take(6)->get();
        $blogs = Blog::where('status', "1")->latest()->take(3)->get();
        return view('index', ['donations' => $donations, "blogs" => $blogs]);
    }
}
