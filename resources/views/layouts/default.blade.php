<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="ie=edge" />
        @stack('before-style') @include('includes.style') @stack('after-style')

        <!-- CSS -->
        <link
            rel="stylesheet"
            href="{{ asset('template/documentation/assets/reset.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('template/documentation/assets/bootstrap.min.css')
            }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('template/documentation/assets/shCore.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{
                asset('template/documentation/assets/shThemeDefault.css')
            }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('template/documentation/assets/style.css') }}"
        />
        <!-- Image Logo Title -->
        <link rel="shortcut icon" href="{{ asset('images/LogoGithub.png') }}" />
    </head>
    <body>
        @stack('before-content') @yield('content') @stack('after-content')
        @stack('before-script') @include('includes.script')
        @stack('after-script')
        <!-- JavaScripts -->
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/jquery.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/bootstrap.min.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{
                asset('template/documentation/assets/jquery.scrollTo.min.js')
            }}"
        ></script>
        <script
            type="text/javascript"
            src="{{
                asset(
                    'template/documentation/assets/jquery.localscroll-1.2.7-min.js'
                )
            }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/shCore.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/shBrushPhp.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/shBrushXML.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/shBrushJScript.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/shBrushCss.js') }}"
        ></script>
        <script
            type="text/javascript"
            src="{{ asset('template/documentation/assets/custom.js') }}"
        ></script>
    </body>
</html>