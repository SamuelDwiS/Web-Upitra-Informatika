@include('partials.head')

<body>
@include('partials.header')
{{-- @include('partials.navbar') --}}

<div>
    @yield('content')
</div>

</body>
@include('partials.footer')
</html>


