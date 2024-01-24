<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-menu-fixed"
    dir="ltr"
    data-theme="theme-default"
    data-template="vertical-menu-template-free">

    <head>
        @include('layouts.frontend.partials.header')
    </head>

    <body>
        <!-- Layout wrapper -->
        <header>
            <!-- Navbar -->
            <nav>
                <div>
                    <!-- Your Logo -->
                    <img src="{{ asset('logo.png') }}" width="50px" height="50px" alt="Your Logo">
                </div>
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <!-- Add more navigation links as needed -->
                </ul>
            </nav>
        </header>
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
                        @include('layouts.frontend.partials.footer')
                        <!-- / Footer -->
                    </div>
                    <!-- / Layout page -->
                </div>
                <!-- Overlay -->
                <div class="layout-overlay layout-menu-toggle"></div>
            </div>
        </main>

        <!-- / Layout wrapper -->
        @include('layouts.frontend.partials.footer-script')
    </body>
</html>
