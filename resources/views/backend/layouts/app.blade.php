<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport"
        content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="msapplication-tap-highlight" content="no">
    {{-- For Ajax Request --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('title')</title>

    <link href="{{ asset('backend/css/main.css') }}" rel="stylesheet">
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css'>
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@ttskch/select2-bootstrap4-theme@x.x.x/dist/select2-bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="{{ asset('backend/fonts/feather.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}">
    @yield('css')
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        @include('backend.layouts.header')
        <div class="app-main">
            @include('backend.layouts.sidebar')
            <div class="app-main__outer">
                <div class="app-main__inner">
                    @yield('content')
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <span>Copyright {{ date('Y') }}, All right reserved by Movie-App.</span>
                            </div>
                            <div class="app-footer-right">
                                <span>Developed by Pyae Phyoe Naing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src='https://code.jquery.com/jquery-3.5.1.js'></script>
    <script type="text/javascript" src="{{ asset('backend/js/main.js') }}"></script>

    <script src='https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js'></script>

    <!-- Laravel Javascript Validation -->
    <script type="text/javascript" src="{{ url('vendor/jsvalidation/js/jsvalidation.js') }}"></script>
    {{-- sweat alert 2 --}}
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.back-btn').on('click', function() {
                window.history.go(-1)
                return false
            })
        })
        //   Sweat Alert
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })
        @if (session('success'))
            Toast.fire({
            icon: 'success',
            title: '{{ session('success') }}'
            })
        @endif
        @if (session('error'))
            Toast.fire({
            icon: 'error',
            title: '{{ session('error') }}'
            })
        @endif
    </script>
    @yield('scripts')

</body>

</html>
