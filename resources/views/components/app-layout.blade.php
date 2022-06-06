<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" type="image/png" href="{{ asset('favicon.ico') }}">

        <title>{{ $title ?? config('app.name') }}</title>

        <link id="pagestyle" href="{{ asset('assets/css/argon-dashboard.css?v=2.0.2') }}" rel="stylesheet" />

        <link href="{{ asset('app.css') }}" rel="stylesheet" />

        @livewireStyles

    </head>
    <body class="g-sidenav-show bg-gray-100">
        <script>
            // Hide sidebar if hidden to prevent fouc
            if (localStorage.getItem('sidebar-collapsed') === 'true') {
                document.body.classList.add('sidebar-collapsed');
            }
        </script>
        

        @if(session()->has('errorBanner'))
            <div class="alert alert-danger alert-dismissible fade show m-4" role="alert">
                <strong class="text-white alert-text ms-2">
                    {{ session()->get('errorBanner') }}
                </strong>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <livewire:sidebar />

        <main>
            {{ $slot }}
        </main>

        <!--   Vendor JS Files   -->
        <script defer src="{{ asset('assets/js/core/popper.min.js') }}"></script>
        <script defer src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>

        <!--   Core JS Files   -->
        <script defer src="{{ asset('app.js') }}"></script>

        <!-- Control Center for Argon Dashboard: parallax effects, scripts for the example pages etc -->
        {{-- <script src="{{ asset('assets/js/argon-dashboard.min.js') }}"></script> --}}

        @livewireScripts

        <button id="sticky-sidebar-toggle-button" class="toggle-sidebar border-0 bg-transparent m-3" title="Toggle sidebar (CTRL+B)">
            <svg xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0z" fill="none"/><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"/></svg>
        </button>
    </body>
</html>

<!--
=========================================================
* Argon Dashboard 2 - v2.0.2
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2022 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://www.creative-tim.com/license)
* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->