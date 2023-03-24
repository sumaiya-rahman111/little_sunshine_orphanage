@include('frontend.includes.link')


@yield('link')


@include('frontend.includes.link_bot')


@include('frontend.includes.nav')


@yield('content')


@include('frontend.includes.footer')
@include('frontend.includes.script')

@yield('script')

@include('frontend.includes.script_bot')