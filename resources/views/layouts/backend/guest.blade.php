<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-template="vertical-menu-template-free">

    <head>
        @include('layouts.backend.partials.header') 
    </head>

    <body>
        <!-- Layout wrapper -->
        @include('layouts.backend.partials.sidebar')
        <main>
            <div class="layout-wrapper layout-content-navbar">
                <div class="layout-container">
                    
                    <!-- Layout container -->
                    <div class="layout-page">
                    
                        <!-- Content wrapper -->
                        <div class="content-wrapper">
                            <!-- Content -->
                            @yield('content')
                            <!-- / Content -->
                            <!-- <div class="content-backdrop fade"></div> -->
                        </div>
                        <!-- Content wrapper -->

                        <!-- Footer -->
                        @include('layouts.backend.partials.footer')
                        <!-- / Footer -->
                    </div>
                    <!-- / Layout page -->
                </div>
                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
        </main>

        <!-- / Layout wrapper -->
        @include('layouts.backend.partials.footer-script')
    </body>
</html>
