<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\BasicInfo;
use App\Showcase;
use App\Category;
use App\ShowCat;
use App\Careers;
use App\Article;
use App\ArtCat;
use App\CategoryArt;
use App\Mail\SendMail;
use Mail;

class CyberController extends Controller
{
    public function landingpage(){
    	$basic = BasicInfo::first();
        $category = Category::get();
    	return view('landing-page')
    			->with('basic', $basic)
                ->with('category', $category);
    }

    public function searchInput(Request $request){
        $findSearch = Showcase::where('showcase_name', 'like', '%'.$request->searchShowcase.'%')
                        ->get();

        if(count($findSearch) == 0){
            return view('no-result');
        }

        else{
            return view('search-result')
                    ->with('findSearch', $findSearch);
        }
    }

    public function totalImaging(){
    	return view('360-total-imaging');
    }

    public function contactSubmit(Request $request){
    	$contactSave = new Contact;
    	$contactSave->c_username = $request->name;
    	$contactSave->topic      = $request->topic;
        $contactSave->message    = $request->message;
    	$contactSave->c_email    = $request->email;
    	$contactSave->c_phone    = $request->phone;

    	$contactSave->save();

        Mail::to('info@cyberolympus.com')->send(new SendMail($contactSave));

    	return redirect('/');
    }

    //FOOTER

    public function aboutUs(){
        return view('coming-soon');
    }

    public function blog(){
        return view('coming-soon');
    }

        public function articleDetail($articleIDdet){
            $findArticle = Article::where('id_article', $articleIDdet)
                            ->first();
            // return $findArticle;
            return view('article')
                    ->with('findArticle', $findArticle);
        }

    public function careers(){
        $careersList = Careers::get();
        return view('careers')
                ->with('careersList', $careersList);
    }

        public function noPosition(){
            return view('no-position');
        }

    public function coba(Request $request){
        $data = array('status'=>true, 'message'=>'success');
        return $data;
    }
}