<x-guest-layout>
    @section('title')
Login
@endsection
    <!-- Session Status -->
    <x-auth-session-status class="mb-4 button" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <h4 class="text-center" style="font-size: 1.4rem; font-weight: 600;">Welcome</h4>

        <!-- Email Address -->
        <div class="mb-3"> <!-- Added margin-bottom class -->
            <x-input-label for="email" class="form-label" :value="__('Email Address')" />
            <x-text-input id="email" class="form-control" type="email" name="email" placeholder="Name@example.com" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-3"> <!-- Reduced top margin -->
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password"
                            placeholder="Enter Password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <div class="d-flex flex-column mt-3"> <!-- Reduced top margin -->


            <div class="flex items-center justify-between mt-3">
                <a class="gray d-flex justify-content-start" href="{{ route('register') }}">
                    {{ __('Do not have an account?') }}
                </a>
            </div>

            <!-- Forget password? -->
            <div class="my-3 flex items-center justify-between"> <!-- Removed margin classes -->
                @if (Route::has('password.request'))

                    <a class="gray" href="{{ route('password.request') }}">
                        {{ __('Forget password?') }}
                    </a>
                @endif
            </div>
        </div>

        <div class="d-flex justify-content-center"> <!-- Reduced top margin -->
            <x-primary-button  class="btn btn-primary"> <!-- Apply red background color -->
                {{ __('Log in') }}
            </x-primary-button>

        </div>
         <span class="line">or login with</span>

            <div class="social-media d-flex justify-content-center">
                <a href="https://accounts.google.com/v3/signin/identifier?ifkv=AaSxoQxHDbd24dAVxy6nNzrOk3lR9dQYueCf793imBi1fJKHiiNIDRNmpDjge_AvjMM043gx-YuS&flowName=GlifWebSignIn&flowEntry=ServiceLogin&dsh=S1845801778%3A1714854819045597&theme=mn&ddm=0"><img src="{{asset('Images/google.png')}}" class="social-media-img m-2" alt="..."></a>
                <a href="https://www.facebook.com/login/"><img src="{{asset('Images/facebook.png')}}" class="social-media-img m-2" alt="..."></a>
            </div>


    </form>
</x-guest-layout>





