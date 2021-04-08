<?php

namespace App\Http\Controllers;

use App\Banners;
use App\ContactUs;
use App\News;
use App\ProductsType;
use Illuminate\Http\Request;

class FrontController extends Controller
{

    public function redirectToCh() {
        return redirect('/ch');
    }

    public function index() {
        $banners = Banners::orderBy('sort','desc')->get();
        $all_news = News::orderBy('sort','desc')->take(2)->get();
        $productTypes = ProductsType::orderBy('sort','desc')->get();

        return view('front.index',compact('banners','all_news','productTypes'));
    }

    public function index_en() {
        $banners = Banners::orderBy('sort','desc')->get();
        $all_news = News::orderBy('sort','desc')->take(2)->get();
        $productTypes = ProductsType::orderBy('sort','desc')->get();

        return view('front.index_en',compact('banners','all_news','productTypes'));
    }

    public function products($type) {

    }

    public function news($id) {
        $news = News::find($id);

        return view('front.news',compact('news'));
    }

    public function contact_us(Request $request) {
        ContactUs::create($request->all());

        return redirect('/');
    }
}
