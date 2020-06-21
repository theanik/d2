@extends ('frontEnd.layouts.master')
@section ('title', 'Professional Photo Editing | Clipping Path Background Change Services')
@section ('css')
<style type="text/css">

</style>
@endsection
@section ('content')

<!--==** Blog Section Start **==-->
{{-- <section id="blog">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 mt-3">
        <div class="text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
            <h1><span style="border-bottom: 2px solid #19BEB9; padding-bottom: 15px;">Blog Topics</span></h1>
        </div>
        <div class="row pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
            <div class="col-md-4 pt-col-3 pt-sm-3">
                <ul class="pl-col-2 pl-sm-3 pl-md-4 pl-lg-5 pl-xl-5">
                    <li class="py-2"><a href="">Commercial Photography</a></li>
                    <li class="py-2"><a href="">Product Photography</a></li>
                    <li class="py-2"><a href="">Photography tips</a></li>
                    <li class="py-2"><a href="">Photography</a></li>
                    <li class="py-2"><a href="">Photoshop</a></li>
                    <li class="py-2"><a href="">Ecommerce Tips</a></li>
                    <li class="py-2"><a href="{{route('blog.category')}}">Ecommerce</a></li>
                    <li class="py-2"><a href="">Selling Online</a></li>
                    <li class="py-2"><a href="">Image Editing</a></li>
                    <li class="py-2"><a href="">How To</a></li>
                    <li class="py-2"><a href="">News</a></li>
                    <li class="py-2"><a href="">Tips</a></li>
                </ul>
            </div>
            <div class="col-md-4 pt-col-3 pt-sm-3 ">
                <ul class="pl-col-2 pl-sm-3 pl-md-4 pl-lg-5 pl-xl-5">
                    <li class="py-2"><a href="">Photoshop Clipping Path</a></li>
                    <li class="py-2"><a href="">Background Removal</a></li>
                    <li class="py-2"><a href="">Image Masking</a></li>
                    <li class="py-2"><a href="">Photo Retouching</a></li>
                    <li class="py-2"><a href="">Drop Shadow</a></li>
                    <li class="py-2"><a href="">Mirror Effect</a></li>
                    <li class="py-2"><a href="">Ghost Mannequin</a></li>
                    <li class="py-2"><a href="">Color Variants</a></li>
                    <li class="py-2"><a href="">Vector Conversion</a></li>
                    <li class="py-2"><a href="">Product Editing & E-commerce</a></li>
                    <li class="py-2"><a href="">Graphic design</a></li>
                    <li class="py-2"><a href="">Designer Country</a></li>
                </ul>
            </div>
            <div class="col-md-4 pt-col-3 pt-sm-3 ">
                <ul class="pl-col-2 pl-sm-3 pl-md-4 pl-lg-5 pl-xl-5">
                    <li class="py-2"><a href="">Social Media Marketing</a></li>
                    <li class="py-2"><a href="">Instagram Marketing</a></li>
                    <li class="py-2"><a href="">Digital Marketing</a></li>
                    <li class="py-2"><a href="">How to Sell Online</a></li>
                    <li class="py-2"><a href="">Outsourcing</a></li>
                    <li class="py-2"><a href="">Business Finance</a></li>
                    <li class="py-2"><a href="">Products to Sell</a></li>
                    <li class="py-2"><a href="">Conversion Rate Optimization</a></li>
                    <li class="py-2"><a href="">Copywriting</a></li>
                    <li class="py-2"><a href="">Sell on Amazon</a></li>
                    <li class="py-2"><a href="">Future of Commerce</a></li>
                    <li class="py-2"><a href="">SEO</a></li>
                </ul>
            </div>
        </div>
        <div class="text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
            <h4>We Take Care of Your Photos for Your Professional Increase with Expected Price & Time.</h4>
            <p>Inform us what service you require & we must serve you with your expected price.</p>
        </div>
        <div class="custom_button text-center pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5 ">
            <a href="" class="btn btn">SEE OUR SERVICE</a>
        </div>
    </div>
</section> --}}

