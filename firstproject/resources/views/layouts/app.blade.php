<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'First App') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        {{-- <link href={{ base_path().'/theme/assets/css/styles.css' }} rel="stylesheet"> --}}
        <link rel="stylesheet" href="{{ asset('/theme/assets/css/styles.css') }}">

        <!-- Scripts -->
        {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
        <script src="{{ asset('/theme/assets/js/jquery.min.js') }}"></script>
    </head>
    <body class="font-sans antialiased">
        <div id="main-wrapper">
            @include('layouts.navbar')

            <!-- Page Heading -->
            {{-- <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header> --}}

            <!-- Page Content -->
            {{-- <main>

            </main> --}}
            <section class="gray pt-4">
                <div class="container-fluid">
                    <div class="row">
                        @include('layouts.sidebar')
                        <div class="col-lg-9 col-md-9 col-sm-12">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </section>
            @include('layouts.footer')
        </div>

	<script src="{{ asset('/theme/assets/js/popper.min.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/select2.min.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/slick.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/moment.min.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/daterangepicker.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/summernote.min.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/metisMenu.min.js') }}"></script>
	<script src="{{ asset('/theme/assets/js/custom.js') }}"></script>
    </body>
</html>
