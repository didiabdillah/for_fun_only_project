@extends('templates.user_main')

@section('title', "Register")

@section('page')
<section>
    <div class="row merged">
        <div class="col-lg">
            <div class="login-reg-bg">
                <div class="log-reg-area sign">
                    <h2 class="log-title">Register</h2>
                    <p>
                        Don’t use Winku Yet? <a href="#" title="">Take the tour</a> or <a href="#" title="">Join now</a>
                    </p>
                    <form method="post" action="#">
                        <div class="form-group">
                            <input type="text" required="required" />
                            <label class="control-label" for="input">First & Last Name</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" />
                            <label class="control-label" for="input">User Name</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-group">
                            <input type="password" required="required" />
                            <label class="control-label" for="input">Password</label><i class="mtrl-select"></i>
                        </div>
                        <div class="form-radio">
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio" checked="checked" /><i class="check-box"></i>Male
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="radio" /><i class="check-box"></i>Female
                                </label>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" required="required" />
                            <label class="control-label" for="input"><a href="http://www.wpkixx.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="70351d11191c30">[email&#160;protected]</a></label><i class="mtrl-select"></i>
                        </div>
                        <div class="checkbox">
                            <label>
                                <input type="checkbox" checked="checked" /><i class="check-box"></i>Accept Terms & Conditions ?
                            </label>
                        </div>
                        <a href="{{url('/login')}}" title="" class="already-have">Already have an account</a>
                        <div class="submit-btns">
                            <button class="mtr-btn signup" type="submit"><span>Register</span></button>
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