@extends('app')
@section('header_content')
    <!--Get Quote Model Popup-->
    <div class="animated-modal hidden quote-content" id="animatedModal">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <span class="sub-title">We are megaone company</span>
            <h2 class="title mt-2">Lets start your <span class="alt-color js-rotating">project, website</span></h2>
        </div>
        <!--Contact Form-->
        <form class="contact-form">
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>

                <!--Left Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="quote_name" placeholder="Name" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_contact" name="quote_contact" placeholder="Contact #" required=""
                               type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_type" name="quote_type" placeholder="Project type" required=""
                               type="text">
                    </div>
                </div>

                <!--Right Column-->
                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_email" name="quote_email" placeholder="Email" required=""
                               type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_address" name="quote_address" placeholder="City / Country"
                               required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_budget" name="quote_budget" placeholder="Budget" required=""
                               type="text">
                    </div>
                </div>

                <!--Full Column-->
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="quote_message"
                                  name="quote_message" placeholder="Please explain your project in detail."></textarea>
                    </div>
                </div>

                <!--Button-->
                <div class="col-md-12">

                    <div class="form-check">
                        <label class="checkbox-lable">Contact by phone ins preffered
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <a class="btn btn-large btn-rounded btn-blue btn-hvr-pink" href="javascript:void(0);"
                       id="quote_submit_btn">Send Message
                        <div class="btn-hvr-setting">
                            <ul class="btn-hvr-setting-inner">
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                                <li class="btn-hvr-effect"></li>
                            </ul>
                        </div>
                    </a>
                </div>

            </div>
        </form>
    </div>
@endsection
@section('content')

    <!--Header End-->
    <style type="text/css">
        .page-title{
            padding: 0px 0px 130px;
        }
    </style>
    <!--Banner Start-->
    <section class="page-title cursor-light">
        <!-- Pattern Layers -->
        <!--   <div class="pattern-layers">
              <div class="layer-one"></div>
              <div class="layer-two"></div>
          </div>
          <div class="auto-container">
              <h2 class="hide-cursor">Pricing</h2>
              <ul class="page-breadcrumb link">
                  <li><a href="javascript:void(0);"><span class="icon fas fa-home"></span> home</a></li>
                  <li>Pricing</li>
              </ul>
          </div> -->
    </section>
    <!--Banner End-->

    <section class="bg-light contact-form" id="blog" >
        <form action="{{route('submit-new-password')}}" method="post">
            @csrf
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="heading-area mx-570 pb-lg-5 mb-5">

                            <h2 class="title mb-0">Change Password</h2>
                        </div>
                    </div>
                </div>
            <!--Row-->
                <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <input class="form-control" id="your_name" name="new_password" placeholder="New Password" required="" type="Password">
                        </div>
                        <div class="form-group">
                            <input class="form-control" id="your_name" name="token" value="{{$token}}" hidden>
                        </div>

                        <button class="btn btn-large btn-rounded btn-blue btn-hvr-pink" type="submit"
                                id="quote_submit_btn"> Submit
                            <div class="btn-hvr-setting">
                                <ul class="btn-hvr-setting-inner">
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                    <li class="btn-hvr-effect"></li>
                                </ul>
                            </div>
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection
