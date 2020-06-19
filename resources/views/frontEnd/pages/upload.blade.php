@extends ('frontEnd.layouts.master')
@section ('title', 'Best Photo Editing Services | Photo Retouching')
@section ('css')
<style type="text/css">

</style>
@endsection
@section ('content')

<!--==** Upload Section Start **==-->
<section id="upload">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="sample-head">
            <h1 class="py-3 text-center">Start a Project with Designer Country</h1>
        </div>
        <hr>
        <div class="sample-body pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
            <div class="row">
                <div class="col-md-6 col-lg-8 col-xl-8">
                    <h3 class="pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">File Upload Instruction </h3>
                    <p>You may upload your images to us via We Transfer, Drop Box, FTP or you may see the links of them
                        beside
                        here. Please after uploading the images, write down the instructions clearly with the time
                        limitation
                        noted that for rush image processing. You need not to pay us advance. We have the Capacity to
                        deliver the
                        completed images with 2 hours at least.
                        To make all kinds of photos editing, you need not to upload the images in different places, we
                        are ready
                        to receive your projects, at least 25 minutes we may take to reply you for your project
                        confirmation. Have
                        you rush work? No problem, deliver us, we have the best working ability to make your photo
                        Qualified based
                        photo editing in your expected area.</p>
                        
                </div>
                <div class="upload-file col-md-6 col-lg-4 col-xl-4">
                    <h3 class="pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">Upload Files</h3>
                    <div class="custom_button text-center pt-0">
                        <a href="https://designercountry.wetransfer.com/" target="_blank" class="btn btn-block"><i class="fas fa-paper-plane mr-2"></i>We Transfer</a>
                        <a href="https://designercountry.wetransfer.com/" target="_blank" class="btn btn-block"><i class="fab fa-dropbox mr-2"></i>Drop Box</a>
                        <a href="https://designercountry.wetransfer.com/" target="_blank" class="btn btn-block"><i class="fas fa-images text-center mr-2"></i>FTP</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="custom_button text-center py-md-5 py-sm-3 py-xs-2">
            <div class="row py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
                <div class="col-md-8 offset-md-2">
                    <h2 class="pb-1">Have a Project? </h2>
                    <p class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Not finding what you are looking for? We welcome you to try our service free of
                        charge.</p>
                    <a href="{{route('contact')}}" class="btn btn text-uppercase">contact Support</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==** Upload Section End **==-->

@endsection
