@extends('layouts.format')

@section('main')
<div class="signup">
    <ul>
        <li class="signup-li1"><img src="/img/cnt1.jpg" alt="" class="signup-img"></li>
        <li class="signup-li2 flex-item">
            <div class="signup-card">
                <h2 class="h2">Signup</h2>
                <ul class="signup-ul flex-item">
                  <li class="signup-li"><a href="" class="btn btn--orange btn-c flex-item"><img src="/img/person.PNG" alt="" class="icon-email"><input type="text" id="name"
                      pattern=".+@globex\.com" size="30" required placeholder="name"></a></li>
                  <li class="signup-li"><a href="" class="btn btn--orange btn-c flex-item"><img src="/img/email.PNG" alt="" class="icon-email"><input type="email" id="email"
                      pattern=".+@globex\.com" size="30" required placeholder="email"></a></li>
                  <li class="signup-li"><a href="" class="btn btn--orange btn-c"><img src="/img/pw.PNG" alt="" class="icon-pw"><input type="password" id="pass" name="password"
                      minlength="8" required placeholder="password"></a></li>
                  <li class="signup-li"><a href="" class="btn btn--orange btn-c"><input type="submit" value="Sign up"></a></li>
                </ul>
              </div>
        </li>
    </ul>
  </div>
@endsection