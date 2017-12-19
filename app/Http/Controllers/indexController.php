<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Tag;

class indexController extends Controller
{
    public function index()
    {
      $categories = Category::all();
      $destacados = Product::paginate(4);
      $products = Product::all();
      $destacados2 = Product::orderBy('created_at', 'desc')->paginate(3);

      return view('home', compact('categories', 'destacados', 'products', 'destacados2'));
    }

    public function goToProductos()
    {
      $products = Product::all();
      $categories = Category::all();
      $brands = Brand::all();
      $tags = Tag::all();
      $destacados = Product::orderBy('created_at', 'desc')->paginate(3);
      return view('productos', compact('products', 'categories', 'brands', 'tags', 'destacados'));
    }

    public function goToFaq()
    {
      return view('faq');
    }

    public function goToContacto()
    {
      return view('contacto');
    }

    public function goToLogin()
    {
      return view('login');
    }

    public function goToRegister()
    {
      return view('register');
    }
}
