@extends ('frontEnd.layouts.master')
@section ('title', 'Photoshop Sample Work Photo Cut Out Services')
@section ('css')
<style type="text/css">

</style>
@endsection
@section ('content')

<!--==** Sample Section Start **==-->
<section id="sample">
    <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
        <div class="container pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4">
            <div class="header  text-center">
                <h1>Photoshop Sample Work: Clipping Path, Drop Shadow, Images Masking, Retouching & Manipulation.
                </h1>
            </div>
        </div>
        <div class="main pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4">

            <!-- Service list Start -->
            <div id="myBtnContainer" class="text-center pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4 active"
                    onclick="filterSelection('clipping_path')">Clipping Path</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('background_removal')">Background Removal</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('image_masking')">Image Masking</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('ghost_mannequin')">Ghost Mannequin</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('natural_shadow')">Natural Shadow</button><br>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('photo_retouching')">Photo Retouching</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('color_correction')">Color Correction</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('product_photo_editing')">Product Photo Editing</button>
                <button class="btn btn custom-b mt-col-2 mt-sm-2 mt-md-3 mt-lg-4 mt-xl-4"
                    onclick="filterSelection('vector_conversion')">Vector Conversion</button>
            </div>
            <!-- Service list End -->

            <!-- Service Gallery Start -->
            <div class="row">
                <!-- Clipping Path Gallery Start -->
                <div class=" column clipping_path">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Clipping.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Clipping_Path.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Cut_Out_Images.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Cut_Out.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Photo_Background_Change.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Clipping_Path/Photo_Editing.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('clipping.path')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!-- Clipping Path Gallery End -->
                <!--  Background-Removal Gallery Start -->
                <div class="column background_removal">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Background_Change.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Background_Removal.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_Clipping_Path.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_clipp.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_Clipping .png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Background_Removal/Photoshop_Path.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('background.removal')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Background-Removal Gallery End -->
                <!--  Image-Masking Gallery Start -->
                <div class="column image_masking">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Image_masking/Hair.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Image_masking/Image_masking')}}.png" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Image_masking/Masking_Service')}}.png" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Image_masking/Photo_Hair.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Image_masking/Photoshop_Masking_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Image_masking/Photoshop_Masking.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('image.masking')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Image-Masking Gallery End -->
                <!--  Ghost-Mannequin Gallery Start -->
                <div class="column ghost_mannequin">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Ghost_Mannequin_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Ghost_Mannequin.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/manipulation.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Mannequin_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Photo_manipulation.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Ghost_mannequin/Photoshop_manipulation.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('ghosht.manneuquin')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Ghost-Mannequin Gallery End -->
                <!--  Natural-Shadow Gallery Start -->
                <div class="column natural_shadow">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/drop_Photoshop')}}.png" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/Drop_Shadow_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/Drop_Shadow.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/image_drop_shadow.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/Natural_Drop.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Drop_shadow/shadow_creation')}}.png" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('natural.shadow')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Natural-Shadow Gallery End -->
                <!--  Photo-Retouching Gallery Start -->
                <div class="column photo_retouching">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Photo_retouching/Jewelry_Retouching.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Photo_retouching/Photo_Retouching_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Photo_retouching/Photo_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Photo_retouching/Professional_retouching.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Photo_retouching/Retouching_Product.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Photo_retouching/Retouching_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('photo.retouching')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Photo-Retouching Gallery End -->
                <!--  Color-Variants Gallery Start -->
                <div class="column color_correction">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Color_variants/Changing_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Color_variants/Color_Changing_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Color_variants/Color_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Color_variants/Color_variants.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Color_variants/image_Color_Correction.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Color_variants/Photo_color_change.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('color.correction')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Color-Variants Gallery End -->
                <!--  Product-Photo-Editing Gallery Start -->
                <div class="column product_photo_editing">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Product_photo_editing/Background_Crop.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Product_photo_editing/Ecommerce_Product.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Product_photo_editing/Editing_Service.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Product_photo_editing/Product_Editing_Service.png')}}"
                                    alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Product_photo_editing/Product_editing.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Product_photo_editing/Product_photo_editing.png')}}"
                                    alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('product.photo.editing')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Product-Photo-Editing Gallery End -->
                <!--  Vector-Conversion-Editing Gallery Start -->
                <div class="column vector_conversion">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Vector_Conversion/conversion.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Vector_Conversion/conversion.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Vector_Conversion/convert_hand.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Vector_Conversion/Converting_raster.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Vector_Conversion/Vector_conversion.png')}}" alt="Mountains">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="content">
                                <img src="{{asset('assets/frontEnd/images/sample/Vector_Conversion/Vector_files.png')}}" alt="Mountains">
                            </div>
                        </div>
                    </div>
                    <div class="custom_button text-center ">
                        <a href="{{route('vector.conversion')}}" class="btn btn text-uppercase">Learn More</a>
                    </div>
                </div>
                <!--  Vector-Conversion-Editing Gallery End -->
            </div>
            <!-- Service Gallery Start -->
        </div>
        <hr>
    </div>
</section>
<!--==** Sample Section End **==-->

<!--==** Sample-Article Section Start **==-->
<section id="sample_article">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5 text-center">
        <h1>Designer Country, an outsourcing graphic design studio, situated in a developing country</h1>
        <p class="pt-col-2 pt-sm-2 pt-md-3 pt-lg-4 pt-xl-4">Bangladesh where the manpower is easier than this of
            developed country. Beacuse of an easier manpower we are able to provide design service in your expected
            quality for an affordable rate. We must ensure you the security of imagess with a good confidence asif
            the the price is not high. Besides a big discount must be given to you for bulk imagess. our rates are
            perfect for us and so they prove our reliability. Our editing quality is proficent and impressive that
            always makes us interest to acquire an expected price from our clients. We believe in making the dream
            of our clients fulfill. We present us for our clients satisfication in their expected way. We are very
            active in our work and always try our best to make the client work better quality. So we always believe
            in our service price is always just and fair on the market place of the graphic design world.</p>
    </div>
</section>
<!--==** Sample-Article Section End **==-->

<!--==** Sample-card Section Start **==-->
@include ('frontEnd.layouts.sample_card')
<!--==** Sample-card Section End **==-->

<!--==** Tag Section Start **==-->
@include ('frontEnd.layouts.tag')
<!--==** Tag Section End **==-->
@endsection

@section ('js')
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
@endsection
