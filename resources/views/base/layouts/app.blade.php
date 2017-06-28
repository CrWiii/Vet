<!DOCTYPE html>
<html lang="en">
@section('htmlheader')
    @include('base.layouts.partials.htmlheader')
@show
<body class="skin-blue sidebar-mini sidebar-collapse">
<div id="app">
    <div class="wrapper">
    @include('base.layouts.partials.mainheader')
    @include('base.layouts.partials.sidebar')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content" style="padding: 0px !important">
            <!-- Your Page Content Here -->
            @yield('main-content')
        </section><!-- /.content -->
    </div><!-- /.content-wrapper -->

    @include('base.layouts.partials.controlsidebar')

    @include('base.layouts.partials.footer')

</div><!-- ./wrapper -->
</div>
@section('scripts')
    @include('base.layouts.partials.scripts')
@show

</body>
</html>
