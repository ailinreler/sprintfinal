<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Brand;
use App\Product;

class BrandController extends Controller
{
    public function index()
    {
      $brands = Brand::all();

      return view('addbrand', compact('brands'));
    }

    public function store(Request $request)
    {
      $this->validate(request(), [
        'name' => 'required'
      ]);


      $brand = Brand::create([
        'name' => request('name')
      ]);

      return redirect('/addbrand');
    }

    public function edit()
    {
      $brands = Brand::all();

      return view('editbrand', compact('brands'));
    }

    public function update(Request $request, $marca)
    {

      $brand = Brand::find($marca);

      if ($request->has('name') && $request->name !== null ) {
        $brand->name = $request->name;
      }

      $brand->save();

      return redirect('/editbrand');

    }

    public function delete()
    {
      $brands = Brand::all();

      return view('deletebrand', compact('brands'));
    }

    public function destroy(Request $request, $marca)
    {
      $brand = Brand::find($marca);

      $products = Product::all()->where('brand_id', $marca);

      foreach ($products as $product) {
        $product->brand_id = null; //por que carajo esto no funcionaaaaaaaaaa
        $product->save();
      }



      $brand->delete();

      return redirect('/deletebrand');
    }
}
