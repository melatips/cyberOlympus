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
                // return $findArticle;
                if(count($findArticle) == 0){
                    $saveArticle            = new Article;
                    $saveArticle->title     = strtolower($request->title);
                    $saveArticle->content   = $request->content;
                    $saveArticle->slug      = strtolower(str_replace(array(' ', '&', '.'), array('-', '', ''), $request->title));

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

    //TAMBAHAN DARI AJAX-ACTION.PHP

    public function article_gallery(){
        $user_id = $this->session->userdata('user_id');
        $image_data = $this->Blog_models->getImageByUserId($user_id)->result();
        $i=0 ;

        foreach($image_data as $image){

            $html ="
              <div class='col-md-4'>
                <div class='post-image' style='max-height:140px; margin-top:5px; margin-bottom:5px; overflow:hidden'>
                    <div class='media'> <img class='media__image img-responsive' src='".base_url()."files/img/".$image->post_picture_image."' />
                      <div class='media__body no-padding' style='margin-top:-40px;'>
                      <br>
                      <a href='#' class='btn btn-green btn-xs add-image-to-text' id='link".$i."' data-value='".base_url()."files/img/".$image->post_picture_image."' data-url='".$image->post_picture_image."'";
            $html .="><span class='fa fa-upload'></span> Add</a>
                      <a href='#' class='btn btn-red btn-xs delete-image-ajax' id='del".$i."' data-url='".$image->post_picture_image."'";
            $html .="><span class='fa fa-close'></span> Del</a>
                      </div>
                    </div>
                </div>
              </div>";

            echo $html;
            $i++;
        }
    }

    /*Function image upload*/
    public function fileUpload(){

        $new_name = uniqid();
        $config['upload_path'] = './files/img/';
        $config['allowed_types'] = 'gif|jpg|jpeg|png';
        $config['max_size'] = '6048000';
        $config['max_width']  = '6048';
        $config['max_height']  = '6048';
        $config['file_name'] = $new_name;

        $this->upload->initialize($config);
        $image_detail = $this->input->post('desc');
        $user_id = $this->session->userdata('user_id');

        if ( ! $this->upload->do_upload('attachment_file')){

            $response = array(
                'status'=>'0',
                'message'=> $this->upload->display_errors()
            );

        } else {

            $image_data =   $this->upload->data();

            $w_orig = $image_data['image_width'];
            $h_orig = $image_data['image_height'];

            $configimage =  array(
                'image_library'   => 'gd2',
                'source_image'    =>  $image_data['full_path'],
                'maintain_ratio'  =>  true,
                'width'           =>  960
            );
            $this->image_lib->clear();
            $this->image_lib->initialize($configimage);
            $this->image_lib->resize();

            $data = array(
                'user_id' => $user_id,
                'post_picture_image' => $image_data['file_name'],
                'post_picture_detail' => $image_detail
            );

            $this->Blog_models->insertImageDB($data);

            $response = array(
                'status'=>'1',
                'message'=> 'image saved'
            );

        }

        echo json_encode($response);
    }

    public function addpost(){
        $post_id = $this->input->post('post_id');
        $post_title = $this->input->post('post_title');
        $post_content = $this->input->post('post_content');
        $user_id = $this->session->userdata('user_id');
        $post_date = date('Y-m-d H:i:s');
        $post_category_id = $this->input->post('post_category_id');
        $post_tag_name = $this->input->post('post_tag_name');

        $slug = strtolower(clean_str($post_title));
        $slug_exist = $this->Blog_models->getPostBySlug($slug)->result();

        if(count($slug_exist)>0){
            $slug = $slug."-".(count($slug_exist)+1);
        }

        $save = $this->input->post('btn-save');
        $draft = $this->input->post('btn-draft');

        $image_data = $this->input->post('image-data');

        // decoding base64 string value
        $image = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $image_data));
        $image_name = $slug.md5(uniqid(rand(), true));
        $filename = $image_name . '.' . 'jpg';
        //rename file name with random number
        $path = './files/img/';
        //image uploading folder path
        file_put_contents($path . $filename, $image);

        //Resize
        $configer =  array(
            'image_library'   => 'gd2',
            'source_image'    =>  $path.$filename,
            'maintain_ratio'  =>  true,
            'width'           =>  960
        );

        $this->image_lib->clear();
        $this->image_lib->initialize($configer);
        $this->image_lib->resize();

        $image = $filename;

        if($save == 1){
            $data = array(
                'post_title' => $post_title,
                'post_content' => $post_content,
                'post_slug' => $slug,
                'user_id' => $user_id,
                'post_date' => $post_date,
                'featured_image' => $image,
                'post_status' => 3,
                'post_share_count' => 0,
                'post_read_count' => 0,
                'post_category_id' => $post_category_id
            );

            $this->Blog_models->insertpostDB($data);
            $post_id = $this->db->insert_id();
            helper_log("add", "post_article", "", $post_id);

            foreach ($post_tag_name as $key => $value) {

                $tag_name = $value;
                $slug = str_replace(" ","-",$tag_name);
                $tag_slug = strtolower($slug);

                $data_tag = array(
                    'post_tag_name' => $value,
                    'post_id' => $post_id,
                    'post_tag_slug' => $tag_slug

                );
                $this->Blog_models->insertTagDB($data_tag);
            }

            header('location:'.base_url().'member/article/add');
            $this->session->set_flashdata("m", "<div align='center' class='alert alert-info'>Post success</div>");

        }else if($draft == 0 ){
            $data = array(
                'post_title' => $post_title,
                'post_content' => $post_content,
                'post_slug' => $slug,
                'user_id' => $user_id,
                'featured_image' => $image,
                'post_status' => 0,
                'post_date' => '2000-01-01 00:00:00',
                'post_share_count' => 0,
                'post_read_count' => 0,
                'post_category_id' => $post_category_id
            );
            $this->Blog_models->insertpostDB($data);

            $post_id = $this->db->insert_id();

            foreach ($post_tag_name as $key => $value) {

                $tag_name = $value;
                $slug = str_replace(" ","-",$tag_name);
                $tag_slug = strtolower($slug);

                $data_tag = array(
                    'post_tag_name' => $value,
                    'post_id' => $post_id,
                    'post_tag_slug' => $tag_slug

                );
                $this->Blog_models->insertTagDB($data_tag);
            }

            header('location:'.base_url().'member/article/add');
            $this->session->set_flashdata("m", "<div align='center' class='alert alert-info'>Post Draft</div>");

        }
    }
}
