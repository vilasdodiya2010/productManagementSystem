
<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed layout-compact"
    dir="ltr"
    data-theme="theme-default"
    data-template="vertical-menu-template-free">
    
    <head>
        @include('layouts.frontend.partials.header') 
    </head>

    <body>
        <!-- Layout wrapper -->
        <main>
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    <!-- Content wrapper -->
                    <div class="content-wrapper">
                        <!-- Content -->
                        @yield('content')
                        <!-- / Content -->
                    </div>
                    <!-- Content wrapper -->

                    <!-- Footer -->
                    @include('layouts.frontend.partials.footer')
                    <!-- / Footer -->
                </div>
                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
        </main>

        <!-- / Layout wrapper -->
        @include('layouts.frontend.partials.footer-script')
    </body>
</html>