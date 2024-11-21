<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{  
    //returning view with all categories 
    public function index(){
        $categories=Category::all();
        $data=[
            'categories'=>$categories,
        ];

        return view('category.index', $data);

    }
}
