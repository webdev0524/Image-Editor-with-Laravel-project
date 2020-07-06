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
        <div class="container">
            <!--Row-->
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="heading-area mx-570 pb-lg-5 mb-5">

                        <h2 class="title mb-0">Account Setting </h2>
                    </div>
                </div>
            </div>
            <!--Row-->

            <style>
                /* Style the tab */
                .tab {
                    overflow: hidden;
                    border-bottom: 1px solid #ccc;
                    /* background-color: #f1f1f1;*/
                }

                /* Style the buttons inside the tab */
                .tab button {
                    background-color: inherit;
                    float: left;
                    border: none;
                    outline: none;
                    cursor: pointer;
                    padding: 14px 16px;
                    transition: 0.3s;
                    font-size: 17px;
                }

                /* Change background color of buttons on hover */
                .tab button:hover {
                    background-color: #ddd;
                }

                /* Create an active/current tablink class */
                .tab button.active {
                    background-color: inherit;
                    color: #03a9f5;
                    border-bottom: 2px solid;
                }

                /* Style the tab content */
                .tabcontent {
                    display: none;
                    padding: 6px 12px;

                    border-top: none;
                }

                /* Style the close button */
                .topright {
                    float: right;
                    cursor: pointer;
                    font-size: 28px;
                }

                .topright:hover {color: red;}
            </style>


            <div class="tab">
                <button class="tablinks" onclick="openCity(event, 'general')" id="defaultOpen" style="margin-left: 41%;">GENERAL</button>
                <button class="tablinks" onclick="openCity(event, 'billing')">BILLING</button>

            </div>

            <div id="general" class="tabcontent"><br>
                <form method="post" action="{{route('user.update-profile-details')}}" enctype="multipart/form-data" >
                    @csrf
                    <div class="row wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                        <div class="col-md-3">
                            <img src="{{asset('storage/Profile_Picture/'.Auth::user()->profile_picture)}}" style="border-radius: 200px;width: 74%"><br><br>
                            <input name="profile_photo" class="btn btn-large btn-rounded btn-blue btn-hvr-pink" type="file"
                               id="quote_submit_btn" style="text-align: center; ">
                                <div class="btn-hvr-setting">
                                    <ul class="btn-hvr-setting-inner">
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                        <li class="btn-hvr-effect"></li>
                                    </ul>
                                </div>
                            </input>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input class="form-control" id="your_name" name="first_name" value="{{Auth::user()->first_name}}" placeholder="First Name"  type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="your_name" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Last Name"  type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="your_name" name="job_title" value="{{Auth::user()->job_title}}" placeholder="Job Title"  type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="your_name" name="email" value="{{Auth::user()->email}}" placeholder="Email" required="" type="email" disabled>
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="your_name"  name="password" placeholder="*****" required="" type="password" disabled >
                            </div>
                            <button class="btn btn-large btn-rounded btn-blue btn-hvr-pink" type="submit"
                               id="quote_submit_btn">Update Profile
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
            <div id="billing" class="tabcontent">

                <div class="col-md-12">
                    <br>
                    <div class="row">
                        <div class="col-md-2">
                        </div>
                        <div class="col-md-5">
                            <h2>Your Plan</h2>
                            <b>Get PicMonkey for as little as $7.99 USD per month.</b>
                            <p>A Basic subscription lets you download, save, and share all your images. Plus your pics are re-editable when you save them to Hub.</p>
                        </div>
                        <div class="col-md-4"><br><br><a href="" style="color: blue"><b>Subscribe now</b></a>
                        </div>
                    </div>
                </div>
            </div>


            <script>
                function openCity(evt, cityName) {
                    var i, tabcontent, tablinks;
                    tabcontent = document.getElementsByClassName("tabcontent");
                    for (i = 0; i < tabcontent.length; i++) {
                        tabcontent[i].style.display = "none";
                    }
                    tablinks = document.getElementsByClassName("tablinks");
                    for (i = 0; i < tablinks.length; i++) {
                        tablinks[i].className = tablinks[i].className.replace(" active", "");
                    }
                    document.getElementById(cityName).style.display = "block";
                    evt.currentTarget.className += " active";
                }

                // Get the element with id="defaultOpen" and click on it
                document.getElementById("defaultOpen").click();
            </script>







        </div>
    </section>
@endsection
