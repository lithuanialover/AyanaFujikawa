<!--Login前の画面用-->
<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>KyoVeg</title>
    <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>

<body class="container">
    @component('layouts.header-2')
    @endcomponent
    <main class="main">
        <div class="local-nav">
            @component('layouts.localnav-items')
            @endcomponent 
        </div>
        @yield('main')
    </main>
    @component('layouts.footer')
    @endcomponent
</body>

</html>