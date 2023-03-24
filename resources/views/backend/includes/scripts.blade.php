   <!-- Global Vendor, plugins & Activation JS -->
   <script src="{{ asset('backend') }}/assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/vendor/bootstrap.min.js"></script>
    <!--Plugins JS-->
    <script src="{{ asset('backend') }}/assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/tippy4.min.js.js"></script>
    <!--Main JS-->
    <script src="{{ asset('backend') }}/assets/js/main.js"></script>

    <!-- Plugins & Activation JS For Only This Page -->

    <!--Moment-->
    <script src="{{ asset('backend') }}/assets/js/plugins/moment/moment.min.js"></script>

    <!--Daterange Picker-->
    <script src="{{ asset('backend') }}/assets/js/plugins/daterangepicker/daterangepicker.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/daterangepicker/daterangepicker.active.js"></script>

    <!--Echarts-->
    <script src="{{ asset('backend') }}/assets/js/plugins/chartjs/Chart.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/chartjs/chartjs.active.js"></script>

    <!--VMap-->
    <script src="{{ asset('backend') }}/assets/js/plugins/vmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/vmap/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/vmap/maps/samples/jquery.vmap.sampledata.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/vmap/vmap.active.js"></script>

    <!-- dataTable  -->
    <script src="{{ asset('backend') }}/assets/js/plugins/datatables/datatables.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/datatables/datatables.active.js"></script>
    <!-- dataTable ends -->
    <script>
      $(function(){
        'use strict';

        // Check if video can play, and play it
        var video = document.getElementById('headVideo');
        video.addEventListener('canplay', function() {
          video.play();
        });

      });
    </script>

    <!-- dropify signup preloader -->

    <script src="{{ asset('backend') }}/assets/js/plugins/dropify/dropify.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/dropify/dropify.active.js"></script>
    <!-- dropify signup preloader -->

    <!-- font-awesome js -->
    <script src="{{ asset('backend') }}/js/all.min.js"></script>
    <script src="{{ asset('backend') }}/js/sweetalert.active.js"></script>
    <script src="{{ asset('backend') }}/js/sweetalert.min.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/toastr/toastr.active.js"></script>
    <script src="{{ asset('backend') }}/assets/js/plugins/toastr/toastr.min.js"></script>



</body>

</html>