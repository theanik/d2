<?php

namespace App\Http\Controllers\frontEnd;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quote;

class WebController extends Controller
{
    public function index(){
        // session()->flush();
        return view('frontEnd.pages.index');
    }
    public function aboutUs(){
        return view('frontEnd.pages.about_us');
    }
    public function backgrounRemoval(){
        return view('frontEnd.pages.background_removal');
    }
    public function blogCategory(){
        return view('frontEnd.pages.blog_category');
    }
    public function pricing(){
        return view('frontEnd.pages.pricing');
    }
    public function sample(){
        return view('frontEnd.pages.sample');
    }
    public function service(){
        return view('frontEnd.pages.service');
    }
    public function clippingPath(){
        return view('frontEnd.pages.clipping_path');
    }
    public function imageMasking(){
        return view('frontEnd.pages.image_masking');
    }
    public function naturalShadow(){
        return view('frontEnd.pages.natural_shadow');
    }
    public function photoRetouching(){
        return view('frontEnd.pages.photo_retouching');
    }
    public function ghostManneuquin(){
        return view('frontEnd.pages.ghosht_manneuquin');
    }
    public function upload(){
        return view('frontEnd.pages.upload');
    }
    public function productPhotEditing(){
        return view('frontEnd.pages.product_photo_editing');
    }
    public function colorCorrection(){
        return view('frontEnd.pages.color_correction');
    }
    public function vectorConversion(){
        return view('frontEnd.pages.vector_conversion');
    }
    // public function contact(){
    //     return view('frontEnd.pages.contact');
    // }
    public function blog(){
        return view('frontEnd.pages.blog');
    }
    public function faq(){
        return view('frontEnd.pages.faq');
    }
    public function privacyAndPolicy(){
        return view('frontEnd.pages.privacy_and_policy');
    }
    public function termsAndConditions(){
        return view('frontEnd.pages.terms_and_conditions');
    }
    public function refundPolicy(){
        return view('frontEnd.pages.refund_policy');
    }
    public function paymentMethod(){
        return view('frontEnd.pages.payment_method');
    }
   
    public function siteMap(){
        return view('frontEnd.pages.sitemap');
    }
    public function getQuoteUpload(){
        return view('frontEnd.pages.get_quote_upload');
    }
    public function ecommerceTrend(){
        return view('frontEnd.pages.ecommerce_trend');
    }
    public function logIn(){
        return view('frontEnd.pages.login');
    }
    public function createAccount(){
        return view('frontEnd.pages.create_account');
    }

}
