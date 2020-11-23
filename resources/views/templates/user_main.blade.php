<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>@yield('title')</title>
    <link rel="icon" href="{{URL::asset('assets/images/fav.png')}}" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="{{URL::asset('assets/css/main.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/responsive.css')}}">
    <link id="darkmode" rel="stylesheet" href="">
</head>

<body>

    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <div class="postoverlay"></div>
        <div class="responsive-header">
            <div class="mh-head first Sticky">
                <span class="mh-btns-left">
                    <a class="" href="#menu"><i class="fa fa-align-justify"></i></a>
                    <a class="fa fa-refresh" href="#" onClick="window.location.reload();"></a>
                </span>
                <span class="mh-text">
                    <a href="newsfeed.html" title=""><img src="{{URL::asset('assets/images/logo2.png')}}" alt=""></a>
                </span>
                <span class="mh-btns-right">
                    <a class="" href="#"><i class="fa fa-upload"></i></a>
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
                        <span class="ti-settings main-menu" data-ripple=""></span>
                </div>
            </div>
        </div><!-- topbar -->

        @yield('page')

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


        <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
        <script src="{{URL::asset('assets/js/main.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/script.js')}}"></script>
        <script src="{{URL::asset('assets/js/map-init.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.cookie.js')}}"></script>

        <script>
            $(document).ready(function() {
                var date = new Date();
                date.setTime(date.getTime() + 24 * 60 * 60 * 1000);

                var url = '{{URL::asset("assets/css")}}/';
                if ($.cookie('tema')) {

                    $("#darkmode").attr('href', url + $.cookie('tema'));
                    $("#nightmode, #nightmode1").prop('checked', true);
                }
                $("#nightmode, #nightmode1").change(function() {

                    if ($(this).is(':checked')) {
                        $("#darkmode").attr('href', url + 'dark-theme.css');
                        $.cookie('tema', 'dark-theme.css', {
                            expires: date
                        });
                    } else {
                        $("#darkmode").removeAttr('href');
                        $.removeCookie('tema');
                    }


                });
            });
        </script>
</body>

</html>