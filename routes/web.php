<?php

use App\BasicInformation;
use App\User;
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

// global blade variable
$users = User::where('status', 1)->latest()->get();
$basic_information = BasicInformation::latest()->first();
View()->share([
    'users' => $users,
    'basic_information' => $basic_information,
]);

Route::get('/', 'WebsiteController@index')->name('website_index');
Route::get('/contact', 'WebsiteController@contact')->name('website_contact');
Route::get('/team', 'WebsiteController@our_privilege')->name('website_our_privilege');
Route::get('/founder-lawyer', 'WebsiteController@team_lead')->name('website_team_lead');
Route::get('/service', 'WebsiteController@service')->name('website_service');
Route::get('/service/{id}/{name}', 'WebsiteController@service_single')->name('service_single');
Route::get('/about', 'WebsiteController@about')->name('website_about');
Route::get('/free-online-assesment', 'WebsiteController@online_assesment')->name('website_online_assesment');

Route::post('/free-consultation-submit', 'WebsiteController@free_consultation_submit')->name('website_free_consultation_submit');
Route::post('/subscriber-submit', 'WebsiteController@subscriber_submit')->name('website_subscriber_submit');
Route::post('/contact-message-submit', 'WebsiteController@contact_message_submit')->name('website_contact_message_submit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('/admin', 'AdminController@index')->name('admin_index')->middleware(['auth', 'admin']);

// user routes
Route::group(['prefix' => 'admin/user', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'UserController@index')->name('admin_user_index');

    Route::get('/profile/{id}', 'UserController@profile')->name('admin_user_profile');
    Route::post('/profile/update', 'UserController@profile_update')->name('admin_user_profile_update');

    Route::get('/view', 'UserController@view')->name('admin_user_view');
    Route::get('/edit', 'UserController@edit')->name('admin_user_edit');
    Route::get('/add', 'UserController@add')->name('admin_user_add');
    Route::post('/store', 'UserController@store')->name('admin_user_store');
    Route::post('/update', 'UserController@update')->name('admin_user_update');
    Route::get('/delete/{id}', 'UserController@delete')->name('admin_user_delete');
});

// Website management routes
Route::group(['prefix' => 'admin/website/basic-information', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'BasicInformationController@index')->name('admin_about_us_index');
    Route::post('/update', 'BasicInformationController@update')->name('admin_about_us_update');
});

Route::group(['prefix' => 'admin/website/banner', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'BannerController@index')->name('admin_banner_index');
    Route::get('/view/{id}', 'BannerController@view')->name('admin_banner_view');
    Route::get('/edit', 'BannerController@edit')->name('admin_banner_edit');
    Route::get('/add', 'BannerController@add')->name('admin_banner_add');
    Route::post('/store', 'BannerController@store')->name('admin_banner_store');
    Route::post('/update', 'BannerController@update')->name('admin_banner_update');
    Route::get('/delete/{id}', 'BannerController@delete')->name('admin_banner_delete');
});

Route::group(['prefix' => 'admin/website/short-about', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'ShortAboutController@index')->name('admin_short_about_index');
    Route::post('/update', 'ShortAboutController@update')->name('admin_short_about_update');
});

Route::group(['prefix' => 'admin/website/descriptive-about', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'DescriptiveAboutController@index')->name('admin_descriptive_about_index');
    Route::post('/update', 'DescriptiveAboutController@update')->name('admin_descriptive_about_update');
});

Route::group(['prefix' => 'admin/website/area-of-practice', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'AreaOfPracticeController@index')->name('admin_area_of_practice_index');
    Route::get('/view/{id}', 'AreaOfPracticeController@view')->name('admin_area_of_practice_view');
    Route::get('/edit', 'AreaOfPracticeController@edit')->name('admin_area_of_practice_edit');
    Route::get('/add', 'AreaOfPracticeController@add')->name('admin_area_of_practice_add');
    Route::post('/store', 'AreaOfPracticeController@store')->name('admin_area_of_practice_store');
    Route::post('/update', 'AreaOfPracticeController@update')->name('admin_area_of_practice_update');
    Route::get('/delete/{id}', 'AreaOfPracticeController@delete')->name('admin_area_of_practice_delete');
});

