<?php

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
/*=====*****=====* Authentication Route =====*****=====*/
Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
/*=====*****=====* Authentication Route =====*****=====*/


/*=====*****=====* FrontEnd Route =====*****=====*/

/*====----====* Service Route Start *====----====*/
Route::get('clipping-path', 'frontEnd\WebController@clippingPath')->name('clipping.path');
Route::get('background-removal', 'frontEnd\WebController@backgrounRemoval')->name('background.removal');
Route::get('image-masking', 'frontEnd\WebController@imageMasking')->name('image.masking');
Route::get('natural-shadow', 'frontEnd\WebController@naturalShadow')->name('natural.shadow');
Route::get('photo-retouching', 'frontEnd\WebController@photoRetouching')->name('photo.retouching');
Route::get('ghosht-manneuquin', 'frontEnd\WebController@ghostManneuquin')->name('ghosht.manneuquin');
Route::get('product-photo-editing', 'frontEnd\WebController@productPhotEditing')->name('product.photo.editing');
Route::get('color-correction', 'frontEnd\WebController@colorCorrection')->name('color.correction');
Route::get('vector-conversion', 'frontEnd\WebController@vectorConversion')->name('vector.conversion');
/*====----====* Service Route End *====----====*/

/*====----====* Blog Route Start *====----====*/
Route::get('blog', 'frontEnd\WebController@blog')->name('blog');
Route::get('blog-category', 'frontEnd\WebController@blogCategory')->name('blog.category');
Route::get('ecommerce-trend', 'frontEnd\WebController@ecommerceTrend')->name('ecommerce.trend');
/*====----====* Blog Route End *====----====*/


Route::get('/', 'frontEnd\WebController@index')->name('index');
Route::get('about-us', 'frontEnd\WebController@aboutUs')->name('about.us');

Route::get('ecommerce-trend', 'frontEnd\WebController@ecommerceTrend')->name('ecommerce.trend');
Route::get('pricing', 'frontEnd\WebController@pricing')->name('pricing');
Route::get('sample', 'frontEnd\WebController@sample')->name('sample');
Route::get('upload', 'frontEnd\WebController@upload')->name('upload');

Route::get('faq', 'frontEnd\WebController@faq')->name('faq');
Route::get('privacy-and-policy', 'frontEnd\WebController@privacyAndPolicy')->name('privacy.and.policy');
Route::get('terms-and-conditions', 'frontEnd\WebController@termsAndConditions')->name('terms.and.conditions');
Route::get('refund-policy', 'frontEnd\WebController@refundPolicy')->name('refund.policy');
Route::get('payment-method', 'frontEnd\WebController@paymentMethod')->name('payment.method');
Route::get('sitemap', 'frontEnd\WebController@siteMap')->name('sitemap');
Route::get('get-quote', 'QuoteController@getQuote')->name('get.quote');
Route::get('contact', 'admin\ContactUsController@index')->name('contact');

Route::post('contact-send', 'admin\ContactUsController@send')->name('contact.send');
Route::post('store-quote', 'QuoteController@storeQuote')->name('store.quote');
Route::get('get-quote-upload', 'frontEnd\WebController@getQuoteUpload')->name('get.quote.upload');


Route::group(['middleware'=>['auth']], function () {
    Route::get('profile', 'ProfileController@index')->name('myprofile');

});
/*=====*****=====* FrontEnd Route =====*****=====*/


/*===== BackEnd Route =====*/
Route::group(['prefix' => 'admin', 'middleware'=>['auth','admin']], function () {
    Route::get('dashboard', 'admin\HomeController@dashboard')->name('dashboard');
    Route::get('service', 'admin\HomeController@service')->name('service');
    Route::get('quote', 'admin\HomeController@quote')->name('quote');
    Route::get('quote/{id}', 'admin\HomeController@quoteShow')->name('quote.show');
    Route::delete('quote/{id}', 'admin\HomeController@quoteDelete')->name('quote.destroy');
    Route::get('contact', 'admin\ContactUsController@contactAdmin')->name('contact.admin');
    Route::get('contact/{id}', 'admin\ContactUsController@contactShow')->name('contact.show');
    Route::delete('contact/{id}', 'admin\ContactUsController@contactDelete')->name('contact.destroy');
    Route::get('profile', 'admin\HomeController@profile')->name('profile');
    Route::put('profile/update', 'admin\HomeController@profileUpdate')->name('profile.update');
    Route::put('profile/update/password', 'admin\HomeController@passwordUpdate')->name('update.password');
});
/*===== BackEnd Route =====*/




