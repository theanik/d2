@extends ('frontEnd.layouts.master')
@section ('title', 'Product photo editing Services | Designer Country')
@section ('css')
<style type="text/css">

</style>
@endsection
@section ('content')

<!--==** Editing Service Section Start **==-->
<section id="editing_Service">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="editing_service_head  text-center py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
                    <h2 class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Image-Editing Service Pricing</h2>
                    <p>We carefully fulfill every order by hand. Each job is different, and the price varies, too. On a
                        time
                        crunch? Enter a few details below to get a ballpark range instantly.</p>
                </div>
                <hr>
                <div class="editing_service_body py-col-2 py-sm-2 py-md-3 py-lg-4 py-xl-4">
                    <h4 class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">Choose one or more service <sup><strong
                                style="font-size: larger;">*</strong></sup></h4>

                    <form action="{{ route('store.quote') }}" method="POST">
                        @csrf
                        <div class="row pb-col-2 pb-sm-3 pb-md-4 pb-lg-5 pb-xl-5">
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-check py-2">
                                    <label class="check-container" for="check1">Clipping Path
                                        <input type="checkbox" class="form-check-input" id="check1" name="clipping_path">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check2">Multiple Clipping Path
                                        <input type="checkbox" class="form-check-input" id="check2" name="multi_clipping_path">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check3">Image Masking
                                        <input type="checkbox" class="form-check-input" id="check3" name="image_masking">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check4">Photo Retouching
                                        <input type="checkbox" class="form-check-input" id="check4" name="photo_retouching">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-check py-2">
                                    <label class="check-container" for="check5">Ghost Mannequin
                                        <input type="checkbox" class="form-check-input" id="check5" name="ghost_mannequin">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check6">Drop Shadow
                                        <input type="checkbox" class="form-check-input" id="check6" name="dropdown_shadow">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check7">Reflection Shadow
                                        <input type="checkbox" class="form-check-input" id="check7" name="reflection_shadow">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check8">Color Variants
                                        <input type="checkbox" class="form-check-input" id="check8" name="color_variants">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12 col-md-6 col-lg-4 col-xl-4">
                                <div class="form-check py-2">
                                    <label class="check-container" for="check9">Vactor Convartion
                                        <input type="checkbox" class="form-check-input" id="check9" name="vactor_convartion">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check10">Brightness Enhencement
                                        <input type="checkbox" class="form-check-input" id="check10" name="brightness_enhencement">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check11">Ecommerce-Image Editing
                                        <input type="checkbox" class="form-check-input" id="check11" name="ecomerce_image_editing">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="form-check py-2">
                                    <label class="check-container" for="check12">Need your image restarted?
                                        <input type="checkbox" class="form-check-input" id="check12" name="image_restarted">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>                                
                            </div>
                        </div>

                        @if(Session::has('msg'))
                            <div class="alert alert-danger alert-block">
                            <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times" style="font-size: 15px;"></i></button>
                            <strong> {{ Session::get('msg') }}</strong>
                            </div>
                        @endif

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="fname" class="pb-2"><strong>Full Name:</strong></label>
                                    <input  type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ session('name')??"" }}">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email" class="pb-2"><strong>Email Address:</strong></label>
                                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email"  value="{{ session('email')??"" }}">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="quantity" class="pb-2"><strong>Quantity:</strong></label>
                                    <input type="number" class="form-control  @error('quantity') is-invalid @enderror" id="quantity" name="quantity" min="1" max="99999"  value="{{ session('quantity')??"" }}">
                                    @error('quantity')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group custom-select2">
                                    <label for="sellection" class="pb-2"><strong>Desired Turnaround
                                            Time:</strong></label>
                                    <select class="form-control  @error('sellection') is-invalid @enderror" id="sellection" name="sellection">
                                        <option value="" disabled>Select Time Duration :</option>
                                        <option value="3 Hours">3 Hours</option>
                                        <option value="6 Hours">6 Hours</option>
                                        <option value="12 Hours">12 Hours</option>
                                        <option value="18 Hours">18 Hours</option>
                                        <option value="24 Hours">24 Hours</option>
                                        <option value="36 Hours">36 Hours</option>
                                        <option value="48 Hours">48 Hours</option>
                                        <option value="60 Hours">60 Hours</option>
                                        <option value="72 Hours">72 Hours</option>
                                    </select>
                                    @error('sellection')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="comment" class="pb-2"><strong>Details Instraction:</strong></label>
                                    <textarea class="form-control @error('details_instraction') is-invalid @enderror" rows="6" id="comment" name="details_instraction">{{ session('details_instraction')??"" }}</textarea>
                                    @error('details_instraction')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="custom_button text-right p-0">
                                    <button type="submit" class="btn btn submit">SUBMIT</button>
                                </div>
                                <p class="text-right pt-2">Next, you will have the option to upload sample image(s).</p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==** Editing Service Section End **==-->

@endsection
@section('js')

@endsection
