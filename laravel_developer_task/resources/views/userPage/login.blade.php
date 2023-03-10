@extends('index')
@section('title')
    Log In | SEO Content
    @endsection

@section('content')
    <main class="section-login">
        <section class="section-login--logo">
            <a href="{{ route('/') }}">
                <img src="{{asset('assets')}}/images/logo.png" alt="logo" class="img-fluid" />
            </a>
        </section>


        <section class="section-login--form">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-title">Sign In</div>
                            <div class="card-body">

                                <form action="{{ route('login') }}" method="post">
                                    <h6 class="text-center text-danger">{{ session('message') }}</h6>
                                    @csrf
                                    <div class="mt-3">
                                        <label for="" class="form-label">Email</label>
                                        <input
                                            type="email"
                                            class="form-control u-box-shadow-1"
                                            name="email"
                                        />
                                    </div>
                                    <div class="mt-3">
                                        <label for="" class="form-label">Password</label>
                                        <input
                                            type="password"
                                            class="form-control u-box-shadow-1"
                                            name="password"
                                        />
                                    </div>
                                    <div class="mt-5">
                                        <div><button class="btn btn-green" type="submit">Sign In</button></div>
                                    </div>
                                </form>

                                <div class="links">
                                    <p>
                                        <a href="{{ route('signUp') }}">Need an account?</a>
                                        <a href="{{ route('forgotPassword') }}">Forgot Password?</a>
                                    </p>
                                </div>
                                <div class="back-button">
                                    <a href="{{ route('/') }}">
                                        <i class="bi bi-arrow-left-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection


