@extends('templates/user_main')

@section('title', 'Fun Project')

@section('page')
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <div class="postoverlay"></div>
    <div class="responsive-header">
        <div class="mh-head first Sticky">
            <span class="mh-btns-left">
                <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
            </span>
            <span class="mh-text">
                <a href="newsfeed.html" title=""><img src="{{URL::asset('assets/images/logo2.png')}}" alt=""></a>
            </span>
            <span class="mh-btns-right">
                <a class="fa fa-refresh" href="#" onClick="window.location.reload();"></a>
                <a class="fa fa-sliders" href="#shoppingbag"></a>
            </span>
        </div>
        <div class="mh-head second">
            <form class="mh-form">
                <input placeholder="search" />
                <a href="#/" class="fa fa-search"></a>
            </form>
        </div>
        <nav id="menu" class="res-menu">
            <ul>
                <li>
                    <a href="#" title="">LOL</a>
                </li>
                <li>
                    <a href="#" title="">Trending</a>
                </li>
                <li>
                    <a href="#" title="">Vote</a>
                </li>
                <li>
                    <a href="#" title="">Legend</a>
                </li>
                <li>
                    <a href="#" title="">Shuffle</a>
                </li>
                <li>
                    <a href="#" title="">Friends</a>
                </li>
                <li>
                    <a href="#" title="">Me (Abcdefghijklmnopqrstuvwxyz)</a>
                </li>
                <li>
                    <a href="#" title="">Logout</a>
                </li>
            </ul>
        </nav>
        <nav id="shoppingbag">
            <div>
                <div class="">
                    <form method="post">
                        <div class="setting-row">
                            <span>use night mode</span>
                            <input type="checkbox" id="nightmode" />
                            <label for="nightmode" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>Notifications</span>
                            <input type="checkbox" id="switch2" />
                            <label for="switch2" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                    </form>
                    <h4 class="panel-title">Account Setting</h4>
                    <form method="post">
                        <div class="setting-row">
                            <span>Sub users</span>
                            <input type="checkbox" id="switch6" />
                            <label for="switch6" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                        <div class="setting-row">
                            <span>personal account</span>
                            <input type="checkbox" id="switch7" />
                            <label for="switch7" data-on-label="ON" data-off-label="OFF"></label>
                        </div>
                    </form>
                </div>
            </div>
        </nav>
    </div><!-- responsive header -->

    <div class="topbar stick">
        <div class="container">
            <div class="logo">
                <a title="" href="newsfeed.html"><img src="{{URL::asset('assets/images/logo-border.png')}}" alt=""></a>
            </div>

            <div class="top-area">
                <ul class="main-menu">
                    <li>
                        <a href="#" title="">LOL</a>
                    </li>
                    <li>
                        <a href="#" title="">Trending</a>
                    </li>
                    <li>
                        <a href="#" title="">Vote</a>
                    </li>
                    <li>
                        <a href="#" title="">Legend</a>
                    </li>
                    <li>
                        <a href="#" title="">Shuffle</a>
                    </li>
                    <li>
                        <a href="#" title="">Friends</a>
                    </li>
                </ul>
                <div class="top-search">
                    <form method="post" class="">
                        <input type="text" placeholder="Search">
                        <button data-ripple><i class="ti-search"></i></button>
                    </form>
                </div>

                <ul class="setting-area">
                    <li>
                        <a href="#" title="Notification" data-ripple="">
                            <i class="ti-bell"></i><span>20</span>
                        </a>
                        <div class="dropdowns">
                            <span><a href="notifications.html" title="" class="more-mesg">4 New Notifications</a></span>
                            <ul class="drops-menu">
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{URL::asset('assets/images/resources/thumb-1.jpg')}}" alt="">
                                        <div class="mesg-meta">
                                            <h6>sarah Loren</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag green">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{URL::asset('assets/images/resources/thumb-2.jpg')}}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Jhon doe</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag red">Reply</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{URL::asset('assets/images/resources/thumb-3.jpg')}}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Andrew</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag blue">Unseen</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{URL::asset('assets/images/resources/thumb-4.jpg')}}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Tom cruse</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                                <li>
                                    <a href="notifications.html" title="">
                                        <img src="{{URL::asset('assets/images/resources/thumb-5.jpg')}}" alt="">
                                        <div class="mesg-meta">
                                            <h6>Amy</h6>
                                            <span>Hi, how r u dear ...?</span>
                                            <i>2 min ago</i>
                                        </div>
                                    </a>
                                    <span class="tag">New</span>
                                </li>
                            </ul>
                            <a href="notifications.html" title="" class="more-mesg">view more</a>
                        </div>

                    </li>

                    <div class="user-img">
                        <img src="{{URL::asset('assets/images/resources/admin.jpg')}}" alt="">
                        <div class="user-setting">
                            <a href="#" title=""><span class="status f-online"></span>online</a>
                            <a href="#" title=""><span class="status f-away"></span>away</a>
                            <a href="#" title=""><span class="status f-off"></span>offline</a>
                            <a href="#" title=""><i class="ti-user"></i> view profile</a>
                            <a href="#" title=""><i class="ti-pencil-alt"></i>edit profile</a>
                            <a href="#" title=""><i class="ti-target"></i>activity log</a>
                            <a href="#" title=""><i class="ti-settings"></i>account setting</a>
                            <a href="#" title=""><i class="ti-power-off"></i>log out</a>
                        </div>
                    </div>
                    <span class="ti-menu main-menu" data-ripple=""></span>
            </div>
        </div>
    </div><!-- topbar -->

    <section>
        <div class="gap gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="row merged20" id="page-contents">
                            <div class="col-lg-8">
                                <div class="central-meta new-pst">
                                    <div class="new-postbox">
                                        <figure>
                                            <img src="{{URL::asset('assets/images/resources/admin2.jpg')}}" alt="">
                                        </figure>
                                        <div class="newpst-input">
                                            <form method="post">
                                                <textarea rows="2" placeholder="write something"></textarea>
                                                <div class="attachments">
                                                    <ul>
                                                        <li>
                                                            <i class="fa fa-music"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-image"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-video-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <i class="fa fa-camera"></i>
                                                            <label class="fileContainer">
                                                                <input type="file">
                                                            </label>
                                                        </li>
                                                        <li>
                                                            <button type="submit">Post</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div><!-- add post new box -->
                                <div class="loadMore">
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar10.jpg')}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="time-line.html" title="">Janice Griffith</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <img src="{{URL::asset('assets/images/resources/user-post.jpg')}}" alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip" title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            World's most beautiful car in Curabitur <a href="#" title="">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this car is very awesome for the youngster. please vote this car and like our post</p>
                                                        </div>
                                                        <ul>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="{{URL::asset('assets/images/resources/comet-2.jpg')}}" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">alexendra dadrio</a></h5>
                                                                        <span>1 month ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>yes, really very awesome car i see the features of this car in the official website of <a href="#" title="">#Mercedes-Benz</a> and really impressed :-)</p>
                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="comet-avatar">
                                                                    <img src="{{URL::asset('assets/images/resources/comet-3.jpg')}}" alt="">
                                                                </div>
                                                                <div class="we-comment">
                                                                    <div class="coment-head">
                                                                        <h5><a href="time-line.html" title="">Olivia</a></h5>
                                                                        <span>16 days ago</span>
                                                                        <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                                    </div>
                                                                    <p>i like lexus cars, lexus cars are most beautiful with the awesome features, but this car is really outstanding than lexus</p>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Donald Trump</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless" title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/nearly1.jpg')}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="time-line.html" title="">Sara Grey</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <iframe width="" height="285" src="https://www.youtube.com/embed/_-StQsHSTz0" frameborder="0" allowfullscreen></iframe>

                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip" title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            Lonely Cat Enjoying in Summer Curabitur <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless" title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/nearly6.jpg')}}" alt="">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a href="time-line.html" title="">Sophia</a></ins>
                                                    <span>published: january,5 2018 19:PM</span>
                                                </div>
                                                <div class="post-meta">
                                                    <img src="{{URL::asset('assets/images/resources/user-post.jpg')}}" alt="">
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip" title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="description">

                                                        <p>
                                                            Curabitur Lonely Cat Enjoying in Summer <a href="#" title="">#mypage</a> ullamcorper ultricies nisi. Nam eget dui. Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque sed ipsum. Nam quam nunc,
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="coment-area">
                                                <ul class="we-comet">
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-1.jpg')}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Jason borne</a></h5>
                                                                <span>1 year ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster. please vote this video and like our channel</p>
                                                        </div>

                                                    </li>
                                                    <li>
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="we-comment">
                                                            <div class="coment-head">
                                                                <h5><a href="time-line.html" title="">Sophia</a></h5>
                                                                <span>1 week ago</span>
                                                                <a class="we-reply" href="#" title="Reply"><i class="fa fa-reply"></i></a>
                                                            </div>
                                                            <p>we are working for the dance and sing songs. this video is very awesome for the youngster.
                                                                <i class="em em-smiley"></i>
                                                            </p>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="#" title="" class="showmore underline">more comments</a>
                                                    </li>
                                                    <li class="post-comment">
                                                        <div class="comet-avatar">
                                                            <img src="{{URL::asset('assets/images/resources/comet-2.jpg')}}" alt="">
                                                        </div>
                                                        <div class="post-comt-box">
                                                            <form method="post">
                                                                <textarea placeholder="Post your comment"></textarea>
                                                                <div class="add-smiles">
                                                                    <span class="em em-expressionless" title="add icon"></span>
                                                                </div>
                                                                <div class="smiles-bunch">
                                                                    <i class="em em---1"></i>
                                                                    <i class="em em-smiley"></i>
                                                                    <i class="em em-anguished"></i>
                                                                    <i class="em em-laughing"></i>
                                                                    <i class="em em-angry"></i>
                                                                    <i class="em em-astonished"></i>
                                                                    <i class="em em-blush"></i>
                                                                    <i class="em em-disappointed"></i>
                                                                    <i class="em em-worried"></i>
                                                                    <i class="em em-kissing_heart"></i>
                                                                    <i class="em em-rage"></i>
                                                                    <i class="em em-stuck_out_tongue"></i>
                                                                </div>
                                                                <button type="submit"></button>
                                                            </form>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="central-meta item">
                                        <div class="user-post">
                                            <div class="friend-info">
                                                <figure>
                                                    <img alt="" src="{{URL::asset('assets/images/resources/friend-avatar10.jpg')}}">
                                                </figure>
                                                <div class="friend-name">
                                                    <ins><a title="" href="time-line.html">Janice Griffith</a></ins>
                                                    <span>published: june,2 2018 19:PM</span>
                                                </div>
                                                <div class="description">

                                                    <p>
                                                        Curabitur World's most beautiful car in <a title="" href="#">#test drive booking !</a> the most beatuiful car available in america and the saudia arabia, you can book your test drive by our official website
                                                    </p>
                                                </div>
                                                <div class="post-meta">
                                                    <div class="linked-image align-left">
                                                        <a title="" href="#"><img alt="" src="{{URL::asset('assets/images/resources/page1.jpg')}}"></a>
                                                    </div>
                                                    <div class="detail">
                                                        <span>Love Maid - ChillGroves</span>
                                                        <p>Lorem ipsum dolor sit amet, consectetur ipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua... </p>
                                                        <a title="" href="#">www.sample.com</a>
                                                    </div>
                                                    <div class="we-video-info">
                                                        <ul>
                                                            <li>
                                                                <span class="views" data-toggle="tooltip" title="views">
                                                                    <i class="fa fa-eye"></i>
                                                                    <ins>1.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="comment" data-toggle="tooltip" title="Comments">
                                                                    <i class="fa fa-comments-o"></i>
                                                                    <ins>52</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="like" data-toggle="tooltip" title="like">
                                                                    <i class="ti-heart"></i>
                                                                    <ins>2.2k</ins>
                                                                </span>
                                                            </li>
                                                            <li>
                                                                <span class="dislike" data-toggle="tooltip" title="dislike">
                                                                    <i class="ti-heart-broken"></i>
                                                                    <ins>200</ins>
                                                                </span>
                                                            </li>
                                                            <li class="social-media">
                                                                <div class="menu">
                                                                    <div class="btn trigger"><i class="fa fa-share-alt"></i></div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-html5"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-facebook"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-google-plus"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-twitter"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-css3"></i></a></div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-instagram"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-dribbble"></i></a>
                                                                        </div>
                                                                    </div>
                                                                    <div class="rotater">
                                                                        <div class="btn btn-icon"><a href="#" title=""><i class="fa fa-pinterest"></i></a>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- centerl meta -->
                            <div class="col-lg-4">
                                <aside class="sidebar static">
                                    <div class="widget">
                                        <h4 class="widget-title">Your page</h4>
                                        <div class="your-page">
                                            <figure>
                                                <a href="#" title=""><img src="{{URL::asset('assets/images/resources/friend-avatar9.jpg')}}" alt=""></a>
                                            </figure>
                                            <div class="page-meta">
                                                <a href="#" title="" class="underline">My page</a>
                                                <span><i class="ti-bell"></i><a href="insight.html" title="">Notifications <em>2</em></a></span>
                                            </div>
                                            <div class="page-likes">
                                                <ul class="nav nav-tabs likes-btn">
                                                    <li class="nav-item"><a class="active" href="#link1" data-toggle="tab">fun</a></li>
                                                    <li class="nav-item"><a class="" href="#link2" data-toggle="tab">followers</a></li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content">
                                                    <div class="tab-pane active fade show " id="link1">
                                                        <span><i class="ti-heart"></i>884</span>
                                                        <a href="#" title="weekly-likes">35 new likes this week</a>
                                                        <div class="users-thumb-list">
                                                            <a href="#" title="Anderw" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-1.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="frank" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-2.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Sara" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-3.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Amy" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-4.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Ema" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-5.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Sophie" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-6.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Maria" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-7.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="link2">
                                                        <span><i class="ti-eye"></i>440</span>
                                                        <a href="#" title="weekly-likes">440 new views this week</a>
                                                        <div class="users-thumb-list">
                                                            <a href="#" title="Anderw" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-1.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="frank" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-2.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Sara" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-3.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Amy" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-4.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Ema" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-5.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Sophie" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-6.jpg')}}" alt="">
                                                            </a>
                                                            <a href="#" title="Maria" data-toggle="tooltip">
                                                                <img src="{{URL::asset('assets/images/resources/userlist-7.jpg')}}" alt="">
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!-- page like widget -->
                                    <div class="widget">
                                        <h4 class="widget-title">Share</h4>
                                        <ul class="socials">
                                            <li class="facebook">
                                                <a href="#" title=""><i class="fa fa-facebook"></i> <span>facebook</span> <ins>45 likes</ins></a>
                                            </li>
                                            <li class="twitter">
                                                <a href="#" title=""><i class="fa fa-twitter"></i> <span>twitter</span><ins>25 likes</ins></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="widget friend-list stick-widget">
                                        <h4 class="widget-title">Top Weekly Users</h4>
                                        <div id="searchDir"></div>
                                        <ul id="people-list" class="friendz-list">
                                            <li>
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar.jpg')}}" alt="">
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">bucky barnes</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="1c6b757268796e6f737078796e5c7b717d7570327f7371">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar2.jpg')}}" alt="">
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Sarah Loren</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="600201120e051320070d01090c4e030f0d">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar3.jpg')}}" alt="">
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">jason borne</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="b4ded5c7dbdad6f4d3d9d5ddd89ad7dbd9">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>
                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar4.jpg')}}" alt="">
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Cameron diaz</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="610b00120e0f0321060c00080d4f020e0c">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar5.jpg')}}" alt="">
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">daniel warber</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="97fdf6e4f8f9f5d7f0faf6fefbb9f4f8fa">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar6.jpg')}}" alt="">
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">andrew</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="325853415d5c5072555f535b5e1c515d5f">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar7.jpg')}}" alt="">
                                                    <span class="status f-off"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">amy watson</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="305a51435f5e5270575d51595c1e535f5d">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar5.jpg')}}" alt="">
                                                    <span class="status f-online"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">daniel warber</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="0d676c7e62636f4d6a606c6461236e6260">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                            <li>

                                                <figure>
                                                    <img src="{{URL::asset('assets/images/resources/friend-avatar2.jpg')}}" alt="">
                                                    <span class="status f-away"></span>
                                                </figure>
                                                <div class="friendz-meta">
                                                    <a href="time-line.html">Sarah Loren</a>
                                                    <i><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="f19390839f9482b1969c90989ddf929e9c">[email&#160;protected]</a></i>
                                                </div>
                                            </li>
                                        </ul>
                                    </div><!-- friends list sidebar -->
                                </aside>
                            </div><!-- sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-8">
                    <div class="widget">
                        <div class="foot-logo">
                            <div class="logo">
                                <a href="index-2.html" title=""><img src="{{URL::asset('assets/images/logo.png')}}" alt=""></a>
                            </div>
                            <p>
                                The trio took this simple idea and built it into the world’s leading carpooling platform.
                            </p>
                        </div>
                        <ul class="location">
                            <li>
                                <i class="ti-map-alt"></i>
                                <p>33 new montgomery st.750 san francisco, CA USA 94105.</p>
                            </li>
                            <li>
                                <i class="ti-mobile"></i>
                                <p>+1-56-346 345</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>follow</h4>
                        </div>
                        <ul class="list-style">
                            <li><i class="fa fa-facebook-square"></i> <a href="https://web.facebook.com/shopcircut/" title="">facebook</a></li>
                            <li><i class="fa fa-twitter-square"></i><a href="https://twitter.com/login?lang=en" title="">twitter</a></li>
                            <li><i class="fa fa-instagram"></i><a href="https://www.instagram.com/?hl=en" title="">instagram</a></li>
                            <li><i class="fa fa-google-plus-square"></i> <a href="https://plus.google.com/discover" title="">Google+</a></li>
                            <li><i class="fa fa-pinterest-square"></i> <a href="https://www.pinterest.com/" title="">Pintrest</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>Navigate</h4>
                        </div>
                        <ul class="list-style">
                            <li><a href="about.html" title="">about us</a></li>
                            <li><a href="contact.html" title="">contact us</a></li>
                            <li><a href="terms.html" title="">terms & Conditions</a></li>
                            <li><a href="#" title="">RSS syndication</a></li>
                            <li><a href="sitemap.html" title="">Sitemap</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="widget">
                        <div class="widget-title">
                            <h4>useful links</h4>
                        </div>
                        <ul class="list-style">
                            <li><a href="#" title="">leasing</a></li>
                            <li><a href="#" title="">submit route</a></li>
                            <li><a href="#" title="">how does it work?</a></li>
                            <li><a href="#" title="">agent listings</a></li>
                            <li><a href="#" title="">view All</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer><!-- footer -->
    <div class="bottombar">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <span class="copyright">© Winku 2018. All rights reserved.</span>
                    <i><img src="{{URL::asset('assets/images/credit-cards.png')}}" alt=""></i>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="side-panel">
    <h4 class="panel-title">General Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>use night mode</span>
            <input type="checkbox" id="nightmode1" />
            <label for="nightmode1" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>Notifications</span>
            <input type="checkbox" id="switch22" />
            <label for="switch22" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
    <h4 class="panel-title">Account Setting</h4>
    <form method="post">
        <div class="setting-row">
            <span>Sub users</span>
            <input type="checkbox" id="switch66" />
            <label for="switch66" data-on-label="ON" data-off-label="OFF"></label>
        </div>
        <div class="setting-row">
            <span>personal account</span>
            <input type="checkbox" id="switch77" />
            <label for="switch77" data-on-label="ON" data-off-label="OFF"></label>
        </div>
    </form>
</div><!-- side panel -->

@endsection