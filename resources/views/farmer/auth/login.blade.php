@extends('layouts.format')

@section('main')
<div class="login-bg flex-item">
  <div class="login-card">
    <h2 class="h2">Sign In;農家用</h2>
    <ul class="login-ul flex-item">
      <form method="POST" action="{{ route('farmer.login') }}">
        @csrf
        <!-- Email Address -->
        <li class="login-li">
          <img src="/img/email.PNG" alt="" class="icon-email">
          <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus placeholder="email"/>
          <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </li>
        <!-- Password -->
        <li class="login-li">
          <img src="/img/pw.PNG" alt="" class="icon-pw">
          <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
          <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </li>
        <!-- Remember Me -->
        <li class="login-li">
          <label for="remember_me" class="inline-flex items-center">
            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
        </li>
        <li class="login-li">
          @if (Route::has('farmer.password.request'))
          <a class="pw-request" href="{{ route('password.request') }}">
            {{ __('Forgot your password?') }}
          </a>
          @endif

          <x-primary-button class="ml-3">
            {{ __('Log in') }}
          </x-primary-button>
        </li>
      </form>
    </ul>
  </div>
</div>
@endsection