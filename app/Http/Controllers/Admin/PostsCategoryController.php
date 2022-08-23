<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\PostsCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $postsCategory = DB::table('posts-categories')->paginate(10,['*'], 'page', null);


        return view('admin.posts-category.category_index', compact('postsCategory'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.posts-category.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $postsCategory = new PostsCategory;
        $postsCategory->name = $request->name;
        $postsCategory->description = $request->description;
        $postsCategory->status = $request->status;

        $postsCategory->save();
        return redirect()->action([PostsCategoryController::class, 'index']);
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
        $postsCategory = PostsCategory::findOrFail($id);
        return view('admin.posts-category.category_update', compact('postsCategory'));
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
        $postsCategory =  PostsCategory::find ($id);
        $postsCategory->name = $request->name;
        $postsCategory->description = $request->description;
        $postsCategory->status = $request->status;

        $postsCategory->save();
        return redirect()->action([PostsCategoryController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $postsCategory = PostsCategory::find($id);

        $postsCategory->delete();
        return redirect()->action([PostsController::class, 'index'])->with('success','Dữ liệu xóa thành công.');
    }
}
