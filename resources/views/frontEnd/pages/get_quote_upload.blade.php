@extends ('frontEnd.layouts.master')
@section ('title', 'Get-Quote-Upload')
@section ('css')
<style type="text/css">
.file-upload a{
    text-decoration: none;

}

</style>
@endsection
@section ('content')

<!--==** File Upload Section End **==-->
<section id="file_upload_message">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="row">
            <div class="col-md-10 offset-md-1 pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
                <div class="">
                    <h2>Hello {{ Session::get('name')}} !</h2>
                    <h5 class="pt-3"><b>Upload Your Images</b></h5>
                    <p>To complete your quote request, please upload a few of your images so we can base the complexity
                        and
                        provide you an accurate quote.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==** File Upload Section End **==-->

<!--==** File Upload Body Section Start **==-->
<section id="file_upload_body">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="row file-upload">
            <div class="col-md-10 offset-md-1">
                <form action="#" method="#">
                    <div class="card" type="file">
                        <div class="card-header">
                            <div class="cart-title">
                                <h3>Upload sample image(s)*</h3>
                                You can upload the following file types: JPG (preferred), PSD, TIFF, PNG, NEF, RAW, CR2,
                                DNG, PDF
                            </div>
                        </div>
                        <a href="https://designercountry.wetransfer.com/">
                            <div class="card-body dropzone dz-clickable text-center">
                                <h5 class="py-4"><i class="fas fa-plus-circle" style="font-size: 50px;"></i> <span style="font-size: 30px;">Add Your Images</span></h5>
                            </div>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--==** File Upload Body Section End **==-->

@endsection
