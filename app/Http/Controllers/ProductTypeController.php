<?php

namespace App\Http\Controllers;

use App\ProductsType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    public function index()
    {
        $items = ProductsType::all();
        return view('admin.productsType.index',compact('items'));
    }
    public function create()
    {
        return view('admin.productsType.create');
    }

    public function store(Request $request)
    {
        ProductsType::create($request->all());

        return redirect('/admin/product_type');
    }

    public function edit($id)
    {
        $item = ProductsType::find($id);
        return view('admin.productsType.edit',compact('item'));
    }

    public function update(Request $request,$id)
    {
        ProductsType::find($id)->update($request->all());

        return redirect('/admin/product_type');
    }

}
