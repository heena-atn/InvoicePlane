<!DOCTYPE html>
<html class="no-js" lang="<?php _trans('cldr'); ?>"> <!--<![endif]-->

<head>


<script> var BASE_URL = '<?php echo base_url(); ?>'; </script>

<title><?php echo get_setting('custom_title', null, true) ?: 'Legaldairy';?></title>


<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/core/img/favicon.png">


<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">



<link href="<?php echo base_url("assets/admin/css/style.css"); ?>" rel="stylesheet"> 
<link href="<?php echo base_url("assets/admin/css/jquery.dataTables.min.css"); ?>" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">

<style>
.top_nav_page_container{min-height :auto !important;}
</style>
  


</head>

<body class="app">

<div id="loader">
 <div class="spinner"></div>
</div>

<?php $this->load->view('layout/includes/sidebar',array()); ?>

<?php $this->load->view('layout/includes/head',array());  ?>

<script type="text/javascript" src="<?php echo base_url("assets/admin/js/vendor.js"); ?>"></script>


<script src="<?php _core_asset('js/dependencies.min.js'); ?>"></script>

<script src="https://code.jquery.com/jquery-migrate-3.3.2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>

 <script defer src="<?php echo base_url(); ?>assets/core/js/scripts.min.js"></script>
 <script type="text/javascript" src="<?php echo base_url("assets/admin/js/bundle.js"); ?>"></script>

<?php if (trans('cldr') != 'en') 
{ ?>
    <script src="<?php echo base_url(); ?>assets/core/js/locales/bootstrap-datepicker.<?php _trans('cldr'); ?>.js"></script>
<?php 
} ?>

<?php $this->layout->load_view('layout/includes/model_js',array()); ?>




<div id="main-area">
   
    <div id="main-content">
       <?php echo $content; ?>
    </div>

</div>

<div id="modal-placeholder"></div>


<?php echo $this->layout->load_view('layout/includes/fullpage-loader'); ?>

<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2019 Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span></footer>




</body>
</html>
