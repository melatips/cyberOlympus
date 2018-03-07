<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\BasicInfo;
use App\Category;
use App\Showcase;

class AdminController extends Controller
{
    public function dashboard(){
    	return view('admin.dashboard');
    }

    public function contactUs(){
        $contact = Contact::orderby('created_at', 'desc')
                    ->get();
        return view('admin.contact-us')
                ->with('contact', $contact);
    }

        public function contactDetail($contactID){
            $contactDetail = Contact::where('contact_id', $contactID)
                            ->first();
            return view('admin.contact-detail')
                    ->with('contactDetail', $contactDetail);
        }

    public function showcase(){
        $showcaseList = Showcase::get();
    	return view('admin\showcase.showcase')
                ->with('showcaseList', $showcaseList);
    }

        public function showcaseAdd(){
            $catList = Category::get();
            return view('admin\showcase.showcase-add')
                    ->with('catList', $catList);
        }

            public function saveShowcase(Request $request){
                $findShowcase = Showcase::where('showcase_name',$request->showcase_name)
                                ->get();
                if(count($findShowcase) == 0){
                    $showcaseSave = new Showcase;
                    $showcaseSave->showcase_name    = $request->showcase_name;
                    $showcaseSave->file_name        = str_replace(array(' ', '&', '.'), array('-', '', ''), $request->showcase_name);
                    $showcaseSave->category_id      = $request->showcase_cat;
                    $showcaseSave->title1           = $request->title1;
                    $showcaseSave->desc1            = $request->desc1;
                    $showcaseSave->title2           = $request->title2;
                    $showcaseSave->desc2            = $request->desc2;
                    $showcaseSave->title3           = $request->title3;
                    $showcaseSave->desc3            = $request->desc3;
                    $showcaseSave->title4           = $request->title4;
                    $showcaseSave->desc4            = $request->desc4;
                    $showcaseSave->title5           = $request->title5;
                    $showcaseSave->desc5            = $request->desc5;

                    $showcaseSave->save();

                    return redirect('admin/showcase')
                            ->with('status', 'Showcase added!');
                }

                else{
                    return redirect('admin/showcase')
                            ->with('status', 'Showcase already exist!');
                }
            }

        public function showcaseDetail($showcaseID){
            $showcaseDet = Showcase::where('showcase_list_id', $showcaseID)
                            ->first();
            // return $showcaseDet->all();
            return view('admin\showcase.showcase-detail')
                            ->with('showcaseDet', $showcaseDet);
        }

        public function showcaseEdit($showcaseIDedit){
            $showcaseEdit = Showcase::where('showcase_list_id', $showcaseIDedit)
                            ->first();

            return view('admin\showcase.showcase-edit')
                    ->with('showcaseEdit', $showcaseEdit);
        }

            public function updateShowcase(Request $request){
                $showcaseUpdate = Showcase::where('showcase_list_id', $request->id)
                                ->first();
                // return $showcaseUpdate->all();
                $showcaseUpdate->showcase_name    = $request->showcase_name;
                $showcaseUpdate->category_id      = $request->showcase_cat;
                $showcaseUpdate->title1           = $request->title1;
                $showcaseUpdate->desc1            = $request->desc1;
                $showcaseUpdate->title2           = $request->title2;
                $showcaseUpdate->desc2            = $request->desc2;
                $showcaseUpdate->title3           = $request->title3;
                $showcaseUpdate->desc3            = $request->desc3;
                $showcaseUpdate->title4           = $request->title4;
                $showcaseUpdate->desc4            = $request->desc4;
                $showcaseUpdate->title5           = $request->title5;
                $showcaseUpdate->desc5            = $request->desc5;

                $showcaseUpdate->save();

                return redirect('/admin/showcase/detail/'.$showcaseUpdate->showcase_list_id)
                        ->with('status', 'Showcase updated successfully');
            }

    public function landingPage(){
    	return view('admin.landing-page');
    }

    public function basicInfo(){
        $basic = BasicInfo::first();
    	return view('admin.basic-info')
                ->with('basic', $basic);
    }

    	public function basicEdit(){
            $basic = BasicInfo::first();
    		return view('admin.basic-edit')
                    ->with('basic', $basic);
    	}

            public function basicUpdate(Request $request){
                $basicSave = BasicInfo::find($request->id = 1);
                $basicSave->email           = $request->email;
                $basicSave->facebook        = $request->facebook;
                $basicSave->twitter         = $request->twitter;
                $basicSave->instagram       = $request->instagram;
                $basicSave->linkedin        = $request->linkedin;
                $basicSave->phone           = $request->phone;
                $basicSave->full_address    = $request->address;

                $basicSave->save();
                return redirect('admin/basic-info')
                        ->with('status', 'Basic info updated successfully');
            }

    public function category(){
        $category = Category::get();
        return view('admin\showcase.category')
                ->with('category', $category);
    }

        public function categoryDetail($catID){
            $categoryDetail = Category::find($catID)
                                ->first();
            return view('admin\showcase.category-detail')
                    ->with('categoryDetail', $categoryDetail);
        }

        public function categoryAdd(){
            return view('admin\showcase.category-add');
        }

        public function saveCategory(Request $request){
            $findCategory = Category::where('category_name', $request->category_name)
                            ->get();
            // return $findCategory->all();
            if(count($findCategory) == 0){
                $saveCategory = new Category;
                $saveCategory->category_name = $request->category_name;
                $saveCategory->category_description = $request->category_description;

                $saveCategory->save();
                return redirect('/admin/category')
                    ->with('status', 'Category created successfully');
            }

            else{
                return redirect('admin/category')
                        ->with('status', 'Category already exist!');
            }
        }

        public function categoryEdit($catIDedit){
            $categoryEdit = Category::where('category_id', $catIDedit)
                            ->first();
            // return $categoryEdit->all();
            return view('admin\showcase.category-edit')
                    ->with('categoryEdit', $categoryEdit);
        }

            public function updateCategory(Request $request){
                $categoryUpdate = Category::find($request->id);
                // return $categoryUpdate->all();
                $categoryUpdate->category_name = $request->category_name;
                $categoryUpdate->category_description = $request->category_description;

                $categoryUpdate->save();
                return redirect('admin/category');
            }
}
