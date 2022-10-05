<header class="header flex-item">

    <img src="img/logo-green.PNG" alt="estraロゴ" class="header-logo">
    <nav class="header-nav">
      <ul class="header-nav-list flex-item">
        <li class="header-li"><a href="#orderonline" class="header-nav-item">Order Online</a></li>
        <li class="header-nav-item header-li">
          <div>
            <div>ログイン中のアカウント</div>
            <div>{{ Auth::user()->name }}</div>
        </div>
        </li>
        <li class="header-li"><a class="header-nav-item">|</a></li>
        <li class="header-li"><a href=""  class="header-nav-item">Account</a></li>
        <li class="header-li">
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
          @csrf
            <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
            {{ __('Log Out') }}
            </x-responsive-nav-link>
          </form>
        </li>
      </ul>
    </nav>
</header>