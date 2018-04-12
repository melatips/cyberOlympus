<?php

namespace App\Http\Controllers;

// use App\DataTables\ImagePostDataTable;
use App\Http\Controllers\Controller;
use App\ImagePost;
use Auth;
use Request;
use Validator;
use Illuminate\Http\Request;

class ImagePostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImagePost $dataTable)
    //ini bisa diganti gini kan?
    {
        if (Request::Header('referer') == url('admin/blog/article/article-load')) {
        	//referer sama post.create harus diganti apa?
            $response = [];
            $gambar   = ImagePost::all();
            foreach ($gambar as $row) {
                $item = [
                	//ini url sama thumb itu berarti kudu bikin routes dulu?
                    'url'   => asset('images/article/'. $row->hash)
                    'thumb' => asset('images/article/'. $row->hash),
                    //ini nama kolomnya di tabel imagepost kan?
                    'tag'   => $row->tag,
                    'id'    => $row->id_image,
                ];
                array_push($response, $item);
            }
            return response()->json($response);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request::all(), [
            'file' => 'required|image',
        ]);

        if ($validator->fails()) {

        } else {
            $image = $request::file('file');
            
            $imagepost = new ImagePost();

            $imagepost->hash 	= $image->hashName();
            $imagepost->path 	= 'public/images/article/', $image->hashName();
            $imagepost->id_user = Auth::User()->id;
            $imagepost->thumb 	= 'public/images/article/thumbnail', $image->hashName();
            $imagepost->tag 	= $request->tag;
            $imagepost->status 	= "active";

            // $imagepost->name     = $image->getClientOriginalName();
            // $imagepost->hash     = $image->hashName();
            // $imagepost->mimeType = str_replace('image/', '', $image->getMimeType());
            // $imagepost->size     = $image->getSize();
            // $imagepost->user_id  = Auth::User()->id;

            $imagepost->save();

            $image->storeAs('public/images/article', $image->hashName());

            return response()->json(['link' => asset('images/article/' . $image->hashName())]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $post = ImagePost::find($request::input('id'));
        $post->delete();
    }
}
