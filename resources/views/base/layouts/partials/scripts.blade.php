<!-- REQUIRED JS SCRIPTS -->

<!-- JQuery and bootstrap are required by Laravel 5.3 in resources/assets/js/bootstrap.js-->
<!-- Laravel App -->
<!--<script src="{{ asset('/js/app.js') }}" type="text/javascript"></script>-->
<script src="{{ asset('plugins/jQuery/jquery-2.2.3.min.js') }}"></script>

<script src="{{ asset('dist/js/app.js') }}"></script>
<script src="{{ asset('bootstrap/js/bootstrap.min.js') }}"></script>
<!-- Optionally, you can add Slimscroll and FastClick plugins.
      Both of these plugins are recommended to enhance the
      user experience. Slimscroll is required when using the
      fixed layout. -->
<script>
window.Laravel = <?php echo json_encode([
        'csrfToken' => csrf_token(),
]); ?>
</script>
