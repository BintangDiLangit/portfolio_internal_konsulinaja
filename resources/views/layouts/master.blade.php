<!DOCTYPE html>
<html lang="en" data-theme="light" data-sidebar-behaviour="fixed" data-navigation-color="inverted" data-is-fluid="true">

<!-- Mirrored from dashly-theme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Dec 2022 16:21:32 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->

@include('layouts.head')

<body>

    <!-- THEME CONFIGURATION -->
    <script>
        let themeAttrs = document.documentElement.dataset;

        for (let attr in themeAttrs) {
            if (localStorage.getItem(attr) != null) {
                document.documentElement.dataset[attr] = localStorage.getItem(attr);

                if (theme === 'auto') {
                    document.documentElement.dataset.theme = window.matchMedia('(prefers-color-scheme: dark)').matches ?
                        'dark' : 'light';

                    window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', e => {
                        e.matches ? document.documentElement.dataset.theme = 'dark' : document.documentElement
                            .dataset.theme = 'light';
                    });
                }
            }
        }
    </script>
    <!-- NAVIGATION -->
    @include('layouts.sidebar')
    <!-- MAIN CONTENT -->
    <main>

        <!-- HEADER -->
        @include('layouts.navbar')
        <div class="container-fluid">

            @yield('content')
        </div> <!-- / .container-fluid -->

        <!-- Footer-->
        <!-- Footer -->
        @include('layouts.footer')

    </main> <!-- / main -->

    <!-- JAVASCRIPT-->
    <!-- Theme JS -->
    @include('layouts.script')
</body>

<!-- Mirrored from dashly-theme.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 03 Dec 2022 16:22:03 GMT -->

</html>
