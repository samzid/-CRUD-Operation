<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Models\Backend\product;
use Illuminate\Http\Request;

class MyController extends Controller
{


    public function index()
    {
        //
        return view("backend/product/add") ;
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
            $product = new product;
            $product ->name = $request->name;
            $product ->description = $request->description;
            $product ->barcode = $request->barcode;
            $product ->status = $request->status;
            $product->save();
            return redirect()->route("showProduct");
    }

    public function show()
    {
        //
        $products = Product::all();
        //dd($products);
        return view("backend.product.manage",compact('products'));
    }


    public function edit($id)
    {

        $edit=Product::find($id);

        return view("backend.product.edit", compact("edit"));
      

    }

    public function update(Request $request, $id)
    {
        //
    }


    public function delete($id)
    {

        $delete=product::find($id);
        $delete->delete();
        return redirect()->route("showProduct");



    }
}
