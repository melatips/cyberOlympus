<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Contact;
use App\BasicInfo;
use App\Category;
use App\Showcase;
use App\ShowCat;
use App\Careers;
use App\Article;
use App\CategoryArt;
use App\ArtCat;
use File;
use Image;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function __construct()
    {
       $this->middleware('auth');
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

            public function contactDetailDelete($contactIDdelete){
                $findContact = Contact::find($contactIDdelete);
                $findContact->delete();
                return redirect('admin/')
                        ->with('status', 'Message deleted successfully');
            }

    public function articleList(){
        $article = Article::get();
        return view('admin.blog.article')
                ->with('article', $article);
    }

        public function articleAdd(){
            $blogCatList = CategoryArt::get();
            return view('admin.blog.article-add')
                    ->with('blogCatList', $blogCatList);
        }

            public function articleSave(Request $request){
                $findArticle = Article::where('title', $request->title)
                                ->get();
                if(count($findArticle) == 0){
                    $saveArticle            = new Article;
                    $saveArticle->title     = strtolower($request->title);
                    $saveArticle->intro     = $request->intro;
                    $saveArticle->content   = $request->content;
                    $saveArticle->slug      = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->title));
                    $featured_image=[];
                    if(count($request->featured_image)!=0){
                        foreach ($request->featured_image as $value) {
                            $featured_image[]=\Storage::disk('uploads')->put('',$value);
                        }
                    }
                    $saveArticle->featured_image = implode(',',$featured_image);
                    $saveArticle->save();

                    $saveArticle->getCategoryArt()->attach($request->article_cat);

                    return redirect('admin/blog')
                        ->with('status', 'Article added!');
                }
                
                else{
                    return redirect('admin/blog')
                        ->with('status', 'Article already exists!');
                }
            }

        public function articleDetail($blogID){
            $articleDet = Article::where('id_article', $blogID)
                            ->first();
            $catArtName = $articleDet->getCategoryArt;
            // return $catArtName;
            return view('admin.blog.article-detail')
                    ->with('articleDet', $articleDet)
                    ->with('catArtName', $catArtName);
        }

        public function articleEdit($blogIDedit){
            $articleEdit = Article::where('id_article', $blogIDedit)
                            ->first();
            $findBlogCat = $articleEdit->getCategoryArt;
            $getBlogCat = CategoryArt::get();
            return view('admin.blog.article-edit')
                    ->with('articleEdit', $articleEdit)
                    ->with('findBlogCat', $findBlogCat)
                    ->with('getBlogCat', $getBlogCat);
        }

            public function articleUpdate(Request $request){
                $articleUpdate = Article::where('id_article', $request->id)
                                ->first();
                // return $articleUpdate->getBlogCat;
                //                 return $request->article_cat;
                $articleUpdate->title   = strtolower($request->title);
                $articleUpdate->slug    = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->title));
                $articleUpdate->content = $request->content;

                $articleUpdate->save();

                $articleUpdate->getCategoryArt()->sync($request->article_cat);
                // return $request->article_cat;

                return redirect('admin/blog/article/'.$articleUpdate->id_article)
                        ->with('status', 'Article updated successfully');
            }

        public function articleDelete($blogIDdelete){
            $findArtDel = Article::find($blogIDdelete);
            $findArtDel->getCategoryArt()->detach();
            $findArtDel->delete();
            return redirect('admin/blog')
                    ->with('status', 'Article deleted successfully');
        }

    public function blogCat(){
        $blogCat = CategoryArt::get();
        return view('admin.blog.category')
                ->with('blogCat', $blogCat);
    }

        public function saveBlogCat(Request $request){
            $findBlogCat = CategoryArt::where('category', $request->category)
                            ->get();

            if(count($findBlogCat) == 0){
                $saveCat = new CategoryArt;
                $saveCat->category = $request->category;

                $saveCat->save();
                return redirect('/admin/blog/category')
                    ->with('status', 'Category created successfully');
            }

            else{
                return redirect('admin/blog/category')
                        ->with('status', 'Category already exist!');
            }
        }

        public function catDetail($blogCatID){
            $catDetail = CategoryArt::where('id_article_category', $blogCatID)
                        ->first();
            return view('admin.blog.category-detail')
                    ->with('catDetail', $catDetail);
        }

        public function updateBlogCat(Request $request){
            $blogCatUpdate = CategoryArt::find($request->id);
            // return $blogCatUpdate->all();
            $blogCatUpdate->category = $request->category;

            $blogCatUpdate->save();

            return redirect('admin/blog/category')
                    ->with('status', 'Category updated successfully!');
        }

        public function deleteBlogCat($blogCatIDdel){
            $findCatArt = CategoryArt::find($blogCatIDdel);
            if(count($findCatArt->getArticle) == 0){
                $findCatArt->delete();
                return redirect('admin/blog/category')
                    ->with('status', 'Category deleted successfully');
            }
            else{
                return redirect('admin/blog/category')
                    ->with('status', 'Category can not be deleted because category is in use');
            }
        }

    public function category(){
        $category = Category::get();
        return view('admin.showcase.category')
                ->with('category', $category);
    }

        public function categoryDetail($catID){
            $categoryDetail = Category::find($catID);
            return view('admin.showcase.category-detail')
                    ->with('categoryDetail', $categoryDetail);
        }

        public function categoryAdd(){
            return view('admin.showcase.category-add');
        }

        public function saveCategory(Request $request){
            $findCategory = Category::where('category_name', $request->category_name)
                            ->get();
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
            return view('admin.showcase.category-edit')
                    ->with('categoryEdit', $categoryEdit);
        }

            public function updateCategory(Request $request){
                $categoryUpdate = Category::find($request->id);
                $categoryUpdate->category_name = $request->category_name;
                $categoryUpdate->category_description = $request->category_description;

                $categoryUpdate->save();
                return redirect('admin/category')
                        ->with('status', 'Category updated successfully');
            }

        public function deleteCategory($catIDdelete){
            $findCat = Category::find($catIDdelete);
            if(count($findCat->getShowcase) == 0){
                $findCat->delete();
                return redirect('admin/category')
                    ->with('status', 'Category deleted successfully');
            }
            else{
                return redirect('admin/category')
                    ->with('status', 'Category can not be deleted because category is in use');
            }
        }

    public function showcase(){
        $showcaseList = Showcase::with('getCategory')->get();
        // return $showcaseList->getCategory;
    	return view('admin.showcase.showcase')
                ->with('showcaseList', $showcaseList);
    }

        public function showcaseAdd(){
            $catList = Category::get();
            return view('admin.showcase.showcase-add')
                    ->with('catList', $catList);
        }

            public function saveShowcase(Request $request){
                $findShowcase = Showcase::where('showcase_name',$request->showcase_name)
                                ->get();
                if(count($findShowcase) == 0){
                    $showcaseSave = new Showcase;
                    $showcaseSave->showcase_name    = strtolower($request->showcase_name);
                    $showcaseSave->file_name        = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->showcase_name));
                    // $showcaseSave->category_id      = $request->showcase_cat;
                    $showcaseSave->title1_h3        = $request->title1_h3;
                    $showcaseSave->title1_h2        = $request->title1_h2;
                    $showcaseSave->desc1            = $request->desc1;
                    $showcaseSave->title2_h3        = $request->title2_h3;
                    $showcaseSave->title2_h2        = $request->title2_h2;
                    $showcaseSave->desc2            = $request->desc2;
                    $showcaseSave->title3_h3        = $request->title3_h3;
                    $showcaseSave->title3_h2        = $request->title3_h2;
                    $showcaseSave->desc3            = $request->desc3;
                    $showcaseSave->title4_h3        = $request->title4_h3;
                    $showcaseSave->title4_h2        = $request->title4_h2;
                    $showcaseSave->desc4            = $request->desc4;
                    $showcaseSave->title5_h3        = $request->title5_h3;
                    $showcaseSave->title5_h2        = $request->title5_h2;
                    $showcaseSave->desc5            = $request->desc5;
                    $showcaseSave->title6_h3        = $request->title6_h3;
                    $showcaseSave->title6_h2        = $request->title6_h2;
                    $showcaseSave->desc6            = $request->desc6;

                    $showcaseSave->save();

                    $showcaseSave->getcategory()->attach($request->showcase_cat);

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
            $catName = $showcaseDet->getCategory;
            // return $catName;
            // return $showcaseDet->all();
            return view('admin.showcase.showcase-detail')
                    ->with('showcaseDet', $showcaseDet)
                    ->with('catName', $catName);
        }

        public function showcaseEdit($showcaseIDedit){
            $showcaseEdit = Showcase::where('showcase_list_id', $showcaseIDedit)
                            ->first();
            $findCat = $showcaseEdit->getCategory;
            $getCat = Category::get();

            return view('admin.showcase.showcase-edit')
                    ->with('showcaseEdit', $showcaseEdit)
                    ->with('findCat', $findCat)
                    ->with('getCat', $getCat);
        }

            public function updateShowcase(Request $request){
                $showcaseUpdate = Showcase::where('showcase_list_id', $request->id)
                                ->first();
                // return $showcaseUpdate->all();
                $showcaseUpdate->showcase_name  = strtolower($request->showcase_name);
                $showcaseUpdate->file_name      = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->showcase_name));
                $showcaseUpdate->title1_h3      = $request->title1_h3;
                $showcaseUpdate->title1_h2      = $request->title1_h2;
                $showcaseUpdate->desc1          = $request->desc1;
                $showcaseUpdate->title2_h3      = $request->title2_h3;
                $showcaseUpdate->title2_h2      = $request->title2_h2;
                $showcaseUpdate->desc2          = $request->desc2;
                $showcaseUpdate->title3_h3      = $request->title3_h3;
                $showcaseUpdate->title3_h2      = $request->title3_h2;
                $showcaseUpdate->desc3          = $request->desc3;
                $showcaseUpdate->title4_h3      = $request->title4_h3;
                $showcaseUpdate->title4_h2      = $request->title4_h2;
                $showcaseUpdate->desc4          = $request->desc4;
                $showcaseUpdate->title5_h3      = $request->title5_h3;
                $showcaseUpdate->title5_h2      = $request->title5_h2;
                $showcaseUpdate->desc5          = $request->desc5;
                $showcaseUpdate->title6_h3      = $request->title6_h3;
                $showcaseUpdate->title6_h2      = $request->title6_h2;
                $showcaseUpdate->desc6          = $request->desc6;

                $showcaseUpdate->save();

                // $findShowCat = ShowCat::find()
                $showcaseUpdate->getcategory()->sync($request->showcase_cat);

                return redirect('/admin/showcase/detail/'.$showcaseUpdate->showcase_list_id)
                        ->with('status', 'Showcase updated successfully');
            }

        public function showcaseDelete($showcaseIDdelete){
            $findShowDel = Showcase::find($showcaseIDdelete);
            $findShowDel->getCategory()->detach();
            $findShowDel->delete();

            return redirect('admin/showcase')
                    ->with('status', 'Showcase deleted successfully');
        }

    public function careers(){
        $careersList = Careers::get();
        return view('admin.careers.careers')
                ->with('careersList', $careersList);
    }

        public function careersAdd(){
            return view('admin.careers.addCareers');
        }

            public function careersSave(Request $request){
                $findCareers = Careers::where('position', $request->position)
                            ->get();
                if(count($findCareers) == 0){
                    $saveCareer                 = new Careers;
                    $saveCareer->position       = $request->position;
                    $saveCareer->requirements   = $request->requirements;
                    if($request->file('icon') != '')
                    {
                        $file       = Input::file('icon');
                        $name       = $file->getClientOriginalName();
                        $filename   = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->position)). '.' . strtolower($file->getClientOriginalExtension());
                        
                        $path = 'images/careers';
                        if(!File::exists($path)) {
                            File::makeDirectory('images/careers/');
                        }
                        $file->move($path, $filename);
                        $saveCareer->icon = $path.'/'. $filename;
                    }

                    $saveCareer->save();
                }
                return redirect('admin/careers');
            }

        public function careersDetail($carIDdetail){
            $detailCareers = Careers::find($carIDdetail);
            return view('admin.careers.detailCareers')
                    ->with('detailCareers', $detailCareers);
        }

        public function careersEdit($carIDedit){
            $editCareers = Careers::find($carIDedit);
            return view('admin.careers.editCareers')
                    ->with('editCareers', $editCareers);
        }

            public function careersUpdate(Request $request){
                $updateCareer                 = Careers::find($request->id);
                
                $updateCareer->position       = $request->position;
                $updateCareer->requirements   = $request->requirements;
                if($request->file('icon') != '')
                {
                    $file       = Input::file('icon');
                    $name       = $file->getClientOriginalName();
                    $filename   = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->position)). '.' . strtolower($file->getClientOriginalExtension());
                                            
                    $path = 'images/careers';
                    if(!File::exists($path)) {
                        File::makeDirectory('images/careers/');
                    }
                    $file->move($path, $filename);
                    $updateCareer->icon = $path.'/'. $filename;
                }

                $updateCareer->save();
                
                return redirect('admin/careers/detail/'.$request->id)
                        ->with('status', 'Position updated successfully!');
            }

        public function careersDelete($carIDdel){
            $findCarDel = Careers::find($carIDdel);
            $findCarDel->delete();

            return redirect('admin/careers')
                    ->with('status', 'Position deleted successfully');
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
}
