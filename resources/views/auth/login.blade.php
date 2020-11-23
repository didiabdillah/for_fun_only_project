@extends('templates.user_main')

@section('title', "Login")

@section('page')
<section>
    <div class="row merged">
        <div class="col-lg">
            <div class="login-reg-bg">
                <div class="log-reg-area sign">
                    <h2 class="log-title">Login</h2>
                    <p>
                        Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                    </p>
                    <a href="#" title="" class="btn btn-primary btn-block"><i class="fa fa-facebook"></i> <span>Login with facebook</span></a>
                    <a href="#" title="" class="btn btn-danger btn-block"><i class="fa fa-google"></i> <span>Login with google</span></a>
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

                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</section>
</div>
</div>

@endsection