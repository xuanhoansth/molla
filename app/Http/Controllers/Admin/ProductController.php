<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = DB::table('products')->paginate(10,['*'], 'page', null);
        return view('admin.products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new Product;
        $products->id = $request->id;
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->information = $request->information;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->status = $request->status;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $products->image = $path;
        }
        $products->save();
        return redirect()->action([ProductController::class, 'index']);
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
        $products = Product::findOrFail($id);
        return view('admin.products.update', compact('products'));
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
        $products = Product::find($id);
        $products->category_id = $request->category_id;
        $products->name = $request->name;
        $products->information = $request->information;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->status = $request->status;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('images', 'public');
            $products->image = $path;
        }
        $products->save();
        return redirect()->action([ProductController::class, 'index']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::find($id);

        $products->delete();
        return redirect()->action([ProductController::class, 'index']);
    }
}
