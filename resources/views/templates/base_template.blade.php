@include('components.basic.start')
@include('components.header.header')
<main class="main left-bg">
    @yield('contents')
</main>
@include('components.footer.footer')
@include('components.basic.jsConnection')
@include('components.basic.end')
