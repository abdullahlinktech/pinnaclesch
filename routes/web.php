<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ActivityController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\QueryController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\Admin\PartnerController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\BackImageController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\MessengerController;
use App\Http\Controllers\Admin\ManagementController;
use App\Http\Controllers\Admin\SubcategoryController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\AuthenticationController;
use App\Http\Controllers\Admin\ClassController;
use App\Http\Controllers\Admin\CompanyProfileController;
use App\Http\Controllers\Admin\DressController;
use App\Http\Controllers\Admin\FacilitiesController;
use App\Http\Controllers\Admin\HostelController;
use App\Http\Controllers\Admin\NoticeController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\TeacherController;
use App\Http\Controllers\WhyspecailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group noticeswhich
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/teachers', [HomeController::class, 'teachers'])->name('teachers');
Route::get('/classes', [HomeController::class, 'classes'])->name('classes');
Route::get('/facilities', [HomeController::class, 'facilities'])->name('facilities');
Route::get('/news-events', [HomeController::class, 'newsevents'])->name('newsevents');
Route::get('/news-details/{id}', [HomeController::class, 'newsdetails'])->name('newsdetails');
Route::get('/notices', [HomeController::class, 'notices'])->name('notices');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/video', [HomeController::class, 'video'])->name('video');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Shop
Route::get('/product', [HomeController::class, 'product'])->name('product');
Route::get('/product-details/{id}', [HomeController::class, 'productdetails'])->name('productdetails');
Route::get('/categorywise-product/{id}', [HomeController::class, 'categorywiseproduct'])->name('categorywiseproduct');





Route::get('/management', [HomeController::class, 'management'])->name('management');

Route::get('/category/subcategroy/{id}', [HomeController::class, 'subcategory'])->name('subcategory');
Route::get('/category/subcategory/product/{id}', [HomeController::class, 'productSubcate'])->name('product.subcate');
Route::get('/product-detail/{id}', [HomeController::class, 'productDetail'])->name('productDetail');


// login
Route::get('login', [AuthenticationController::class, 'login'])->name('login');
Route::post('login', [AuthenticationController::class, 'AuthCheck'])->name('login.check');

