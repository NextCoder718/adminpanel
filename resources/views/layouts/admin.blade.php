@include('layouts.includes._header')
@include('layouts.includes._nav')

<main role="main" class="container">
    @include('layouts.includes._flash_message')
    @yield('content')
</main>

@include('layouts.includes._footer')