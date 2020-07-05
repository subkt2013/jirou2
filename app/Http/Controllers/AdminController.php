<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\BlogPost;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.index', ['posts' => BlogPost::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'store_name' => 'required',
            'wait_people' => 'required',
            'introduction' => 'required',
            'title' => 'required',
            'content' => 'required',
            'cover_image' => 'required|image',
        ]);

        //拡張子付きファイル名
        $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();

        //ファイル名
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        //拡張子
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        //保存用ファイル名　=　ファイル名_時間.拡張子
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        //ファイルの格納場所とファイル名の指定
        $request->file('cover_image')->storeAs('public/img', $filenameToStore);

        $BlogPost = new BlogPost();

        $BlogPost->store_name = $request->input('store_name');
        $BlogPost->wait_people = $request->input('wait_people');
        $BlogPost->introduction = $request->input('introduction');
        $BlogPost->title = $request->input('title');
        $BlogPost->content = $request->input('content');;
        $BlogPost->cover_image = $filenameToStore;

        $BlogPost->save();

        return redirect('/admin');

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
        $post = BlogPost::findOrFail($id);
        return view('admin.edit', ['post' => $post]);
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

        $this->validate($request, [
            'store_name' => 'required',
            'wait_people' => 'required',
            'introduction' => 'required',
            'title' => 'required',
            'content' => 'required',
            //'cover_image' => 'required|image',
        ]);


        if (isset($request -> cover_image)) {

        //拡張子付きファイル名
        $filenameWithExtension = $request->file('cover_image')->getClientOriginalName();

        //ファイル名
        $filename = pathinfo($filenameWithExtension, PATHINFO_FILENAME);

        //拡張子
        $extension = $request->file('cover_image')->getClientOriginalExtension();

        //保存用ファイル名　=　ファイル名_時間.拡張子
        $filenameToStore = $filename . '_' . time() . '.' . $extension;

        //ファイルの格納場所とファイル名の指定
        $request->file('cover_image')->storeAs('public/img', $filenameToStore);

        }

        $post = BlogPost::findOrFail($id);

        $post->store_name = $request->input('store_name');
        $post->wait_people = $request->input('wait_people');
        $post->introduction = $request->input('introduction');
        $post->title = $request->input('title');
        $post->content = $request->input('content');;

        if (isset($request -> cover_image)) {
        $post->cover_image = $filenameToStore;
        }

        $post->save();

        return redirect('/admin');

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
