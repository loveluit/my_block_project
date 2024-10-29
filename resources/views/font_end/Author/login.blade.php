@extends('font_end.master')
@section('content')

      <!--Login-->
      <section class="login">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-8 m-auto">
                    <div class="login-content">
                        <h4>Login</h4>
                        <p></p>
                        @if (session('aprove'))
                        <div class="alert alert-success">{{ session('aprove') }}</div>
                        @endif
                        <form  action="{{ route('post.author') }}" class="sign-form widget-form " method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email*" name="email" value="">
                                @if (session('email'))
                                <strong class="text-danger">{{ session('email') }}</strong>

                                @endif
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password*" name="password" value="">
                                @if (session('pass'))
                              <strong class="text-danger">{{ session('pass') }}</strong>

                                @endif
                            </div>
                            <div class="sign-controls form-group">

                                <a href="{{ route('pass.reset') }}" class="btn-link ">Forgot Password?</a>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn-custom">Login in</button>
                            </div>
                            <p class="form-group text-center">Don't have an account? <a href="{{ route('author.register') }}" class="btn-link">Create One</a> </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
