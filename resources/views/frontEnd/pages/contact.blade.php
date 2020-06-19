@extends ('frontEnd.layouts.master')
@section ('title', 'Professional Photo Editing | Clipping Path Ghost Manipulation')
@section ('css')
<style type="text/css">




</style>

@endsection
@section ('content')

<!--==** Contact Us Section Start **==-->
  <section id="contact_us">
    <div class="container pt-col-2 pt-sm-3 pt-md-4 pt-lg-5 pt-xl-5">
        <div class="contact-head text-center pb-md-4 pb-sm-3 pb-xs-2">
            <h1 class="py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">Feel to free contact us becase we are always active for you!</h1>
            <h4 class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4">We wold give to like you any support to achieve your setecfaction.</h4>
            <hr>
        </div>
        <div class="contact-body">
          @if($message = Session::get('success'))
            <div class="alert alert-success alert-block">
              <button type="button" class="close" data-dismiss="alert"><i class="fas fa-times" style="font-size: 15px;"></i></button>
              <strong> {{ $message }}</strong>
            </div>
          @endif

            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12">
                    <form id="ContactUs"action="{{ route('contact.send') }}" class="" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group pb-sm-2 pb-xs-1">
                                    <label for="name" class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><b>Name :</b></label>
                                    <input  type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="Enter Your Name"> 
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group pb-md-3 pb-sm-2 pb-xs-1">
                                    <label for="email" class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><b>Email :</b></label>
                                    <input  type="email" name="email" class="form-control @error('name') is-invalid @enderror" id="email" placeholder="Enter Your Email">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                    </span>
                                  @enderror
                                </div>
                            </div>
                        </div>
                        <div class="row pb-2">
                          <div class="col-md-12">
                                  <div class="form-group pb-sm-2 pb-xs-1">
                                      <label for="subject" class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><b>Subject :</b></label>
                                      <input  type="subject" name="subject" class="form-control  @error('subject') is-invalid @enderror" id="subject"
                                          placeholder="Enter Your Subject">
                                          @error('subject')
                                          <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                          </span>
                                        @enderror
                                  </div>
                              </div>
                          </div>
                        <div class="col-12">
                            <label for="message" class="pb-col-2 pb-sm-2 pb-md-3 pb-lg-4 pb-xl-4"><b>Write Your Message :</b></label>
                            <textarea class="pl-2 pt-2 form-control @error('message') is-invalid @enderror" name="message"  placeholder="Write Your Message" rows="8" id="message" type="text"
                             spellcheck="false" class="border-rounded"></textarea>
                              @error('message')
                                  <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                        </div>
                        <div class="row pt-4">
 
                            <div class="col-md-12">
                                <div
                                    class="custom_button text-lg-right text-md-center text-sm-center text-xs-center pt-5 ">
                                    <input type="submit" class="btn btn submit" value="Send">
                                </div>


                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        </div>
    </div>
  </section>
<!--==** Contact Us Section Start **==-->
<!--==** office location Section Start **==-->
  <section id="office_location">
    <div class="container py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
        <div class="head text-center">
            
            <span style="width: 60px; border-bottom: 3px solid #19BEB9; padding-bottom: 25px;"><i class="fas fa-home"></span></i>
            <h2 class="text-center pt-5">Our Office</h2>
            <div class="text-center"></div>
        </div>
        <div class="body py-col-2 py-sm-3 py-md-4 py-lg-5 py-xl-5">
            <div class="row">
                <div class="col-xl-10 offset-xl-1 col-lg-10 offset-lg-1 col-md-10 offset-md-1 col-12 ">
                    <div class="row">
                        <div class="col-md-6 pt-md-3 pt-sm-2 pt-xs-1">
                            <ul class="list-group">
                                <li class="list-group-item"><span><i class="fas fa-map-marker-alt pr-2"></i> <a
                                            href="https://www.google.com/maps/place/Designer+Country/@23.7507683,90.3887027,1058m/data=!3m1!1e3!4m5!3m4!1s0x3755b8bb54f6ebcd:0xe7dfdca493b15269!8m2!3d23.7507272!4d90.3887654" target="_blank">Dhaka, Bangladesh</a></span></li>
                                <li class="list-group-item"><span><i class="fab fa-whatsapp pr-2"></i><a
                                            href="https://www.whatsapp.com/" target="_blank">+8801914106753</a></span></li>
                                <li class="list-group-item"><span><i class="fas fa-envelope pr-2"></i><a
                                            href="https://mail.google.com/" target="_blank">designercountry@gmail.com</a></span></li>
                                <li class="list-group-item"><span><i class="fas fa-link pr-2"></i><a
                                            href="{{route('index')}}">www.designercountry.com</a></span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 pt-md-3 pt-sm-2 pt-xs-1">
                            <ul class="list-group">
                                <li class="list-group-item"><span><i class="fas fa-map-marker-alt pr-2"></i> <a
                                            href="https://wego.here.com/italy/naples/street-square/designer-country--e-eyJuYW1lIjoiRGVzaWduZXIgQ291bnRyeSIsImFkZHJlc3MiOiJQaWF6emEgR2FyaWJhbGRpIDMyLCBOYXBvbGksIDgwMTAwIFJvbWUsIEl0YWx5IiwibGF0aXR1ZGUiOjQwLjg1MjE4MDE2MDUxNCwibG9uZ2l0dWRlIjoxNC4yNjgwNDYyNDg4NjYsInByb3ZpZGVyTmFtZSI6ImZhY2Vib29rIiwicHJvdmlkZXJJZCI6OTc2NDg5NjQ5MTIwMDYzfQ==?map=40.85218,14.26805,15,normal&fb_locale=en_US" target="_blank">Napoli, Italy</a></span></li>
                                <li class="list-group-item"><span><i class="fab fa-whatsapp pr-2"></i><a href="https://www.whatsapp.com/" target="_blank">+393512070936</a></span></li>
                                <li class="list-group-item"><span><i class="fas fa-envelope pr-2"></i><a
                                            href="https://mail.google.com/" target="_blank">Info@designercountry.com</a></span></li>
                                <li class="list-group-item"><span><i class="fas fa-link pr-2"></i><a
                                            href="{{route('index')}}">www.designercountry.com</a></span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==** office location Section End **==-->
@endsection

@section ('js')

@endsection
