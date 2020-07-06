@extends('app')
@section('header_content')
    <!--Get Quote Model Popup-->
    <div class="animated-modal hidden quote-content" id="animatedModal">
        <!--Heading-->
        <div class="heading-area pb-2 mx-570">
            <h2 class="title mt-2">New <span class="alt-color js-rotating"> Sign Up</span></h2>
            <span class="sub-title">The #1 site for both photo editing AND design</span><br>
            <a href="">Already have an account? Log in</a>
        </div>
        <!--Contact Form-->
        <form class="contact-form" method="post" action="{{route('user-registration')}}">
            @csrf
            <div class="row">
                <!--Result-->
                <div class="col-12" id="quote_result"></div>
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="facebook_login">
                            <a href="{{route('login.social',['social' => 'facebook'])}}">
                                <div class="src-core-components--facebook_button-facebook_button-3wHBk">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M15 3a12 12 0 1 0 12 12A12 12 0 0 0 15 3z" fill="#1877f2"></path><path d="M19.671 18.469L20.203 15h-3.328v-2.251a1.734 1.734 0 0 1 1.956-1.874h1.513V7.922a18.453 18.453 0 0 0-2.686-.234c-2.741 0-4.533 1.66-4.533 4.668V15h-3.047v3.469h3.047v8.385a12.127 12.127 0 0 0 3.75 0V18.47z" fill="#fff"></path></svg>
                                    <span>Log in with Facebook</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="facebook_login">
                        <div data-name="google-button" class="src-core-components--google_button-google_button-3POoC">
                            <a href="{{route('login.social',['social' => 'google'])}}">
                                <div data-name="google-button" class="src-core-components--google_button-google_button-3POoC">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M15 7.64a6.65 6.65 0 0 1 4.64 1.787l3.387-3.307A11.53 11.53 0 0 0 15 3 11.991 11.991 0 0 0 4.28 9.613l3.88 3.014A7.254 7.254 0 0 1 15 7.64z" fill="#db4437" fill-rule="evenodd"></path><path d="M26.52 15.267a10.28 10.28 0 0 0-.253-2.454H15v4.454h6.613a5.865 5.865 0 0 1-2.453 3.893l3.787 2.933a11.733 11.733 0 0 0 3.573-8.826z" fill="#4285f4" fill-rule="evenodd"></path><path d="M8.173 17.373a7.387 7.387 0 0 1-.4-2.373 7.763 7.763 0 0 1 .387-2.373L4.28 9.613a11.974 11.974 0 0 0 0 10.774l3.893-3.014z" fill="#f4b400" fill-rule="evenodd"></path><path d="M15 27a11.437 11.437 0 0 0 7.947-2.907L19.16 21.16a7.102 7.102 0 0 1-4.16 1.2 7.224 7.224 0 0 1-6.827-4.987l-3.88 3.014A11.971 11.971 0 0 0 15 27z" fill="#0f9d58" fill-rule="evenodd"></path><path fill="none" d="M3 3h24v24H3V3z"></path></svg>
                                    <span>Log in with Google</span>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
                <!--Left Column-->
                <div class="col-md-12">
                    <br>
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="email" placeholder="Email" required=""
                               type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="password" placeholder="Password" required=""
                               type="password">
                    </div>

                </div> <!--Button-->
                <div class="col-md-12">

                    <div class="form-check">
                        <label class="checkbox-lable">Email me about PicMonkey news & features
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>

                    <button class="btn btn-large btn-rounded btn-blue btn-hvr-pink"
                       id="quote_submit_btn">Create My Account
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
        </form>
    </div>
