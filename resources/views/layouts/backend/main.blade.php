
<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-wide customizer-hide"
    dir="ltr"
    data-theme="theme-default"
    data-template="vertical-menu-template-free">

  <head>
    @include('layouts.backend.partials.header')
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          @include('layouts.backend.partials.sidebar')
          
        </aside>
        <!-- / Menu -->

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->
            @include('layouts.backend.partials.navbar')
          <!-- / Navbar -->

          <!-- Content wrapper -->
          <div class="content-wrapper mt-3">
            <!-- Content -->
            @yield('content')
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

    </div>
    <!-- / Layout wrapper -->
    @include('layouts.backend.partials.footer-script')
    @yield('scripts')
  </body>
</html>
