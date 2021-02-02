<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->
<head>
<?php $this->load->view('lander/tpl/head') ?>
</head>

<body>
    <!-- preloader Start -->
    <div id="preloader">
        <div id="status">
            <img src="<?= base_url() ?>assets/frontend/boletado/lander/images/header/loder.gif" id="preloader_image" alt="loader">
        </div>
    </div>
    <!-- Top Scroll Start --><a href="javascript:" id="return-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- Top Scroll End -->

<?php $this->load->view('lander/sections/top_banner') ?>

<?php $this->load->view('lander/sections/mini_banners') ?>

<?php $this->load->view('lander/sections/hot_produtos') ?>

<?php $this->load->view('lander/sections/mega_banner_fixo') ?>

<?php $this->load->view('lander/sections/categorias_produtos') ?>

<?php $this->load->view('lander/sections/mega_banner_rotativo') ?>

<?php $this->load->view('lander/tpl/footer') ?>

<?php $this->load->view('lander/tpl/js') ?>

</body>

</html>