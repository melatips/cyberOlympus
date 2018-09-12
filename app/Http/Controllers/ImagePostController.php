<?php

namespace App\Http\Controllers;

// use App\DataTables\ImagePostDataTable;
use App\Http\Controllers\Controller;
use App\ImagePost;
use Auth;
use Validator;
use Image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ImagePostController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(ImagePost $dataTable, Request $request){
        if ($request->Header('referer') == url('admin/blog/add')) {
        	//referer sama post.create harus diganti apa?
            $response = [];
            $gambar   = ImagePost::all();
            foreach ($gambar as $row) {
                $item = [
                    'url'   => asset('images/article/'. $row->hash),
                    'thumb' => asset('images/article/thumbnail/thumb-'. $row->hash),
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
        $validator = Validator::make($request->all(), [
            'file' => 'required|image',
        ]);

        if ($validator->fails()) {

        } else {
            $image = $request->file('file');
            $thumb = Image::make($image->getRealPath())->resize(320, 240)->save('images/article/thumbnail/thumb-'.$image->hashName());
            
            $imagepost = new ImagePost();

            $imagepost->hash 	= $image->hashName();
            $imagepost->path 	= asset('images/article/'. $image->hashName());
            $imagepost->id_user = Auth::User()->id;
            $imagepost->thumb 	= asset('images/article/thumbnail'. $image->hashName());
            // $imagepost->tag 	= $request->tag;
            $imagepost->status 	= "active";

            $imagepost->save();
			Storage::disk('uploads')->put('', $image);
			// Storage::disk('uploads')->put('thumb-'.$image->hashName(), $thumb);

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
