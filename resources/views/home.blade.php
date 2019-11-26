@extends('layouts.app')
@section('content')
@include('partials.messages')
<!-- User Feed -->
<section id="user-feed">

    <!-- Left Side Content -->
    <div class="row">
        <div class="col-12">
            <img src="../../../app-assets/images/gallery/timeline.jpg" class="img-fluid rounded" alt="timeline image">
            <div class="user-data text-center bg-white rounded pb-2 mb-md-2">
                <img src="../../../app-assets/images/portrait/large/avatar-l-1.png" class="img-fluid rounded-circle width-150 profile-image shadow-lg border border-3" alt="timeline image">
                <h4 class="mt-1 mb-0">Elaine Dreyfuss</h4>
                <p class="m-0">San Francisco, CA</p>
            </div>
            <nav class="navbar navbar-expand-lg nav-margin">
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item px-2 active">
                            <a class="nav-link" href="#">Home</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">Friends</a>
                        </li>
                        <li class="nav-item px-2">
                            <a class="nav-link" href="#">About</a>
                        </li>
                    </ul>
                    <div class="navbar-text">
                        <ul class="navbar-nav">
                            <li class="nav-item px-2">
                                <a class="nav-link" href="#">Photos</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="#">Videos</a>
                            </li>
                            <li class="nav-item px-2">
                                <a class="nav-link" href="#">More</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Profile Intro -->
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-12">
            <div class="card shadow-none">
                <div class="card-body">
                    <h5 class="card-title">Profile Intro</h5>
                    <hr>
                    <div class="about-me mt-2">
                        <h5 class="card-title mb-1">About Me</h5>
                        <p class="font-small-3">Hi, I’m Elaine Dreyfuss, I’m 26 &amp; I work as a Digital Designer.</p>
                    </div>
                    <div class="favourite-show mt-2">
                        <h5 class="card-title mb-1">Favourite TV Shows</h5>
                        <p class="font-small-3">Breaking Good, RedDevil, People of Interest, The Running Dead, Found,
                            American Guy.</p>
                    </div>
                    <div class="favourite-band mt-2">
                        <h5 class="card-title mb-1">Favourite Music Bands</h5>
                        <p class="font-small-3">Arctic Monkeys, Bloc Party, People of Interest, The Running Dead,
                            Found, American Guy.</p>
                    </div>
                    <div class="favourite-food mt-2">
                        <h5 class="card-title mb-1">Favourite Food</h5>
                        <p class="font-small-3">Pizza, burger, Guacamole, Tomato Salsa, Enchiladas, Guilt-Free Chilli</p>
                    </div>
                </div>
            </div>
            <!-- friends-list -->
            <div class="card shadow-none mt-2">
                <div class="card-body">
                    <div class="friends-list">
                        <h5 class="card-title mb-1">Friends List</h5>
                        <hr>
                        <span>
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-1.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-2.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-3.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-4.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-5.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-6.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-7.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                            <img src="../../../app-assets/images/portrait/medium/avatar-m-8.png" alt="" class="img-fluid rounded-circle width-30 mrb-5px">
                        </span>
                    </div>
                </div>
            </div>
            <!-- My Spotify Playlist -->
            <div class="card shadow-none mt-2">
                <div class="card-body">
                    <div class="spotify-playlist">
                        <h5 class="card-title mb-1">My Spotify Playlist</h5>

                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="../../../app-assets/images/gallery/1.jpg" alt="" class="img-fluid width-30">
                            </div>
                            <div class="col-6 font-small-3 pl-0">
                                <h5 class="m-0">All Around</h5>
                                <p class="m-0">justin bieber</p>
                            </div>
                            <div class="col-3 p-0">
                                <p>4:56</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="../../../app-assets/images/gallery/2.jpg" alt="" class="img-fluid width-30">
                            </div>
                            <div class="col-6 font-small-3 pl-0">
                                <p class="m-0">All I Want</p>
                                <p class="m-0">justin bieber</p>
                            </div>
                            <div class="col-3 p-0">
                                <p>4:56</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="../../../app-assets/images/gallery/3.jpg" alt="" class="img-fluid width-30">
                            </div>
                            <div class="col-6 font-small-3 pl-0">
                                <p class="m-0">All Matters</p>
                                <p class="m-0">justin bieber</p>
                            </div>
                            <div class="col-3 p-0">
                                <p>4:56</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="../../../app-assets/images/gallery/4.jpg" alt="" class="img-fluid width-30">
                            </div>
                            <div class="col-6 font-small-3 pl-0">
                                <p class="m-0">As Long</p>
                                <p class="m-0">justin bieber</p>
                            </div>
                            <div class="col-3 p-0">
                                <p>4:56</p>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col-3">
                                <img src="../../../app-assets/images/gallery/5.jpg" alt="" class="img-fluid width-30">
                            </div>
                            <div class="col-6 font-small-3 pl-0">
                                <p class="m-0">Beauty Beat</p>
                                <p class="m-0">justin bieber</p>
                            </div>
                            <div class="col-3 p-0">
                                <p>4:56</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Twitter Feed -->
            <div class="card shadow-none mt-2">
                <div class="card-body">
                    <div class="twitter-feed">
                        <h5 class="card-title mb-1">Twitter Feed</h5>
                        <hr>
                        <div class="row mt-3">
                            <div class="col-3">
                                <img src="../../../app-assets/images/icons/twitter-avatar1.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-9 font-small-3 pl-0">
                                <p class="m-0">I just submitted this instagram Redesign concept</p>
                                <p class="m-0">@james_spiegelOK</p>
                            </div>
                            <div class="col-12 font-small-3 mt-1">
                                <p class="primary m-0">#Dowboy #profile</p>
                                <p>2 hours ago</p>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="row mt-3">
                            <div class="col-3">
                                <img src="../../../app-assets/images/icons/twitter-avatar1.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-9 font-small-3 pl-0">
                                <p class="m-0">I just submitted this instagram Redesign concept</p>
                                <p class="m-0">@james_spiegelOK</p>
                            </div>
                            <div class="col-12 font-small-3 mt-1">
                                <p class="primary m-0">#Dowboy #profile</p>
                                <p>2 hours ago</p>
                            </div>
                        </div>
                        <hr class="m-0">
                        <div class="row mt-3">
                            <div class="col-3">
                                <img src="../../../app-assets/images/icons/twitter-avatar1.png" alt="" class="img-fluid">
                            </div>
                            <div class="col-9 font-small-3 pl-0">
                                <p class="m-0">I just submitted this instagram Redesign concept</p>
                                <p class="m-0">@james_spiegelOK</p>
                            </div>
                            <div class="col-12 font-small-3 mt-1">
                                <p class="primary m-0">#Dowboy #profile</p>
                                <p>2 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Feed Section -->
        <div class="col-lg-6 col-md-6 col-sm-12">
            <!-- Write Post -->
            <div class="card shadow-none">
                <div class="catd-body">
                    <div class="feed-tabs">
                        <ul class="nav nav-tabs border-0" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link px-2 py-2 px-sm-1 active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class="ft-activity"></i>
                                    Status</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 py-2 px-sm-1" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class="ft-camera"></i>
                                    Multimedia</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link px-2 py-2 px-sm-0" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false"><i class="ft-edit-2"></i>
                                    Blog Post</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab"></div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab"></div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab"></div>
                        </div>
                    </div>
                    <div class="write-post">
                        <div class="form-group">
                            <textarea class="form-control border-0" id="exampleFormControlTextarea1" rows="5"></textarea>
                        </div>
                        <hr class="m-0">
                        <div class="row px-1">
                            <div class="col-6 pt-2">
                                <i class="ft-image ml-1 mr-2 mr-sm-0 h3"></i> <i class="ft-monitor mr-2 mr-sm-0 h3"></i>
                                <i class="ft-map-pin h3"></i>
                            </div>
                            <div class="col-6 pt-1">
                                <button type="button" class="btn btn-primary btn-min-width btn-glow mr-1 mb-1 pull-right">Post
                                    Status</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- User Post 1 -->
            <div class="card shadow-none">
                <div class="catd-body">
                    <div class="row p-2">
                        <div class="col-sm-6">
                            <div class="row">
                                <div class="col-lg-4 col-3">
                                    <img src="../../../app-assets/images/portrait/medium/avatar-m-8.png" alt="" class="img-fluid rounded-circle width-50">
                                </div>
                                <div class="col-lg-8 col-7 p-0">
                                    <h5 class="m-0">Elaine Dreyfuss</h5>
                                    <p>2 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <i class="ft-more-vertical pull-right"></i>
                        </div>
                    </div>
                    <div class="write-post">
                        <div class="col-sm-12 px-2">
                            <p>When searching for videos of a different singer, Scooter Braun, a former marketing
                                executive of So So Def Recordings, clicked on one of Bieber's 2007 videos by</p>
                        </div>
                        <hr class="m-0">
                        <div class="row p-1">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-4 pr-0">
                                        <span><i class="ft-heart h4 align-middle danger"></i> 120</span>
                                    </div>
                                    <div class="col-8 pl-0">
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info">+4 more</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pull-right">
                                    <span class="pr-1"><i class="ft-message-square h4 align-middle"></i> 44</span>
                                    <span class="pr-1"><i class="ft-corner-up-right h4 align-middle"></i> 23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Post 2 -->
            <div class="card shadow-none">
                <div class="catd-body">
                    <div class="row p-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-lg-4 col-3">
                                    <img src="../../../app-assets/images/portrait/medium/avatar-m-9.png" alt="" class="img-fluid rounded-circle width-50">
                                </div>
                                <div class="col-lg-8 col-7 p-0">
                                    <h5 class="m-0">Elaine Dreyfuss</h5>
                                    <p>4 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6">
                            <i class="ft-more-vertical pull-right"></i>
                        </div>
                    </div>
                    <div class="write-post">
                        <div class="col-sm-12 px-2">
                            <p>When searching for videos of a different singer, Scooter Braun, a former marketing
                                executive of So So Def Recordings, clicked on one of Bieber's 2007 videos by</p>
                        </div>
                        <hr class="m-0">
                        <div class="row p-1">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-sm-4 col-3 pr-0">
                                        <span><i class="ft-heart h4 align-middle danger"></i> 120</span>
                                    </div>
                                    <div class="col-sm-8 col-7 pl-0">
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info">+4 more</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pull-right">
                                    <span class="pr-1"><i class="ft-message-square h4 align-middle"></i> 44</span>
                                    <span class="pr-1"><i class="ft-corner-up-right h4 align-middle"></i> 23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- User Post 3 -->
            <div class="card shadow-none">
                <div class="catd-body">
                    <div class="row p-2">
                        <div class="col-6">
                            <div class="row">
                                <div class="col-lg-4 col-3">
                                    <img src="../../../app-assets/images/portrait/medium/avatar-m-8.png" alt="" class="img-fluid rounded-circle width-50">
                                </div>
                                <div class="col-lg-8 col-7 p-0">
                                    <h5 class="m-0">Elaine Dreyfuss</h5>
                                    <p>2 hours ago</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <i class="ft-more-vertical pull-right"></i>
                        </div>
                    </div>
                    <div class="write-post">
                        <div class="col-sm-12 px-2 pb-2">
                            <img src="../../../app-assets/images/gallery/party-flyer.jpg" alt="" class="img-fluid">
                        </div>
                        <hr class="m-0">
                        <div class="row p-1">
                            <div class="col-6">
                                <div class="row">
                                    <div class="col-lg-4 col-3 pr-0">
                                        <span><i class="ft-heart h4 align-middle danger"></i> 120</span>
                                    </div>
                                    <div class="col-lg-8 col-7 pl-0">
                                        <ul class="list-unstyled users-list m-0">
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="John Doe" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-19.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Katherine Nichols" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-18.png" alt="Avatar">
                                            </li>
                                            <li data-toggle="tooltip" data-popup="tooltip-custom" data-original-title="Joseph Weaver" class="avatar avatar-sm pull-up">
                                                <img class="media-object rounded-circle" src="../../../app-assets/images/portrait/small/avatar-s-17.png" alt="Avatar">
                                            </li>
                                            <li class="avatar avatar-sm">
                                                <span class="badge badge-info">+4 more</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="pull-right">
                                    <span class="pr-1"><i class="ft-message-square h4 align-middle"></i> 44</span>
                                    <span class="pr-1"><i class="ft-corner-up-right h4 align-middle"></i> 23</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Birthday Card -->
        <div class="col-lg-3 col-md-12 col-sm-12">
            <div class="card text-white bg-primary mb-3">
                <div class="card-header">
                    <h3><i class="ft-award white"></i> <i class="ft-more-horizontal white pull-right"></i></h3>
                </div>
                <div class="card-body pt-0">
                    <img src="../../../app-assets/images/portrait/medium/avatar-m-4.png" alt="" class="img-fluid rounded-circle width-50">
                    <p>Today is</p>
                    <h3 class="white">Marina Valentine’s Birthday!</h3>
                    <p class="card-text">Some quick example text to build on the card.</p>
                </div>
            </div>
            <!-- Last Photos -->
            <div class="card shadow-none mt-2">
                <div class="card-body">
                    <div class="last-photos">
                        <h5 class="card-title mb-1">Last Photos</h5>
                        <hr>
                        <div class="row">
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-1.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-2.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-3.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-4.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-5.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-6.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-7.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-8.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                            <div class="col-4">
                                <img src="../../../app-assets/images/backgrounds/bg-9.jpg" alt="" class="img-fluid mb-2 rounded">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Last Blog -->
            <div class="card shadow-none mt-2">
                <div class="card-body">
                    <div class="last-blog">
                        <h5 class="card-title mb-1">Last Blog</h5>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <h4>The emergence and growth of blogs</h4>
                                <p class="mt-1">Many blogs provide commentary on a particular subject or topic digital
                                    images.</p>
                                <p class="mt-3">5 hours ago</p>
                                <hr>
                            </div>
                            <div class="col-sm-12">
                                <h4>On 16 February 2011</h4>
                                <p class="mt-1">Many blogs provide commentary on a particular subject or topic digital
                                    images.</p>
                                <p class="mt-3">10 hours ago</p>
                                <hr>
                            </div>
                            <div class="col-sm-12">
                                <h4>With posts written by large numbers</h4>
                                <p class="mt-1">Many blogs provide commentary on a particular subject or topic digital
                                    images.</p>
                                <p class="mt-3">23 hours ago</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Last Video -->
            <div class="card shadow-none mt-2">
                <div class="card-body">
                    <div class="last-video">
                        <h5 class="card-title mb-1">Last Video</h5>
                        <hr>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe src="https://www.youtube.com/embed/fRh_vgS2dFE" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                </div>
                                <hr>
                                <div class="embed-responsive embed-responsive-16by9">
                                    <iframe width="1280" height="720" src="https://www.youtube.com/embed/cBVGlBWQzuc" allow="autoplay; encrypted-media" allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/ User Feed -->
@endsection
