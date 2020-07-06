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
    <!--Banner Start-->
    <section class="page-title cursor-light">
        <!-- Pattern Layers -->
        <div class="pattern-layers">
            <div class="layer-one"></div>
            <div class="layer-two"></div>
        </div>
        <div class="auto-container">
            <h2 class="hide-cursor">Feature</h2>
            <ul class="page-breadcrumb link">
                <li><a href="javascript:void(0);"><span class="icon fas fa-home"></span> home</a></li>
                <li>Feature</li>
            </ul>
        </div>
    </section>
    <!--Banner End-->

    <section class="pb-0" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInRight" style="visibility: visible; animation-name: fadeInLeft;">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{asset('_landing/img/vector-art-4.png')}}">
                        &lt;
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <!-- <span class="sub-title">We are megaone company</span> -->
                        <h2 class="title">PicMonkey <span class="alt-color js-rotating morphext"><span class="flipInX">Features</span></span></h2>
                        <p class="para">Easily create images that attract eyeballs and get results.</p>
                        <ul>
                            <li>Edit photos</li>
                            <li>Create designs</li>
                            <li>Touch up portraits</li>
                        </ul>
                        <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">
                            Start a Free trial
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
                <br><br> <br><br> <br><br>
            </div>
        </div>
    </section>

    <section class="pb-0" id="about-us">
        <div class="container">
            <div class="row">

                <div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <h3>Photo editing</h3>

                        <ul>
                            <li>Dozens of effects and filters</li>
                            <li>Layer and mask images</li>
                            <li>Add and modify text</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <h3>Design</h3>

                        <ul>
                            <li>Business cards, ads, logos</li>
                            <li>Announcements, invites, postcards</li>
                            <li>Add text, graphics, and watermarks</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <h3>Design assets</h3>

                        <ul>
                            <li>Over 3,000 graphics</li>
                            <li>Over 200 fonts</li>
                            <li>Over 100 textures</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <h3>Templates</h3>

                        <ul>
                            <li>Over 2,400 customizable templates</li>
                            <li>Over 70 pre-set blank canvases</li>
                            <li>Create multi-photo designs</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <h3>Touch up</h3>

                        <ul>
                            <li>Change eye and hair color</li>
                            <li>Whiten teeth, remove wrinkles</li>
                            <li>Over a dozen enhancement tools</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInLeft" style="visibility: visible; animation-name: fadeInRight;">
                    <div class="heading-area">
                        <h3>Cloud storage</h3>

                        <ul>
                            <li>Changes auto-saved as you work</li>
                            <li>Access from desktop and mobile</li>
                            <li>Organize images with folders</li>
                        </ul>
                    </div>
                </div>



                <br><br> <br><br> <br><br>
            </div>
        </div>
    </section>

    <!--About Us-->
    <section class="pb-0" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="heading-area">
                        <!-- <span class="sub-title">We are megaone company</span> -->
                        <br><br>
                        <h2 class="title">Craft stunning designs in no <span class="alt-color js-rotating"> time, ideas</span></h2>
                        <p class="para">Get work done like, yesterday. Make anything from a company logo to a multi-photo collage.</p>
                        <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">GET STARTED NOW
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
                <div class="col-lg-6 wow fadeInRight">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{asset('_landing/img/stunning-designs.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--About Us End-->


    <!--About Us-->
    <section class="pb-0" id="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 wow fadeInLeft">
                    <div class="half-img mt-5 pt-4 mt-lg-0 pt-lg-0">
                        <img alt="vector" src="{{asset('_landing/img/primo-photo-effects.jpg')}}">
                        <br><br>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInRight">
                    <div class="heading-area">
                        <!-- <span class="sub-title">We are megaone company</span> -->
                        <h2 class="title">Make good <span class="alt-color js-rotating"> Photo </span> even better</h2>
                        <p class="para">Editing photos for your business or personal brand has never been easier.</p>
                        <a class="btn btn-large btn-rounded btn-pink btn-hvr-blue mt-3" href="javascript:void(0);">
                            GET STARTED NOW
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
                <br><br> <br><br> <br><br>
            </div>
        </div>
    </section>

    <section class="bg-light" id="blog">
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-area mx-570 pb-lg-5 mb-5">
                        <span class="sub-title">We are megaone company</span>
                        <h2 class="title mb-0">Our <span class="alt-color js-rotating morphext"><span class="animated flipInX">recent news</span></span> will
                            keep
                            everyone updated</h2>
                    </div>
                </div>
            </div>
            <!--Row-->
            <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <!--News Item-->
                <div class="col-lg-4">
                    <div class="news-item">
                        <img alt="image" class="news-img" src="{{asset('_landing/agency/img/blog-news-1.jpg')}}">
                        <div class="news-text-box">
                            <span class="date main-color">October 29, 2020</span>
                            <a href="#"><h4 class="news-title">Web design is fun</h4></a>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                            <a class="author d-flex align-items-center" href="javascript:void(0);">
                                <img alt="image" class="author-img bg-blue" src="{{asset('_landing/agency/img/avatar-1.png')}}">
                                <h5 class="author-name">Hena Sword</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <!--News Item-->
                <div class="col-lg-4">
                    <div class="news-item">
                        <img alt="image" class="news-img" src="{{asset('_landing/agency/img/blog-news-2.jpg')}}">
                        <div class="news-text-box">
                            <span class="date main-color">October 29, 2020</span>
                            <a href="agency/blog-list.html"><h4 class="news-title">Future of websites</h4></a>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                            <a class="author d-flex align-items-center" href="javascript:void(0);">
                                <img alt="image" class="author-img bg-purple" src="{{asset('_landing/agency/img/avatar-2.png')}}">
                                <h5 class="author-name">David Villas</h5>
                            </a>
                        </div>
                    </div>
                </div>
                <!--News Item-->
                <div class="col-lg-4">
                    <div class="news-item">
                        <img alt="image" class="news-img" src="{{asset('_landing/agency/img/blog-news-1.jpg')}}">
                        <div class="news-text-box">
                            <span class="date main-color">October 29, 2020</span>
                            <a href="javascript:void(0);"><h4 class="news-title">Digital marketing</h4></a>
                            <p class="para">Lorem ipsum dolor sit amet consectetur adipiscing elit ipsum dolor sit am...</p>
                            <a class="author d-flex align-items-center" href="javascript:void(0);">
                                <img alt="image" class="author-img bg-pink" src="{{asset('_landing/agency/img/avatar-5.png')}}">
                                <h5 class="author-name">Jhon Walker</h5>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
