<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\Allclass;
use Illuminate\Support\Carbon;
use Illuminate\Http\Request;
use App\Models\Slider;
use App\Models\Gallery;
use App\Models\Video;
use App\Models\News;
use App\Models\Management;
use App\Models\BackImage;
use App\Models\Category;
use App\Models\Dress;
use App\Models\Facilities;
use App\Models\Messenger;
use App\Models\Notice;
use App\Models\Partner;
use App\Models\Shop;
use App\Models\Teacher;
use App\Models\Whyspecail;
use PhpParser\Builder\Class_;

class HomeController extends Controller
{
    public function index()
    {
        // $category = Category::orderBy('rank', 'asc')->get();
        $slider = Slider::latest()->get();
        $video = Video::latest()->get();
        $gallery = Gallery::latest()->take(7)->get();
        $management = Management::take(1)->get();
        $news = News::latest()->get();
        $notice = Notice::latest()->get();
        $teacher = Teacher::latest()->get();
        $activities = Activity::take(8)->get();
        $dress = Dress::latest()->take(4)->get();
        $specials = Whyspecail::latest()->take(8)->get();
        return view('pages.website.index',compact('news','notice','gallery','video','teacher','activities','dress','specials', 'management', 'slider'));
    }

    public function about() {
        $backimage = BackImage::first();
        $management = Management::take(1)->get();
        return view('pages.website.about', compact('backimage', 'management'));
    }

    public function teachers() {
        $teachers = Teacher::latest()->get();
        return view('pages.website.teachers', compact('teachers'));
    }

    public function classes() {
        $classes = Allclass::get();
        return view('pages.website.classes', compact('classes'));
    }

    public function newsevents() {
        $news = News::latest()->get();
        return view('pages.website.newsEvents',compact('news'));
    }

    public function newsdetails($id) {
        $news = News::find($id);
        if (isset($news)) {
            $newslist = News::latest()->get();
            $backimage = BackImage::first();
            return view('pages.website.newsDetails', compact('news', 'backimage', 'newslist'));
        } else {
            $backimage = BackImage::first();
            return view('pages.website.not-found', compact('backimage'));
        }
    }

    public function product() {
        $products = Shop::orderBy('id', 'DESC')->get();

        return view('pages.website.product', compact('products'));
    }

    public function productdetails($id) {
        $product = Shop::find($id);

        return view('pages.website.product-details', compact('product'));
    }

    public function categorywiseproduct($category_id) {
        $categorywiseproduct = Shop::where('category_id', $category_id)->orderBy('id', 'DESC')->get();

        return view('pages.website.categorywiseproduct', compact('categorywiseproduct'));
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
        $boyshostel = Facilities::where('facilitie_type', 'boys')->latest()->get();
        $girlshostel = Facilities::where('facilitie_type', 'girls')->latest()->get();
        $haices = Facilities::where('facilitie_type', 'haice')->latest()->get();
        $buses = Facilities::where('facilitie_type', 'bus')->latest()->get();
        $computerlab = Facilities::where('facilitie_type', 'computer')->latest()->get();
        $sciencelab = Facilities::where('facilitie_type', 'science')->latest()->get();
        $chemistrylab = Facilities::where('facilitie_type', 'chemistry')->latest()->get();
        $biologylab = Facilities::where('facilitie_type', 'biology')->latest()->get();
        $healthservices = Facilities::where('facilitie_type', 'health')->latest()->get();
        return view('pages.website.facilities', compact('boyshostel', 'girlshostel', 'haices', 'buses', 'computerlab', 'sciencelab', 'chemistrylab', 'biologylab', 'healthservices'));
    }

    public function notices() {
        $notice = Notice::latest()->get();
        $noticeTn = Notice::where('notice_type', 'tn')->latest()->get();
        $noticeSn = Notice::where('notice_type', 'sn')->latest()->get();
        $noticeGn = Notice::where('notice_type', 'gn')->latest()->get();
        $noticeJn = Notice::where('notice_type', 'jn')->latest()->get();
        return view('pages.website.notices',compact('notice','noticeTn','noticeSn','noticeGn','noticeJn'));
    }

    public function contact() {
        return view('pages.website.contact');
    }
    public function login(){
        return view('pages.website.login');
    }
    public function forget(){
        return view('pages.website.forget');
    }




    public function management() {
        $backimage = BackImage::first();
        $management = Management::orderBy('rank', 'asc')->get();
        return view('pages.website.management', compact('backimage', 'management'));
    }


    // public function subcategory($id) {
    //     $category = Category::find($id);
    //     if (isset($category)) {
    //         $subcategory = Subcategory::where('category_id', $id)->get();
    //         $backimage = BackImage::first();
    //         return view('pages.website.subcategory', compact('category', 'subcategory', 'backimage'));
    //     } else {
    //         $backimage = BackImage::first();
    //         return view('pages.website.not-found', compact('backimage'));
    //     }
    // }
    // subcategory id pass bellow
    // public function productSubcate($id) {
    //     $messenger = Messenger::first();
    //     $subcategory = Subcategory::find($id); // subcategory id retrieve which the product contain
    //     if (isset($subcategory)) {
    //         $category = Category::where('id', $subcategory->category_id)->first();
    //         $product = Product::where('subcategory_id', $id)->get();
    //         $backimage = BackImage::first();
    //         return view('pages.website.product-subcat', compact('subcategory','product', 'category', 'backimage', 'messenger'));
    //     } else {
    //         $backimage = BackImage::first();
    //         return view('pages.website.not-found', compact('backimage'));
    //     }
    // }

}
