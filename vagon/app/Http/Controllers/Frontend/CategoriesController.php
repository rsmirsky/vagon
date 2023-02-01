<?php

namespace App\Http\Controllers\Frontend;

use App\Classes\PartfixTecDoc;
use App\Models\Categories\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoriesController extends Controller
{
    public function index()
    {
        $categories = Category::where('parent_id', null)->get();

        return view('frontend.categories.index', compact('categories', 'brand', 'model'));
    }

    public function show($brand = null, $model = null, $categories, PartfixTecDoc $tecDoc)
    {
        $route_categories = explode('/', $categories);
        $categories = Category::whereIn('slug', $route_categories)->get();

        if(count($route_categories) != $categories->count() || !$categories->count()) {
            abort(404);
        }

        $children = $categories->first()->children()->get();

        $category = $categories->last();

        return view('frontend.categories.show', compact('brand', 'model', 'category', 'children'));
    }
}
