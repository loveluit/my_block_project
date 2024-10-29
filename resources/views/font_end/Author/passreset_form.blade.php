@extends('font_end.master')

@section('content')

<section class="login">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-8 m-auto">
                <div class="login-content">
                    <h4>PassReset Form</h4>

                    {{-- @if(session('exists'))
                     <div class="alert alert-danger">{{ session('exists') }}</div>
                    @endif --}}
                    <form  action="{{ route('pass.reset.update',$token) }}" class="sign-form widget-form " method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="New password*" name="password" >

                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confrim password*" name="password_confirmation" >

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
