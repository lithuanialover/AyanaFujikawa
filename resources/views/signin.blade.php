@extends('layouts.format')

@section('main')
  <div class="login-bg flex-item">
    <div class="login-card">
      <h2 class="h2">Login</h2>
      <ul class="login-ul flex-item">
        <li class="login-li"><a href="" class="btn btn--orange btn-c flex-item"><img src="/img/email.PNG" alt="" class="icon-email"><input type="email" id="email"
            pattern=".+@globex\.com" size="30" required placeholder="email"></a></li>
        <li class="login-li"><a href="" class="btn btn--orange btn-c"><img src="/img/pw.PNG" alt="" class="icon-pw"><input type="password" id="pass" name="password"
            minlength="8" required placeholder="password"></a></li>
        <li class="login-li"><a href="" class="btn btn--orange btn-c"><input type="submit" value="Sign in"></a></li>
        <!--<li>会員登録は<a href="/signup"><p class="login-p">こちら</p></a></li>-->
      </ul>
    </div>
  </div>
@endsection