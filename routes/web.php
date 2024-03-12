<?php


use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
})->name("home");

Route::view("home2","index-2")->name("home2");
Route::view("contact","contact")->name("contact");
Route::view("plan","plan")->name("plan");
Route::view("team","team")->name("team");
Route::view("pricing","pricing")->name("pricing");
Route::view("about","about")->name("about");
Route::view("faq","faq")->name("faq");

//for project
Route::view("project","projects")->name("project");
Route::view("project-single","projects-single")->name("project-single");
//for service
Route::view("service","services")->name("service");
Route::view("service-single","service-single")->name("service-single");
//typography
Route::view("typography","typography")->name("typography");
//testimonial
Route::view("testimonial","testimonials")->name("testimonial");
//dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get("getPdfDetail",function (){
    $content = File::get(resource_path("pdf/detail.pdf"));
    return response($content,200,[
        'Content-Type'=>'application/pdf'
    ]);
});
require __DIR__.'/auth.php';