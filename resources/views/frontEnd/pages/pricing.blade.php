@extends ('frontEnd.layouts.master')
@section ('title', 'Clipping Path Cut Out Services | Designer Country')
@section ('css')
<style type="text/css">

</style>
@endsection
@section ('content')

<!--==** Pricing head Section Start **==-->
<section id="pricing_head">
    <div class="container">
        <div class="py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
            <div class="header  text-center pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4">
                <h1>Photo Editing Price-Designer Country</h1>
                <p>A cheap-priced we offer let you approach us flexibly, pricing strategy policy <br>
                    we
                    maintain for your benefits including bulk image effects discount.</p>
            </div>
        </div>
        <div class="main py-col-2 py-sm-2 py-md-3 py-lg-4 py-xl-4 mx-col-2 mx-sm-3 mx-md-4 mx-lg-5 mx-xl-5"
            style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
            <div id="myBtnContainer" class="text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
                <!-- <button class="btn btn-success" onclick="filterSelection('all')"> Show all</button> -->
                <button class="btn btn custom-b mt-3 active" onclick="filterSelection('clipping_path')">Clipping
                    path</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('background_removal')">Background
                    Removal</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('image_masking')">Image Masking</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('ghost_mannequin')">Ghost
                    Mannequin</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('drop_shadow')">Drop Shadow</button><br>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('photo_retouching')">Photo
                    Retouching</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('color_variants')">Color
                    Variants</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('multi_clipping')">Multi Clipping
                    Path</button>
                <button class="btn btn custom-b mt-3" onclick="filterSelection('vector_conversion')">Vector
                    Conversion</button>
            </div>
            <!-- Portfolio Gallery Grid -->
            <div class="row" style="justify-content: center !important;">
                <div class="column clipping_path">
                    <div class="content">
                        <div class="div text-center">
                            <p class="text-light py-2">Cliping Path <span class="pl-3"
                                    style="letter-spacing: 2px;"><b>$0.39</b></span></p>
                        </div>
                        <img src="{{asset('assets/frontEnd/images/pricing/Clipping-Path.png')}}" alt="Mountains"
                            style="width:100%">
                    </div>
                </div>
                <div class="column background_removal">
                    <div class="content">
                        <div class="div text-center">
                            <p class="text-light py-2">Background Removal<span class="pl-3"
                                    style="letter-spacing: 2px;"><b>$0.39</b></span</p> </div> <img
                                        src="{{asset('assets/frontEnd/images/pricing/Background-removal.png')}}"
                                        alt="Mountains" style="width:100%">
                        </div>
                    </div>
                    <div class="column image_masking">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Image Masking<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$1.50</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Image-masking.png')}}" alt="Mountains"
                                style="width:100%">
                        </div>
                    </div>
                    <div class="column ghost_mannequin">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Ghost Mannequin<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$1.45</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Manipulation_4.png')}}" alt="Mountains"
                                style="width:100%">
                        </div>
                    </div>
                    <div class="column drop_shadow">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Drop Shodow<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$0.49</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Drop-shadow.png')}}" alt="Mountains"
                                style="width:100%">
                        </div>
                    </div>
                    <div class="column photo_retouching">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Photo Retouching<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$1.65</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Photo-retouching.png')}}" alt="Mountains"
                                style="width:100%">
                        </div>
                    </div>
                    <div class="column color_variants">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Color Variants<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$1.50</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Color-variants.png')}}" alt="Mountains"
                                style="width:100%">
                        </div>
                    </div>
                    <div class="column multi_clipping">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Multi Clipping Path<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$1.39</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Product-photo-editing.png')}}"
                                alt="Mountains" style="width:100%">
                        </div>
                    </div>
                    <div class="column vector_conversion">
                        <div class="content">
                            <div class="div text-center">
                                <p class="text-light py-2">Vactor Conversion<span class="pl-3"
                                        style="letter-spacing: 2px;"><b>$4.99</b></span></p>
                            </div>
                            <img src="{{asset('assets/frontEnd/images/pricing/Vector-conversion.png')}}" alt="Mountains"
                                style="width:100%">
                        </div>
                    </div>
                    <!-- END GRID -->
                </div>
                <!-- END MAIN -->
                <div class="custom_button text-center">
                    <a href="{{route('get.quote')}}" class="btn btn text-uppercase">get your quote</a>
                </div>
            </div>
        </div>
