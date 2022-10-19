@extends('layouts.format')

@section('main')
<div class="signup">
  <ul>
    <li class="signup-li1"><img src="/img/cnt1.jpg" alt="" class="signup-img"></li>
    <li class="signup-li2 flex-item">
      <div class="signup-card">
        <h2 class="h2">Sign Up;農家用</h2>
        <ul class="signup-ul flex-item">
          <form method="POST" action="{{ route('farmer.register') }}">
          @csrf
            <!-- Name -->
            <li class="signup-li">
              <img src="/img/person.PNG" alt="" class="icon-email">
              <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="name"/>
              <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </li>

            <!-- Email Address -->
            <li class="signup-li">
              <img src="/img/email.PNG" alt="" class="icon-email">
              <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required placeholder="email"/>
              <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </li>

            <!-- Password -->
            <li class="signup-li">
              <img src="/img/pw.PNG" alt="" class="icon-pw">
              <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" placeholder="new password"/>
              <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </li>

            <!-- Confirm Password -->
            <li class="signup-li">
              <img src="/img/pw.PNG" alt="" class="icon-pw">
              <x-text-input id="password_confirmation" class="block mt-1 w-full"  type="password" name="password_confirmation" required placeholder="confirm password"/>
              <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </li>

            <li class="signup-li">
              <a class="btn btn--orange btn-c" href="{{ route('farmer.login') }}">
                  {{ __('Already registered?') }}
              </a>
              <x-primary-button class="ml-4">{{ __('Register') }}</x-primary-button>
            </li>
          </form>
        </ul>
      </div>
    </li>
  </ul>
</div>
@endsection


