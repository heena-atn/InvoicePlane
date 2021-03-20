<!DOCTYPE html>


<!--[if lt IE 7]>
<html class="no-js ie6 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if IE 7]>
<html class="no-js ie7 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if IE 8]>
<html class="no-js ie8 oldie" lang="<?php _trans('cldr'); ?>"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="<?php _trans('cldr'); ?>"> <!--<![endif]-->



<head>
<script>
var BASE_URL = '<?php echo base_url(); ?>';
</script>
    <?php
    // Get the page head content
    $this->layout->load_view('layout/includes/head');
    ?>

</head>
<body class="app">

<noscript>
    <!-- <div class="alert alert-danger no-margin"><?php _trans('please_enable_js'); ?></div> -->
</noscript>

<?php
// Get the sidebar

$this->layout->load_view('layout/includes/sidebar');
?>

<div id="main-area">
   
    <div id="main-content">
        <?php echo $content; ?>
    </div>

</div>

<div id="modal-placeholder"></div>

<?php echo $this->layout->load_view('layout/includes/fullpage-loader'); ?>
<?php if (trans('cldr') != 'en') { ?>
    <script src="<?php echo base_url(); ?>assets/core/js/locales/bootstrap-datepicker.<?php _trans('cldr'); ?>.js"></script>
<?php } ?>
<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2019 Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span></footer>



	<script language="JavaScript" type="text/javascript" src="//code.jquery.com/jquery-3.6.0.js"></script>

 <script type="text/javascript" src="<?php echo base_url("assets/admin/js/vendor.js"); ?>"></script>
 <script type="text/javascript" src="<?php echo base_url("assets/admin/js/bundle.js"); ?>"></script>

 <script defer src="<?php echo base_url(); ?>assets/core/js/scripts.min.js"></script>
</body>
</html>
