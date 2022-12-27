<x-bas-layout>
    <section class="sign-in-page" style="margin-top: 0px !important;">
        <div class="container bg-white p-0">
            <div class="row no-gutters">
                <div class="col-sm-6 align-self-center">
                    <div class="sign-in-from">
                        <h3 align="center"><img src="{{ asset('asset/om.jpg') }}" alt="logo"></h3>
                        <h3 align="center">Sign In</h3>
                        <x-jet-validation-errors class="mb-2 text-danger" />

                        @if (session('status'))
                        <div class="mb-2 font-medium text-sm text-green-600">
                            {{ session('status') }}
                        </div>
                        @endif
                        <form class="mt-2" method="POST" action="/login">
                            @csrf
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" class="form-control mb-0" id="email" class="block mt-1 w-full"
                                    name="email" :value="old('email')" autofocus>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900 float-right"
                                    href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif
                                <input type="password" class="form-control mb-0" id="password" name="password">
                            </div>
                            <div class="d-inline-block w-100">
                                <div class="custom-control custom-checkbox d-inline-block mt-2 pt-1">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label" for="customCheck1">Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-success
                                 float-right">Sign in</button>
                            </div>
                            <div class="sign-info">
                                <span class="dark-color d-inline-block line-height-2">Don't have an account? <a
                                        href="#">Sign up</a></span>
                                <ul class="iq-social-media">
                                    <li><a href="#"><i class="ri-facebook-box-line"></i></a></li>
                                    <li><a href="#"><i class="ri-twitter-line"></i></a></li>
                                    <li><a href="#"><i class="ri-instagram-line"></i></a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-sm-6 text-center">
                    <div class="sign-in-detail text-white">
                        {{-- <a class="sign-in-logo mb-5" href="#"><img src="{{ asset('asset/logo.jpg') }}"
                                class="img-fluid" alt="logo"></a> --}}
                        <div class="owl-carousel" data-autoplay="true" data-loop="true" data-nav="false" data-dots="true"
                            data-items="1" data-items-laptop="1" data-items-tab="1" data-items-mobile="1"
                            data-items-mobile-sm="1" data-margin="0">
                            <div class="item">
                                <img src="{{ asset('asset/1.png') }}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Manage your orders</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.
                                </p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('asset/2.png') }}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Manage your orders</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.
                                </p>
                            </div>
                            <div class="item">
                                <img src="{{ asset('asset/5.png') }}" class="img-fluid mb-4" alt="logo">
                                <h4 class="mb-1 text-white">Manage your orders</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable content.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-bas-layout>
{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}
