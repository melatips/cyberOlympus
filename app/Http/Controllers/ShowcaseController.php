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
        return $catList;
    }

    // $categoryName = Category::where('category_id', $idCategory)
    //                     ->first();
    //     $showcaseList = Showcase::join('showcase_category', 'showcase_list.category_id', 'showcase_category.category_id')
    //                     ->where('showcase_category.category_id', $idCategory)
    //                     ->get();
    //     // return $showcaseList;
    //     return view('showcase.list-showcase')  
    //             ->with('showcaseList', $showcaseList)
    //             ->with('categoryName', $categoryName);

    // $category =  Category::find($idCategory);
    //     return dd($category->getShowcase());

    //SHOWCASE LIST BARU
    public function showcaseList($idCategory){
        $categoryName = Category::where('category_id', $idCategory)
                        ->first();
        $category =  Category::find($idCategory)
                    ->get();
        return $category->getShowcase();
        // return $showcaseList;
        return view('showcase.list-showcase')  
                ->with('showcaseList', $showcaseList)
                ->with('categoryName', $categoryName)
                ->with('category', $category);
    }

    //SHOWCASE DETAIL BARU
    public function showcaseDetail($id){
        $detail = Showcase::where('showcase_list_id', $id)
                ->first();
        return view('showcase.'.$detail->file_name)
                ->with('detail', $detail);
    }

    // //SHOWCASE LIST
    // public function listLogo(){
    // 	return view('showcase.list-logo');
    // }

    // public function listApps(){
    // 	return view('showcase.list-apps');
    // }

    // public function listBranding(){
    // 	return view('showcase.list-branding');
    // }

    // public function listGame(){
    // 	return view('showcase.list-game');
    // }

    // public function listMenu(){
    // 	return view('showcase.list-menu');
    // }

    // public function listPackaging(){
    // 	return view('showcase.list-packaging');
    // }

    // public function listStat(){
    // 	return view('showcase.list-stat');
    // }

    // public function listWeb(){
    // 	return view('showcase.list-web');
    // }

    //SHOWCASE DETAIL
    // public function total360(){
    //     $total = Showcase::where('showcase_name', '360 Total Imaging')
    //             ->first();
    //     // return $total->all();
    //     return view('showcase.360-total-imaging')
    //             ->with('total', $total);
    // }
    
    // public function adhiBuana(){
    //     $adhi = Showcase::where('showcase_name', 'adhi buana')
    //             ->first();
    // 	return view('showcase.adhibuana')
    //             ->with('adhi', $adhi);
    // }

    // public function bcpContractor(){
    //     $bcp = Showcase::where('showcase_name', 'bhinneka citra pratama kontraktor')
    //             ->first();
    // 	return view('showcase.bcp-contractor')
    //             ->with('bcp', $bcp);
    // }

    // public function blueDolphin(){
    //     $blue = Showcase::where('showcase_name', 'bhinneka');
    // 	return view('showcase.blue-dolphin');
    // }

    // public function bossKatsu(){
    // 	return view('showcase.boss-katsu');
    // }

    // public function chuar(){
    // 	return view('showcase.chuar');
    // }

    // public function drgAndhika(){
    // 	return view('showcase.drg-andhika');
    // }

    // public function drTheressia(){
    // 	return view('showcase.dr-theressia');
    // }

    // public function drTisya(){
    // 	return view('showcase.dr-tisya');
    // }

    // public function dwiGolden(){
    // 	return view('showcase.dwi-golden');
    // }

    // public function enggalJaya(){
    // 	return view('showcase.enggal-jaya');
    // }

    // public function foxCreek(){
    // 	return view('showcase.fox-creek');
    // }

    // public function homeGrab(){
    // 	return view('showcase.home-grab');
    // }

    // public function icompete(){
    // 	return view('showcase.icompete');
    // }

    // public function intec(){
    // 	return view('showcase.intec');
    // }

    // public function irkonPanelindo(){
    // 	return view('showcase.irkon-panelindo');
    // }

    // public function kaiserMedical(){
    // 	return view('showcase.kaiser-medical');
    // }

    // public function latoya(){
    // 	return view('showcase.latoya');
    // }

    // public function luisa(){
    // 	return view('showcase.luisa');
    // }

    // public function noe(){
    // 	return view('showcase.noe');
    // }

    // public function pakelan(){
    // 	return view('showcase.pakelan');
    // }

    // public function peopleFinder(){
    // 	return view('showcase.people-finder');
    // }

    // public function petraco(){
    // 	return view('showcase.petraco');
    // }

    // public function pPouch(){
    // 	return view('showcase.p-pouch');
    // }

    // public function ptMulti(){
    // 	return view('showcase.pt-multi');
    // }

    // public function sehati(){
    // 	return view('showcase.sehati');
    // }

    // public function tickTravel(){
    // 	return view('showcase.tick-travel');
    // }
}