@endsection
@section('content')
    <!--Banner Start-->
    <section class="page-title cursor-light">
    </section>
    <!--Banner End-->
    <style type="text/css">
        .page-title{
            padding: 0px 0px 130px;
        }
        .facebook_login {
            padding: 6px 29px;
            border: 1px solid;
            margin: 5px 0px;
        }
    </style>

    <!--Contact Start-->
    <section class="contact-us" id="contact">

        <div class="container">

            <div class="row align-items-top">

                <div class="col-lg-3"></div>

                <div class="col-lg-6 mt-4 pt-3 mt-lg-0 pt-lg-0 wow fadeInLeft">
                    <!--Heading-->
                    <div class="heading-area pb-2" style="text-align: center;">
                        @if(count($errors)>0)
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger"  style="margin-top: 10px; margin-left: 10px;">
                                    {{$error}}
                                </div>
                            @endforeach
                        @endif
                        @if(session('failure'))
                            <div class="alert alert-danger" style="margin-top: 10px; margin-left: 10px;">
                                {{session('failure')}}
                            </div>
                        @endif
                        <h2>Log in</h2>
                        <p >Log in like you’ve never signed in before. Type that password with passion and intent! Don’t have an account? <a data-animation-duration="500" data-fancybox data-src="#animatedModal" style="color: blue">Sign Up.</a></p>
                    </div>
                    <!--Contact Form-->
                    <form class="contact-form" method="post" action="{{route('user-login')}}">
                        @csrf
                        <div class="row">
                            <!--Result-->
                            <div class="col-12" id="result"></div>
                            <div class="col-md-12">
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="facebook_login">
                                            <a href="{{route('login.social',['social' => 'facebook'])}}">
                                                <div class="src-core-components--facebook_button-facebook_button-3wHBk">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M15 3a12 12 0 1 0 12 12A12 12 0 0 0 15 3z" fill="#1877f2"></path><path d="M19.671 18.469L20.203 15h-3.328v-2.251a1.734 1.734 0 0 1 1.956-1.874h1.513V7.922a18.453 18.453 0 0 0-2.686-.234c-2.741 0-4.533 1.66-4.533 4.668V15h-3.047v3.469h3.047v8.385a12.127 12.127 0 0 0 3.75 0V18.47z" fill="#fff"></path></svg>
                                                    <span>Log in with Facebook</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="facebook_login">
                                            <a href="{{route('login.social',['social' => 'google'])}}">
                                                <div data-name="google-button" class="src-core-components--google_button-google_button-3POoC">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><path d="M15 7.64a6.65 6.65 0 0 1 4.64 1.787l3.387-3.307A11.53 11.53 0 0 0 15 3 11.991 11.991 0 0 0 4.28 9.613l3.88 3.014A7.254 7.254 0 0 1 15 7.64z" fill="#db4437" fill-rule="evenodd"></path><path d="M26.52 15.267a10.28 10.28 0 0 0-.253-2.454H15v4.454h6.613a5.865 5.865 0 0 1-2.453 3.893l3.787 2.933a11.733 11.733 0 0 0 3.573-8.826z" fill="#4285f4" fill-rule="evenodd"></path><path d="M8.173 17.373a7.387 7.387 0 0 1-.4-2.373 7.763 7.763 0 0 1 .387-2.373L4.28 9.613a11.974 11.974 0 0 0 0 10.774l3.893-3.014z" fill="#f4b400" fill-rule="evenodd"></path><path d="M15 27a11.437 11.437 0 0 0 7.947-2.907L19.16 21.16a7.102 7.102 0 0 1-4.16 1.2 7.224 7.224 0 0 1-6.827-4.987l-3.88 3.014A11.971 11.971 0 0 0 15 27z" fill="#0f9d58" fill-rule="evenodd"></path><path fill="none" d="M3 3h24v24H3V3z"></path></svg>
                                                    <span>Log in with Google</span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <br>
                            </div>
                            <!--Left Column-->
                            <div class="col-md-12">
                                <div class="form-group">
                                    <input class="form-control" id="your_email" name="email" placeholder="Email" required=""
                                           type="email">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" id="your_name" name="password" placeholder="Password" required=""
                                           type="password">
                                </div>
                                <a href="{{route('change-password')}}" style="color: blue">Forgot your password?</a>
                            </div>
                            <!--Button-->
                            <div class="col-md-12">
                                <button style="width: 100%" class="btn btn-large btn-rounded btn-purple btn-hvr-blue d-block mt-4"
                                   id="submit_btn" type="submit">Login
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
                    </form>
                </div>
                <div class="col-lg-3"></div>
            </div>
        </div>
    </section>
    <!--Contact End-->
@endsection
