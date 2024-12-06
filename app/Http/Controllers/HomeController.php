<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Property;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {   
        $properties = Property::all();
        $categories = Category::all();

        $propertiesAmount = count($properties);
        $categoriesAmount = count($categories);
        
        return view('admin.index', compact('properties', 'categories', 'propertiesAmount', 'categoriesAmount'));
    }

   
}
