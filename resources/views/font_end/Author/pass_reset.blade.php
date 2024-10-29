@extends('font_end.master')

@section('content')

<section class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8 m-auto">
                <div class="login-content">
                    <h4>PassReset</h4>

                    @if(session('exists'))
                     <div class="alert alert-danger">{{ session('exists') }}</div>
                    @endif
                    <form  action="{{ route('pass.reset.send') }}" class="sign-form widget-form " method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Email*" name="email" value="">


                        </div>


                        <div class="form-group">
                            <button type="submit" class="btn-custom">Reset_password</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
