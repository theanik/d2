@extends ('frontEnd.layouts.master')
@section ('title', 'Site Map | Derection Of Designer Country')
@section ('css')
<style type="text/css">
.sitemapRes{
  margin: 0 auto;
  width: 50%;
}
    
</style>
@endsection
@section ('content')

<!--==** Terms And Condition Section Start **==-->
<section id="sitemap">
  <div class="container">
    <div class="site-map pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl5 text-center">
      <h1 class="pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl5 pb-3"><span style="border-bottom: 2px solid #19BEB9; width: 60%; padding-bottom: 20px;">Designer Country Sitemap</span></h1>
    </div>
    <div class="menu py-lg-5 py-md-4 py-sm-3 py-xs-3">
      <div class="site-map pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl5 text-center">
        <h1 class="pb-5"><span style="border-bottom: 2px solid #19BEB9; width: 60%; padding-bottom: 15px;">Header</span></h1>
      </div>
      <ul class="sitemapRes ">
        <li class="py-2 "><a href="" target="_blank" rel="noopener noreferrer"><b>Service</b></a>
          <ul class="pt-3 pl-5 ">
            <li class="py-2"><a href="{{route('clipping.path')}}" target="_blank">Clipping Path</a></li>
            <li class="py-2"><a href="{{route('background.removal')}}" target="_blank">Background Removal</a></li>
            <li class="py-2"><a href="{{route('image.masking')}}" target="_blank">Image Masking</a></li>
            <li class="py-2"><a href="{{route('natural.shadow')}}" target="_blank">Natural Shadow</a></li>
            <li class="py-2"><a href="{{route('photo.retouching')}}" target="_blank">Photo Retouching</a></li>
            <li class="py-2"><a href="{{route('ghosht.manneuquin')}}" target="_blank">Ghost Mannequin</a></li>
            <li class="py-2"><a href="{{route('product.photo.editing')}}" target="_blank">Product Phot Editing</a></li>
            <li class="py-2"><a href="{{route('color.correction')}}" target="_blank">Color Correction</a></li>
            <li class="py-2"><a href="{{route('vector.conversion')}}" target="_blank">Vector Convertion</a></li>
          </ul>
        </li>
        <li class="py-2"><a href="{{route('pricing')}}" target="_blank" rel="noopener noreferrer"><b>Pricing</b></a></li>
        <li class="py-2"><a href="{{route('sample')}}" target="_blank" rel="noopener noreferrer"><b>Sample</b></a></li>
        <li class="py-2"><a href="{{route('get.quote')}}" target="_blank" rel="noopener noreferrer"><b>Get Quote</b></a></li>
        <li class="py-2"><a href="{{route('upload')}}" target="_blank" rel="noopener noreferrer"><b>Upload</b></a></li>
        <li class="py-2"><a href="{{route('contact')}}" target="_blank" rel="noopener noreferrer"><b>Contact</b></a></li>
        <li class="py-2"><a href="{{route('login')}}" target="_blank" rel="noopener noreferrer"><b>Login</b></a></li>
      </ul>
    </div>

    <hr>
    <div class="pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl5 pb-3">
      <div class="site-map text-center">
        <h1 class="pb-4"><span style="border-bottom: 2px solid #19BEB9; width: 60%; padding-bottom: 15px;">Information</span></h1>
      </div>
      <ul class="py-3 sitemapRes">
        <li class="py-2 "><a href="{{route('blog')}}" target="_blank"><b>Blog</b></a></li>
        <li class="py-2"><a href="{{route('faq')}}" target="_blank"><b>FAQ</b></a></li>
        <li class="py-2"><a href="{{route('sample')}}" target="_blank"><b>Sample</b></a></li>
        <li class="py-2"><a href="{{route('terms.and.conditions')}}" target="_blank"><b>Terms & Condition</b></a></li>
        <li class="py-2"><a href="{{route('privacy.and.policy')}}" target="_blank"><b>Privacy & Policy</b></a></li>
        <li class="py-2"><a href="{{route('refund.policy')}}" target="_blank"><b>Refound Policy</b></a></li>
        <li class="py-2"><a href="{{route('sitemap')}}"><b>Sitemap</b></a></li>
      </ul>
    </div>
    <hr>
    <div class="pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl5 pb-3">
      <div class="site-map text-center">
        <h1 class="pb-4"><span style="border-bottom: 2px solid #19BEB9; width: 60%; padding-bottom: 15px;">Company</span></h1>
      </div>
      <ul class="py-3 sitemapRes">
        <li class="py-2 "><a href="{{route('about.us')}}" target="_blank"><b>About</b></a></li>
        <li class="py-2"><a href="{{route('pricing')}}" target="_blank"><b>Pricing</b></a></li>
        <li class="py-2"><a href="{{route('payment.method')}}" target="_blank"><b>Payment Method</b></a></li>
        <li class="py-2"><a href="{{route('contact')}}" target="_blank"><b>Support Center</b></a></li>
      </ul>
    </div>
    <hr>
    <div class="pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl5 pb-3">
      <div class="site-map ml-auto text-center">
        <h1 class="pb-4"><span style="border-bottom: 2px solid #19BEB9; width: 60%; padding-bottom: 15px;">Get Started</span></h1>
      </div>
      <ul class="py-3 sitemapRes">
        <li class="py-2 "><a href="{{route('index')}}" target="_blank"><b>Home</b></a></li>
        <li class="py-2"><a href="{{route('get.quote')}}" target="_blank"><b>Get Quote</b></a></li>
        <li class="py-2"><a href="{{route('login')}}" target="_blank"><b>Log in</b></a></li>
        <li class="py-2"><a href="{{route('register')}}" target="_blank"><b>Sign up</b></a></li>
      </ul>
    </div>
    <hr>
    <div class="py-5 text-center">
      <h1>Thanks For Visiting Our Site</h1>
      <h4 class="pt-2">Your Satisfaction is our Property</h4>
    </div>
  </div>
</section>

<!--==** Terms And Condition Section End **==-->
@endsection