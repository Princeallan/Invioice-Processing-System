<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link rel="stylesheet" href="{{asset('/css/foundation-icons/foundation-icons.css')}}">

    <title>I P S </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

</head>
<body>
<div class="app-dashboard shrink-medium" id="app">

    <div class="row expanded app-dashboard-top-nav-bar">
        <div class="columns medium-6">
            <button data-toggle="app-dashboard-sidebar" class="menu-icon hide-for-medium"></button>
            <a class="app-dashboard-logo hide-for-small-only">INVOICING SYSTEM</a>
        </div>
        <div class="columns medium-5">
            <div class="app-dashboard-search-bar-container">
                <input class="app-dashboard-search" type="search" placeholder="Search">
                <i class="app-dashboard-search-icon fa fa-search"></i>
            </div>
        </div>

        @guest

        @else
            <div class="columns medium-1">
                <ul class="dropdown menu" data-dropdown-menu>
                    <li>
                        <a href="#">{{ Auth::user()->name }}</a>
                        <ul class="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                   onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                      style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>

                    </li>
                </ul>
            </div>
        @endguest
    </div>


    <div class="app-dashboard-body off-canvas-wrapper">
        <div id="app-dashboard-sidebar"
             class="app-dashboard-sidebar position-left off-canvas off-canvas-absolute reveal-for-medium"
             data-off-canvas>
            <div class="app-dashboard-sidebar-title-area">

                <div class="app-dashboard-open-sidebar">
                    <button id="open-sidebar" data-app-dashboard-toggle-shrink
                            class="app-dashboard-open-sidebar-button show-for-medium" aria-label="open menu"
                            type="button">
                        <span aria-hidden="true"><a href="#"><i class="large fi fi-angle-double-right"></i></a></span>
                    </button>
                </div>
            </div>
            <div class="app-dashboard-sidebar-inner">
                <ul class="menu vertical">
                    <li>
                        <a href="/finance" class="is-active">
                            <i class="fa fa-tachometer" aria-hidden="true"></i><span class="app-dashboard-sidebar-text">Finance Approvals</span>
                        </a></li>

                </ul>
            </div>
        </div>

        <div class="app-dashboard-body-content off-canvas-content" data-off-canvas-content>


            @yield('content')

        </div>
    </div>

</div>

<script src="{{asset('/js/app.js')}}"></script>

<script> $(document).foundation();

    $('[data-app-dashboard-toggle-shrink]').on('click', function (e) {
        e.preventDefault();
        $(this).parents('.app-dashboard').toggleClass('shrink-medium').toggleClass('shrink-large');
    });


</script>

</body>
</html>


