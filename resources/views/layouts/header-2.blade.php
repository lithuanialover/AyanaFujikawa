<header class="header flex-item">

    <img src="{{ asset('/img/logo-green.PNG') }}"  alt="kyovegロゴ" class="header-logo">
    <nav class="header-nav">
      <ul class="header-nav-list flex-item">
        <li class="header-li"><a href="/shopping/all" class="header-nav-item">Order Online</a></li>
        <a href="{{ route('cart.list') }}" class="flex items-center">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
          <span class="text-red-700">{{ Cart::getTotalQuantity()}}</span> 
        </a>
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