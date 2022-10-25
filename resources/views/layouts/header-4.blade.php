<!--【Farmer】Login前の画面用-->
<header class="header flex-item">
    <img src="{{ asset('/img/logo-green.PNG') }}"  alt="KyoVegロゴ" class="header-logo">
    <nav class="header-nav">
      <ul class="header-nav-list flex-item">
        <li class="header-li"><a href="{{ route('farmer.register') }}" class="header-nav-item">Sign Up</a></li>
        <li class="header-li"><a href="{{ route('farmer.login') }}"  class="header-nav-item">Sign In</a></li>
      </ul>
    </nav>
</header>