Route::group(['prefix' => 'admin/website/faq', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'FaqController@index')->name('admin_faq_index');
    Route::get('/view/{id}', 'FaqController@view')->name('admin_faq_view');
    Route::get('/edit', 'FaqController@edit')->name('admin_faq_edit');
    Route::get('/add', 'FaqController@add')->name('admin_faq_add');
    Route::post('/store', 'FaqController@store')->name('admin_faq_store');
    Route::post('/update', 'FaqController@update')->name('admin_faq_update');
    Route::get('/delete/{id}', 'FaqController@delete')->name('admin_faq_delete');
});

Route::group(['prefix' => 'admin/website/law-list', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'LawListController@index')->name('admin_law_list_index');
    Route::get('/view/{id}', 'LawListController@view')->name('admin_law_list_view');
    Route::get('/edit', 'LawListController@edit')->name('admin_law_list_edit');
    Route::get('/add', 'LawListController@add')->name('admin_law_list_add');
    Route::post('/store', 'LawListController@store')->name('admin_law_list_store');
    Route::post('/update', 'LawListController@update')->name('admin_law_list_update');
    Route::get('/delete/{id}', 'LawListController@delete')->name('admin_law_list_delete');
});

Route::group(['prefix' => 'admin/website/free-consultation', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'FreeConsultationController@index')->name('admin_free_consultation_index');
    Route::get('/view/{id}', 'FreeConsultationController@view')->name('admin_free_consultation_view');
    Route::get('/edit', 'FreeConsultationController@edit')->name('admin_free_consultation_edit');
    Route::get('/add', 'FreeConsultationController@add')->name('admin_free_consultation_add');
    Route::post('/store', 'FreeConsultationController@store')->name('admin_free_consultation_store');
    Route::post('/update', 'FreeConsultationController@update')->name('admin_free_consultation_update');
    Route::get('/delete/{id}', 'FreeConsultationController@delete')->name('admin_free_consultation_delete');
});

Route::group(['prefix' => 'admin/website/reviews', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'ReviewController@index')->name('admin_review_index');
    Route::get('/view/{id}', 'ReviewController@view')->name('admin_review_view');
    Route::get('/edit', 'ReviewController@edit')->name('admin_review_edit');
    Route::get('/add', 'ReviewController@add')->name('admin_review_add');
    Route::post('/store', 'ReviewController@store')->name('admin_review_store');
    Route::post('/update', 'ReviewController@update')->name('admin_review_update');
    Route::get('/delete/{id}', 'ReviewController@delete')->name('admin_review_delete');
});

Route::group(['prefix' => 'admin/website/subscriber', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'SubscriberController@index')->name('admin_subscriber_index');
    Route::get('/view/{id}', 'SubscriberController@view')->name('admin_subscriber_view');
    Route::get('/edit', 'SubscriberController@edit')->name('admin_subscriber_edit');
    Route::get('/add', 'SubscriberController@add')->name('admin_subscriber_add');
    Route::post('/store', 'SubscriberController@store')->name('admin_subscriber_store');
    Route::post('/update', 'SubscriberController@update')->name('admin_subscriber_update');
    Route::get('/delete/{id}', 'SubscriberController@delete')->name('admin_subscriber_delete');
});

Route::group(['prefix' => 'admin/website/service', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'ServiceController@index')->name('admin_service_index');
    Route::post('/update', 'ServiceController@update')->name('admin_service_update');
});

Route::group(['prefix' => 'admin/website/team-lead', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'TeamLeadController@index')->name('admin_team_lead_index');
    Route::post('/update', 'TeamLeadController@update')->name('admin_team_lead_update');
});

Route::group(['prefix' => 'admin/website/our-privilege', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'OurPrivilegeController@index')->name('admin_our_privilege_index');
    Route::post('/update', 'OurPrivilegeController@update')->name('admin_our_privilege_update');
});

Route::group(['prefix' => 'admin/website/contact-messages', 'namespace' => 'WebsiteManagement', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'ContactUsController@index')->name('admin_contact_us_message_index');
    Route::get('/view/{id}', 'ContactUsController@view')->name('admin_contact_us_message_view');
    Route::get('/edit', 'ContactUsController@edit')->name('admin_contact_us_message_edit');
    Route::get('/add', 'ContactUsController@add')->name('admin_contact_us_message_add');
    Route::post('/store', 'ContactUsController@store')->name('admin_contact_us_message_store');
    Route::post('/update', 'ContactUsController@update')->name('admin_contact_us_message_update');
    Route::get('/delete/{id}', 'ContactUsController@delete')->name('admin_contact_us_message_delete');
});
