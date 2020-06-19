@extends ('frontEnd.layouts.master')
@section ('title', 'Blog-Category')
@section ('css')
<style type="text/css">
.img-fluid{
    width: 100% !important;
}

</style>
@endsection
@section ('content')

<!--==** Blog Category Section Start **==-->
<section id="blog_category">
    <div class="container">
        <div class="main py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
            <div id="myBtnContainer" class="text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                <!-- <button class="btn btn-success" onclick="filterSelection('all')"> Show all</button> -->
                <button class="btn btn custom-b mt-3 active"
                    onclick="filterSelection('commercial_photography')">Commercial
                    Photography</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('how_to')">How To</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('inspiring_stories')">Inspiring
                    Stories</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('news')">News</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('selling_online')">Selling
                    Online</button><br>
            </div>
            <!-- Blog Category  Grid -->
            <div class="row">
                <div class="column commercial_photography">
                    <div class="heading text-center pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                        <h2 class="pb-col-1 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Commercial Photography</h2>
                            <p>Photographers for Outsourcing Online Store</p>
                    </div>
                    <div class="row blog_category">
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="{{route('ecommerce.trend')}}">COMMERCIAL PHOTOGRAPHY</a>
                                <a href="{{route('ecommerce.trend')}}"><img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Clipping.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="{{route('ecommerce.trend')}}">How to Charge for Photo Editing: a Guide to Setting Rates</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">COMMERCIAL PHOTOGRAPHY</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Clipping_Path.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">Do Professional Photographers Edit Their Own Photos?</a></p>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-6 col-lg-4 col-xl-4">
                            <div class="content">
                                <a href="">COMMERCIAL PHOTOGRAPHY</a>
                                <a href=""><img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Cut_Out_Images.png')}}"
                                       class="img-fluid py-2"  alt="Mountains"></a>
                                <p><a href="">How to Know It’s Time to Outsource Photo Editing</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="row blog_category">
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
                    </div>
                </div>
                <div class="column how_to">
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
                </div>
            </div>
            <div class="custom_button text-center">
                <a href="" class="btn btn">LOAD MORE</a>
            </div>
            <hr>
        </div>
    </div>
</section>
<!--==** Blog Category Section Start **==-->

<!--==** Tag Section Start **==-->
@include ('frontEnd.layouts.tag')
<!--==** Tag Section End **==-->

@endsection

@section ('js')
<!--==*** Blog-category Scrip Link Start **==-->
<script>
    filterSelection("commercial_photography")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            w3RemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
        }
    }

    function w3AddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function w3RemoveClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            while (arr1.indexOf(arr2[i]) > -1) {
                arr1.splice(arr1.indexOf(arr2[i]), 1);
            }
        }
        element.className = arr1.join(" ");
    }
    // Add active class to the current button (highlight it)
    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
        btns[i].addEventListener("click", function () {
            var current = document.getElementsByClassName("active");
            current[0].className = current[0].className.replace(" active", "");
            this.className += " active";
        });
    }

</script>
<!--==*** Blog-category Scrip Link Start **==-->
@endsection

