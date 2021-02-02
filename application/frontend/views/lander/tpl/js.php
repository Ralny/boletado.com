<script src="<?= base_url() ?>assets/frontend/boletado/lander/js/jquery_min.js"></script>
<script src="<?= base_url() ?>assets/frontend/boletado/lander/js/modernizr.js"></script>
<script src="<?= base_url() ?>assets/frontend/boletado/lander/js/bootstrap.js"></script>
<script src="<?= base_url() ?>assets/frontend/boletado/lander/js/jquery.magnific-popup.js"></script>
<script src="<?= base_url() ?>assets/frontend/boletado/lander/js/owl.carousel.js"></script>
<script src="<?= base_url() ?>assets/frontend/boletado/lander/js/custom.js"></script>
<script>
    $(".lr_element_tabs_main_wrapper .nav-tabs a").click(function() {
        var position = $(this).parent().position();
        var width = $(this).parent().width();
        $(".slider").css({
            "left": +position.left,
            "width": width
        });
    });
    var actWidth = $(".lr_element_tabs_main_wrapper .nav-tabs .active").width();
    var actPosition = $(".lr_element_tabs_main_wrapper .nav-tabs .active").position();
    $(".slider").css({
        "left": +actPosition.left,
        "width": actWidth
    });
</script>
<!--main js file end-->
<script>
    //Video Play
    $('.play-trigger').magnificPopup({
        type: 'iframe'
    });
    $.extend(true, $.magnificPopup.defaults, {
        iframe: {
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'http://www.youtube.com/embed/%id%?autoplay=1'
                }
            }
        }
    });
</script>