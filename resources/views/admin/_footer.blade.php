<footer class="twt-footer">
    <a href="#"><i class="fa fa-camera"></i></a>
    <a href="#"><i class="fa fa-map-marker"></i></a>
    New Castle, UK
    <span class="pull-right">
                            32
                        </span>
</footer>
</section>
</div>





</div> <!-- .content -->
</div><!-- /#right-panel -->

<!-- Right Panel -->

<script src="{{asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/main.js"></script>


<script src="{{asset('assets')}}/admin/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/dashboard.js"></script>
<script src="{{asset('assets')}}/admin/assets/js/widgets.js"></script>
<script src="{{asset('assets')}}/admin/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="{{asset('assets')}}/admin/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="{{asset('assets')}}/admin/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>



