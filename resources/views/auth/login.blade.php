@extends('templates.user_main')

@section('title', "Login")

@section('page')
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <div class="container-fluid pdng0">
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
            <div class="row merged">
                <div class="col-lg">
                    <div class="login-reg-bg">
                        <div class="log-reg-area sign">
                            <h2 class="log-title">Login</h2>
                            <p>
                                Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                            </p>
                            <form method="post">
                                <div class="form-group">
                                    <input type="text" id="input" required="required" />
                                    <label class="control-label" for="input">Username</label><i class="mtrl-select"></i>
                                </div>
                                <div class="form-group">
                                    <input type="password" required="required" />
                                    <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" checked="checked" /><i class="check-box"></i>Always Remember Me.
                                    </label>
                                </div>
                                <a href="#" title="" class="forgot-pwd">Forgot Password?</a>
                                <div class="submit-btns">
                                    <button class="mtr-btn signin" type="button"><span>Login</span></button>
                                    <a class="signup" style="margin-left: 30px;" href="{{url('/register')}}"><span>Register</span></a>
                                </div>
                                <div class="submit-btns">
                                    <a href="#" title="" class="btn btn-primary"><i class="fa fa-facebook"></i> <span>Login with facebook</span></a>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
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