Route::group(['middleware' => ['auth']] , function(){
    // Dashboard
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    // logout
    Route::get('logout', [AuthenticationController::class, 'logout'])->name('logout');
    Route::put('/login', [AuthenticationController::class, 'passwordUpdate'])->name('password.change');
    // company profile
    Route::get('company-profile', [CompanyProfileController::class, 'edit'])->name('company.edit');
    Route::put('company-profile/{company}', [CompanyProfileController::class, 'update'])->name('company.update');
    // about us
    Route::get('/admin-about',[AboutController::class,'index'])->name('admin.about');
    Route::put('/admin-about/{company}',[AboutController::class,'update'])->name('update.about');
    // Create user
    Route::get('/registration', [RegistrationController::class, 'index'])->name('register.create');
    Route::post('/registration', [RegistrationController::class, 'store'])->name('register.store');

    Route::get('/settings', [RegistrationController::class, 'settings'])->name('settings');
    Route::put('/registration', [RegistrationController::class, 'profileUpdate'])->name('register.update');

    // Service Route
    Route::get('/services', [ServiceController::class, 'service'])->name('service');
    Route::post('service/insert', [ServiceController::class, 'serviceInsert'])->name('store.service');
    Route::get('service/edit/{id}', [ServiceController::class, 'serviceEdit'])->name('edit.service');
    Route::post('service/update/{id}', [ServiceController::class, 'serviceUpdate'])->name('update.service');
    Route::get('service/delete/{id}', [ServiceController::class, 'serviceDelete'])->name('delete.service');

    // Gallery Route
    Route::get('/galleries', [GalleryController::class, 'gallery'])->name('gallery.index');
    Route::post('gallery/insert', [GalleryController::class, 'galleryInsert'])->name('store.gallery');
    Route::get('gallery/edit/{id}', [GalleryController::class, 'galleryEdit'])->name('edit.gallery');
    Route::post('gallery/update/{id}', [GalleryController::class, 'galleryUpdate'])->name('update.gallery');
    Route::get('gallery/delete/{id}', [GalleryController::class, 'galleryDelete'])->name('delete.gallery');

    // Video Route
    Route::get('/videos', [VideoController::class, 'index'])->name('videos');
    Route::post('video/insert', [VideoController::class, 'store'])->name('store.video');
    Route::get('video/edit/{id}', [VideoController::class, 'edit'])->name('edit.video');
    Route::post('video/update/{id}', [VideoController::class, 'update'])->name('update.video');
    Route::get('video/delete/{id}', [VideoController::class, 'delete'])->name('delete.video');

    // News Route
    Route::get('/news', [NewsController::class, 'index'])->name('news.index');
    Route::post('news/insert', [NewsController::class, 'store'])->name('store.news');
    Route::get('news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
    Route::post('news/update/{id}', [NewsController::class, 'update'])->name('news.update');
    Route::get('news/delete/{id}', [NewsController::class, 'delete'])->name('news.delete');


    // Management Route
    Route::get('managements', [ManagementController::class, 'index'])->name('management.index');
    Route::post('management/store', [ManagementController::class, 'store'])->name('management.store');
    Route::get('management/edit/{id}', [ManagementController::class, 'edit'])->name('management.edit');
    Route::post('management/update/{id}', [ManagementController::class, 'update'])->name('management.update');
    Route::get('management/delete/{id}', [ManagementController::class, 'delete'])->name('management.delete');

    Route::get('sliders', [SliderController::class, 'index'])->name('slider.index');
    Route::post('slider/store', [SliderController::class, 'store'])->name('slider.store');
    Route::get('slider/edit/{id}', [SliderController::class, 'edit'])->name('slider.edit');
    Route::post('slider/update/{id}', [SliderController::class, 'update'])->name('slider.update');
    Route::get('slider/delete/{id}', [SliderController::class, 'delete'])->name('slider.delete');


    Route::get('/messenger', [MessengerController::class, 'edit'])->name('messenger.edit');
    Route::put('/messenger/{messenger}', [MessengerController::class, 'update'])->name('messenger.update');

    Route::get('backimage', [BackImageController::class, 'edit'])->name('backimage.edit');
    Route::put('backimage/{backimage}', [BackImageController::class, 'update'])->name('backimage.update');

    Route::get('/messages', [MessageController::class, 'message'])->name('admin.message');
    Route::post('/messages-store', [MessageController::class, 'store'])->name('store.message');
    Route::get('messages/delete/{id}', [MessageController::class, 'messageDelete'])->name('admin.message.delete');

    Route::get('/queries', [QueryController::class, 'query'])->name('admin.query');
    Route::get('queries/delete/{id}', [QueryController::class, 'queryDelete'])->name('admin.query.delete');

    Route::resource('/partner', PartnerController::class)->except('show', 'create');
    // our teacher
    Route::get('/admin-teacher',[TeacherController::class,'index'])->name('teacher.index');
    Route::post('/admin-teacher-store',[TeacherController::class,'store'])->name('teacher.store');
    Route::get('/admin-teacher-edit/{id}',[TeacherController::class,'edit'])->name('teacher.edit');
    Route::put('/admin-teacher-update/{teacher}',[TeacherController::class,'update'])->name('teacher.update');
    Route::delete('/admin-teacher-delete/{teacher}',[TeacherController::class,'delete'])->name('teacher.delete');
    //activity
    Route::get('admin-activity',[ActivityController::class,'index'])->name('activity.index');
    Route::post('admin-activity-store',[ActivityController::class,'store'])->name('activity.store');
    Route::get('admin-activity-edit/{id}',[ActivityController::class,'edit'])->name('activity.edit');
    Route::put('admin-activity-update/{activity}',[ActivityController::class,'update'])->name('activity.update');
    Route::delete('admin-activity-delete/{activity}',[ActivityController::class,'delete'])->name('activity.delete');
    //dress code
    Route::get('admin-dress',[DressController::class,'index'])->name('dress.index');
    Route::post('admin-dress-store',[DressController::class,'store'])->name('dress.store');
    Route::get('admin-dress-edit/{id}',[DressController::class,'edit'])->name('dress.edit');
    Route::put('admin-dress-update/{dress}',[DressController::class,'update'])->name('dress.update');
    Route::delete('admin-dress-delete/{dress}',[DressController::class,'delete'])->name('dress.delete');
    //why we are specail
    Route::get('admin-special',[WhyspecailController::class,'index'])->name('specail.index');
    Route::post('admin-special-store',[WhyspecailController::class,'store'])->name('specail.store');
    Route::get('admin-special-edit/{id}',[WhyspecailController::class,'edit'])->name('specail.edit');
    Route::put('admin-special-update/{specail}',[WhyspecailController::class,'update'])->name('specail.update');
    Route::delete('admin-special-delete/{specail}',[WhyspecailController::class,'delete'])->name('specail.delete');
    //notice
    Route::get('admin-notice',[NoticeController::class,'index'])->name('notice.index');
    Route::post('admin-notice-store',[NoticeController::class,'store'])->name('notice.store');
    Route::get('admin-notice-edit/{id}',[NoticeController::class,'edit'])->name('notice.edit');
    Route::put('admin-notice-update/{notice}',[NoticeController::class,'update'])->name('notice.update');
    Route::delete('admin-notice-delete/{notice}',[NoticeController::class,'delete'])->name('notice.delete');
    // hostel
    Route::get('admin-hostel',[HostelController::class,'index'])->name('hostel.index');
    Route::post('admin-hostel-store',[HostelController::class,'store'])->name('hostel.store');
    Route::get('admin-hostel-edit/{id}',[HostelController::class,'edit'])->name('hostel.edit');
    Route::put('admin-hostel-update/{hostel}',[HostelController::class,'update'])->name('hostel.update');
    Route::delete('admin-hostel-delete/{hostel}',[HostelController::class,'delete'])->name('hostel.delete');
    // facilities
    Route::get('admin-facilities',[FacilitiesController::class,'index'])->name('facilities.index');
    Route::post('admin-facilities-store',[FacilitiesController::class,'store'])->name('facilities.store');
    Route::get('admin-facilities-edit{id}',[FacilitiesController::class,'edit'])->name('facilities.edit');
    Route::put('admin-facilities-update{facilities}',[FacilitiesController::class,'update'])->name('facilities.update');
    Route::delete('admin-facilities-delete{facilities}',[FacilitiesController::class,'delete'])->name('facilities.delete');
    //shop
    Route::get('admin-product',[ShopController::class,'index'])->name('product.index');
    Route::post('admin-product-store',[ShopController::class,'store'])->name('product.store');
    Route::get('admin-product-edit/{id}',[ShopController::class,'edit'])->name('product.edit');
    Route::put('admin-product-update/{shop}',[ShopController::class,'update'])->name('product.update');
    Route::delete('admin-product-delete/{shop}',[ShopController::class,'delete'])->name('product.delete');
    //category
    Route::get('admin-category',[CategoryController::class,'index'])->name('category.index');
    Route::post('admin-category-store',[CategoryController::class,'store'])->name('category.store');
    Route::get('admin-category-edit/{id}',[CategoryController::class,'edit'])->name('category.edit');
    Route::put('admin-category-update/{category}',[CategoryController::class,'update'])->name('category.update');
    Route::delete('admin-category-delete/{category}',[CategoryController::class,'delete'])->name('category.delete');

    //class
    Route::get('admin-class',[ClassController::class,'index'])->name('class.index');
    Route::post('admin-class-store',[ClassController::class,'store'])->name('class.store');
    Route::get('admin-class-edit/{id}',[ClassController::class,'edit'])->name('class.edit');
    Route::put('admin-class-update/{class}',[ClassController::class,'update'])->name('class.update');
    Route::delete('admin-class-delete/{class}',[ClassController::class,'delete'])->name('class.delete');
});
