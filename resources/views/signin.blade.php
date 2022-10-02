@extends('layouts.format')

@section('main')
  <div class="login-bg flex-item">
    <div class="login-card">
      <h2 class="h2">Login</h2>
      <p class="error-msg">{{$text}}</p>
      <form action="/signin" method="post">
        <table class="login-table flex-item">
          @csrf
          <tr class="login-tr"><th><img src="/img/email.PNG" alt="" class="icon-email"></th><td><input type="text"
                name="email" required placeholder="email"></td></tr>
          <tr class="login-tr"><th><img src="/img/pw.PNG" alt="" class="icon-pw"></th><td><input type="password"
                name="password" required placeholder="password"></td></tr>
          <tr class="login-tr"><th></th><td><input type="submit"
                value="送信" class="btn btn--orange btn-c"></td></tr>
        </table>
      </form>
    </div>
  </div>
@endsection