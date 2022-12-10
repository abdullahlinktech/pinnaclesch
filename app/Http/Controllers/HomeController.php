<?php

namespace App\Http\Controllers;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\News;
use App\Models\Management;
use App\Models\BackImage;
use App\Models\Dress;
use App\Models\Messenger;
use App\Models\Notice;
use App\Models\Partner;
use App\Models\Teacher;

class HomeController extends Controller
{
    public function index()
    {
        // $category = Category::orderBy('rank', 'asc')->get();
        // $slider = Slider::latest()->get();
        $video = Video::latest()->get();
         $gallery = Gallery::latest()->take(7)->get();
        // $management = Management::orderBy('rank', 'asc')->get();
         $news = News::latest()->get();
        $notice = Notice::latest()->get();
        $teacher = Teacher::latest()->get();
        $dress = Dress::latest()->take(4)->get();
        return view('pages.website.index',compact('news','notice','gallery','video','teacher','dress'));
    }

    public function about() {
        $backimage = BackImage::first();
        return view('pages.website.about', compact('backimage'));
    }

    public function teachers() {
        $teachers = Teacher::latest()->get();
        return view('pages.website.teachers', compact('teachers'));
    }

    public function classes() {
        return view('pages.website.classes');
    }

    public function newsevents() {
        $news = News::latest()->get();
        return view('pages.website.newsEvents',compact('news'));
    }

    public function newsdetails($id) {
        $news = News::find($id);
        if (isset($news)) {
            $backimage = BackImage::first();
            return view('pages.website.newsDetails', compact('news', 'backimage'));
        } else {
            $backimage = BackImage::first();
            return view('pages.website.not-found', compact('backimage'));
        }
    }

    public function product() {
        // $backimage = BackImage::first();
        // $messenger = Messenger::first();
        // $product = Product::orderBy('rank', 'asc')->get();
        // return view('pages.website.product', compact('backimage', 'product', 'messenger'));

        return view('pages.website.product');
    }

    public function productdetails($id) {
        // $messenger = Messenger::first();
        // $product = Product::find($id);
        // $category = Category::where('id', $product->category_id)->first();
        // $subcategory = Subcategory::where('id', $product->subcategory_id)->first();
        // $backimage = BackImage::first();
        // return view('pages.website.product-detail', compact('messenger','product', 'category', 'backimage', 'subcategory'));

        return view('pages.website.product-details');
    }

    public function gallery() {
        $backimage = BackImage::first();
        $gallery = Gallery::latest()->get();
        return view('pages.website.gallery', compact('backimage', 'gallery'));
    }

    public function video() {
        $video = Video::latest()->get();
        return view('pages.website.video', compact('video', ));
    }

    public function facilities() {
        return view('pages.website.facilities');
    }

    public function notices() {
        return view('pages.website.notices');
    }

    public function contact() {
        return view('pages.website.contact');
    }




    public function management() {
        $backimage = BackImage::first();
        $management = Management::orderBy('rank', 'asc')->get();
        return view('pages.website.management', compact('backimage', 'management'));
    }


    public function subcategory($id) {
        $category = Category::find($id);
        if (isset($category)) {
            $subcategory = Subcategory::where('category_id', $id)->get();
            $backimage = BackImage::first();
            return view('pages.website.subcategory', compact('category', 'subcategory', 'backimage'));
        } else {
            $backimage = BackImage::first();
            return view('pages.website.not-found', compact('backimage'));
        }
    }
    // subcategory id pass bellow
    public function productSubcate($id) {
        $messenger = Messenger::first();
        $subcategory = Subcategory::find($id); // subcategory id retrieve which the product contain
        if (isset($subcategory)) {
            $category = Category::where('id', $subcategory->category_id)->first();
            $product = Product::where('subcategory_id', $id)->get();
            $backimage = BackImage::first();
            return view('pages.website.product-subcat', compact('subcategory','product', 'category', 'backimage', 'messenger'));
        } else {
            $backimage = BackImage::first();
            return view('pages.website.not-found', compact('backimage'));
        }
    }

}
