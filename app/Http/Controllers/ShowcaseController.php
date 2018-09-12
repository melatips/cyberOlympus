<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Showcase;
use App\Category;
use App\ShowCat;

class ShowcaseController extends Controller
{
    //CATEGORY LIST
    public function categoryList(){
        $catList = Category::get();
        // return $catList;
        return view('showcase.all-categories')
                ->with('catList', $catList);
    }

    //SHOWCASE LIST
    public function showcaseList($slugCategory){
        $categoryName = Category::where('slug', $slugCategory)
                        ->first();
        // return $category =  Category::find($idCategory);
        $category =  Category::with('getShowcase')->find($categoryName->category_id);

        // return $category->getShowcase;
        // return $showcaseList;
        return view('showcase.list-showcase')
                ->with('categoryName', $categoryName)
                ->with('category', $category);
    }

    //ALL SHOWCASE
    public function allShowcase(){
        $allShowcase = Showcase::orderBy('showcase_name')
                        ->get();
        // return $allShowcase;
        return view('showcase.all-showcase')
                ->with('allShowcase', $allShowcase);
    }

    //SHOWCASE DETAIL
    public function showcaseDetail($name){
        $detail = Showcase::where(strtolower('file_name'), $name)
                ->first();
        // $categoryShowcase = $detail->getCategory;

        // return $categoryShowcase;
        return view('showcase.'.strtolower($detail->file_name))
                ->with('detail', $detail);
                // ->with('categoryShowcase', $categoryShowcase);
    }
}
