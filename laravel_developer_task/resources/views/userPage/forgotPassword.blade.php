@extends('index')
@section('title')
    Sign Up | SEO Content
@endsection

@section('content')

<main class="section-forgot-password">
    <section class="section-forgot-password--logo">
        <a href="{{ route('/') }}">
            <img src="{{asset('assets')}}/images/logo.png" alt="logo" class="img-fluid" />
        </a>
    </section>

    <section class="section-forgot-password--form">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-title">Forgot Password</div>
                        <div class="card-body">

                            <form action="{{ route('passwordCheck') }}" method="post">
                                @if(Session::get('fail'))
                                    <div class="alert alert-danger">
                                        {{ Session::get('fail') }}
                                    </div>
                                    @endif
                                @if(Session::get('success'))
                                    <div class="alert alert-success">
                                        {{ Session::get('success') }}
                                    </div>
                                    @endif

                                @csrf
                                <div class="mt-3">
                                    <label for="" class="form-label">Email</label>
                                    <input
                                        type="email"
                                        class="form-control u-box-shadow-1"
                                        placeholder="Enter email address"
                                        name="email"
                                    />
                                </div>
                                <div class="my-5">
                                    <div><button class="btn btn-green" type="submit">Send Reset Password Link</button></div>
                                </div>
                                <br>
                                <a class="btn-blue" href="{{ route('login') }}">Login</a>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

