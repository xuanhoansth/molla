<?php

namespace App\Http\Controllers\Layout;

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
        $products = DB::table('products')->paginate(12,['*'], 'page', null);
        return view('frontend.product.products', compact('products'));
    }
    public function newproducts()
    {
//        $products = DB::table('products')->select('*');
//        $products = $products->get();
//        return view('frontend.home.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
//        return view('admin.products.create');
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
        $products->image = $request->image;
        $products->status = $request->status;

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
        $products = Product::where('id', '=', $id)->select('*')->first();
        return view('frontend.single-product.single-product', compact('products'));
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
        return view('frontend.single-product.single-product', compact('products'));
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
        $products->category_id = $request->id;
        $products->name = $request->name;
        $products->information = $request->information;
        $products->description = $request->description;
        $products->price = $request->price;
        $products->image = $request->image;
        $products->status = $request->status;

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

    public function productFilter(Request $request){
        $products = Product::query()
            ->name($request);
        return $products->get();
    }
}