</section>
<!--==** Pricing head Section End **==-->

<!--**-- Pricing Section Start --**-->
<section id="pricing_body">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="head text-center">
            <h1 class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Image Processing Pricing Table</h1>
            <p>Eventually the standard value of your images & brand will regulate how appreciably you pay for files
                edited.
                Specifically top-priority on delivery we control time management if you have more files. Even we manage
                your
                expectance to lighten your photo smile, brighten by editing your image’s perspective. </p>
        </div>
        <div class="row py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
            <div class="col-md-4">
                <ul class="list-group mb-3 text-center"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #283E4B;">
                        <h2 class="text-uppercase text-light">Basic</h2>
                    </li>
                    <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #F8F8F8;">
                        <h1><b>$ 25 <sup>00</sup></b></h1>
                    </li>
                    <li class="list-group-item"><strong>25</strong> Edit Credits</li>
                    <li class="list-group-item"><strong>1.00</strong> per Credit</li>
                    <li class="list-group-item"><strong>0</strong> Free Edit Credits</li>
                    <li class="list-group-item text-light" style="background-color: #009B97;">
                        <a class="text-light" href="{{route('get.quote')}}"><b>ORDER NOW</b></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group mb-3 text-center"
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #009b97;">
                        <h2 class="text-uppercase text-light">standard</h2>
                    </li>
                    <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #F8F8F8;">
                        <h1><b>$ 50 <sup>00</sup></b></h1>
                    </li>
                    <li class="list-group-item"><strong>54</strong> Edit Credits</li>
                    <li class="list-group-item"><strong>0.93</strong> per Credit</li>
                    <li class="list-group-item"><strong>4</strong> Free Edit Credits</li>
                    <li class="list-group-item" style="background-color: #283E4B;">
                        <a class="text-light" href="{{route('get.quote')}}"><b>ORDER NOW</b></a>
                    </li>
                </ul>
            </div>
            <div class="col-md-4">
                <ul class="list-group mb-3 text-center "
                    style="box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
                    <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #283E4B;">
                        <h2 class="text-uppercase text-light">PREMIUM</h2>
                    </li>
                    <li class="list-group-item py-col-2 py-sm-3 py-md-3 py-lg-4 py-xl-4" style="background-color: #F8F8F8;">
                        <h1><b>$ 100 <sup>00</sup></b></h1>
                    </li>
                    <li class="list-group-item"><strong>110</strong> Edit Credits</li>
                    <li class="list-group-item"><strong>0.91</strong> per Credit</li>
                    <li class="list-group-item"><strong>10</strong> Free Edit Credits</li>
                    <li class="list-group-item text-light" style="background-color: #009B97;">
                        <a class="text-light" href="{{route('get.quote')}}"><b>ORDER NOW</b></a>
                    </li>
                </ul>
            </div>
        </div>
        <h1 class="text-center pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Quantity Credits</h1>
        <p class="lead text-center">We have a big discount for bulk photo processing, you first get discount for editing
            100 files by ourselves, this process goes on a clipping path & shadow creation to get a real view.</p>
        <div class="custom_button text-center">
            <a href="{{route('get.quote')}}" class="btn btn text-uppercase">get your quote</a>
         </div>
    </div>
</section>
<!--**-- Pricing Section End --**-->

@endsection

@section ('js')
<!--==*** Pricing script Link **==-->
<script>
    filterSelection("clipping_path")

    function filterSelection(c) {
        var x, i;
        x = document.getElementsByClassName("column");
        if (c == "all") c = "";
        for (i = 0; i < x.length; i++) {
            DesignerCountryRemoveClass(x[i], "show");
            if (x[i].className.indexOf(c) > -1) DesignerCountryAddClass(x[i], "show");
        }
    }

    function DesignerCountryAddClass(element, name) {
        var i, arr1, arr2;
        arr1 = element.className.split(" ");
        arr2 = name.split(" ");
        for (i = 0; i < arr2.length; i++) {
            if (arr1.indexOf(arr2[i]) == -1) {
                element.className += " " + arr2[i];
            }
        }
    }

    function DesignerCountryRemoveClass(element, name) {
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
<!--==*** Pricing script Link **==-->
@endsection