<section id="blog_category">
    <div class="container">
        <div class="main py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
            <div id="myBtnContainer" class="text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                <!-- <button class="btn btn-success" onclick="filterSelection('all')"> Show all</button> -->
                {{-- <button class="btn btn custom-b mt-3 active"
                    onclick="filterSelection('commercial_photography')">Commercial
                    Photography</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('how_to')">How To</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('inspiring_stories')">Inspiring
                    Stories</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('news')">News</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('selling_online')">Selling
                    Online</button><br> --}}
            </div>
            <!-- Blog Category  Grid -->
            <div class="row">
                <div class="">
                    <div class="heading text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                        <h2 class="pb-col-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Explore Something New</h2>
                            <p>Photographers for Outsourcing Online Store</p>
                    </div>
                    <div class="row ">
                        @foreach($posts as $post)
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="/blog/{{ $post->slug }}"><img src="{{ $post->featured_image }}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="/blog/{{ $post->slug }}">{{ $post->title }}</a></p>
                            </div>
                        </div>
                        @endforeach
                    {{-- <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">COMMERCIAL PHOTOGRAPHY</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Cut_Out.png')}}"class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How Long Does it Take to Edit Product Photos?</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">COMMERCIAL PHOTOGRAPHY</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Photo_Background_Change.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Outsource Product Photo Editing so You Can Get Back to What’s
                                        Important</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">COMMERCIAL PHOTOGRAPHY</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Photo_Editing.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Choose the Best Clipping Path Service Provider</a></p>
                            </div>
                        </div>
                    </div> --}}
                </div>
                {{-- <div class="column how_to">
                    <div class="heading text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                        <h2 class="pb-col-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">How To</h2>
                            <p>Outsourcing Product Photo Clipping Path</p>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">HOW TO</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Background_Change.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Photoshop and Take Product Photos to the Next Level</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">HOW TO</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Background_Removal.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">17 Photoshop Tutorials for Product Photography: The Ultimate List</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">HOW TO</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_Clipping_Path.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">4 Practical Ways to Add Smoke and Fog to Product Photos</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">HOW TO</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_clipp.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">What’s the Cheapest Way to Put a Product on a White Background?</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">HOW TO</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_Clipping .png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Create a Transparent Background in Photoshop</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">HOW TO</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_Path.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Change the Background Color of a Picture</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column inspiring_stories">
                    <div class="heading text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                        <h2 class="pb-col-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Inspiring Stories</h2>
                            <p>Outsourcing Product And Photo Retouching</p>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">INSPIRING STORIES</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Image_masking/Hair.png')}}"class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Getting Product Photos on the Cheap: How Cranium Care Outsourced
                                        Everything</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">INSPIRING STORIES</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Image_masking/Image_masking.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How Speak Skincare’s Trust in Outsourcing Allowed Them to Grow the
                                        Business</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">INSPIRING STORIES</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Image_masking/Masking_Service.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How Jewelry Brand Claurete Shoots and Edits Product Photos that
                                        Convert</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">INSPIRING STORIES</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Image_masking/Photo_Hair.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Photoshop Retouch-When Less is Enough</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">INSPIRING STORIES</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Image_masking/Photoshop_Masking_Service.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Recognizing a Great Graphic Specialist for Photoshop Clipping Path</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">INSPIRING STORIES</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Image_masking/Photoshop_Masking.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Should Models Go for Photo Retouching and to What Extent?</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column news">
                    <div class="heading text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                        <h2 class="pb-col-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">News</h2>
                            <p>Google Shopping And Sell More With Photoshop</p>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">NEWS</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Ghost_Mannequin_Service.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Want to Write for Us? Here’s How to Submit Your Guest Post</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">NEWS</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Ghost_Mannequin.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Exciting Updates Here at Clipping Path India</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">NEWS</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/manipulation.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Spreading Smiles at Clipping Path India</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">NEWS</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Mannequin_Service.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Case Study: How We Used TrustPilot to Improve Our Image-Editing
                                        Services</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">NEWS</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Photo_manipulation.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Outsource Experts Ltd. Honored With 2015 BASIS Outsourcing Award</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">NEWS</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Photoshop_manipulation.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Corporate Charity Motivates Employees to Chip In</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="column selling_online">
                    <div class="heading text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                        <h2 class="pb-col-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Selling Online</h2>
                            <p>Bike or Car Background cut out to remove objects</p>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">SELLING ONLINE</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/drop_Photoshop.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Drive More Online Sales With Optimized Product Photos</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">SELLING ONLINE</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/Drop_Shadow_Service.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Etsy Product Photography Tips: How to Sell Lots of Products</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">SELLING ONLINE</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/Drop_Shadow.png')}}"class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Optimize for Visual Search: The SEO Your Ecommerce Site is
                                        Missing</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">SELLING ONLINE</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/image_drop_shadow.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Are Your Product Photos Driving Conversions? Here’s How to Find Out</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">SELLING ONLINE</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/Natural_Drop.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Get More User-Generated Content to Promote Your Ecommerce Brand</a>
                                </p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">SELLING ONLINE</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/shadow_creation.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">2019 Ecommerce Trends: What’s Hot, What’s Not and How to Prepare Your
                                        Business</a></p>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            {{-- <div class="custom_button text-center">
                <a href="" class="btn btn">LOAD MORE</a>
            </div> --}}
            
            {{ $posts->links() }} 

            <hr>
        </div>
    </div>
</section>

@endsection
@section('js')
<script>
    // filterSelection("commercial_photography")

    // function filterSelection(c) {
    //     var x, i;
    //     x = document.getElementsByClassName("column");
    //     if (c == "all") c = "";
    //     for (i = 0; i < x.length; i++) {
    //         w3RemoveClass(x[i], "show");
    //         if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
    //     }
    // }

    // function w3AddClass(element, name) {
    //     var i, arr1, arr2;
    //     arr1 = element.className.split(" ");
    //     arr2 = name.split(" ");
    //     for (i = 0; i < arr2.length; i++) {
    //         if (arr1.indexOf(arr2[i]) == -1) {
    //             element.className += " " + arr2[i];
    //         }
    //     }
    // }

    // function w3RemoveClass(element, name) {
    //     var i, arr1, arr2;
    //     arr1 = element.className.split(" ");
    //     arr2 = name.split(" ");
    //     for (i = 0; i < arr2.length; i++) {
    //         while (arr1.indexOf(arr2[i]) > -1) {
    //             arr1.splice(arr1.indexOf(arr2[i]), 1);
    //         }
    //     }
    //     element.className = arr1.join(" ");
    // }
    // // Add active class to the current button (highlight it)
    // var btnContainer = document.getElementById("myBtnContainer");
    // var btns = btnContainer.getElementsByClassName("btn");
    // for (var i = 0; i < btns.length; i++) {
    //     btns[i].addEventListener("click", function () {
    //         var current = document.getElementsByClassName("active");
    //         current[0].className = current[0].className.replace(" active", "");
    //         this.className += " active";
    //     });
    // }

</script>
@endsection
