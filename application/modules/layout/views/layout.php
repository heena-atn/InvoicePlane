<!DOCTYPE html>
<<<<<<< Updated upstream
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>


<div id="main-area">
   
    <div id="main-content">
       <?php echo $content; ?>
    </div>
=======
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title><?php echo get_setting('custom_title', null, true) ?: 'Legaldairy';?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="<?php echo base_url('node_modules/select2/dist/css/select2.min.css');?>">
  

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/stisla/css/style.css');?>">

  <link rel="stylesheet" href="//cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">

  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

</head>
>>>>>>> Stashed changes

<body>
  <div id="app">

    <div id="loader">
 <div class="spinner"></div>
</div>
    <div class="main-wrapper">
      <div class="navbar-bg"></div>
            <?php
            $this->layout->load_view('layout/includes/head');
            ?>
            <div class="main-sidebar">
                  <?php
                  $this->layout->load_view('layout/includes/sidebar');
                  ?>
            </div>

      <!-- Main Content -->
      <div class="main-content">
         <section class="section">
                <div class="section-header">
                  <h1>Advanced Forms</h1>
                  <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Forms</a></div>
                    <div class="breadcrumb-item">Advanced Forms</div>
                  </div>
                </div>

                <!-- main body -->
                <div class="section-body">
                   <?php echo $content; ?>
                </div>
                <!-- end body -->
        </section>

      </div>


      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2018
        </div>
        <div class="footer-right">
          2.3.0
        </div>
      </footer>
    </div>
  </div>



  <!-- General JS Scripts -->
  
  <div id="modal-placeholder"></div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="http://localhost/stisla/assets/js/stisla.js"></script>

  <!-- JS Libraies -->

  <script src="<?php echo base_url('node_modules/select2/dist/js/select2.full.min.js'); ?>"></script>
  <!-- <script src="http://localhost/stisla/node_modules/selectric/public/jquery.selectric.min.js"></script> -->

<<<<<<< Updated upstream
 <script defer src="<?php echo base_url(); ?>assets/core/js/scripts.min.js"></script>

 <script type="text/javascript" src="<?php echo base_url("assets/admin/js/bundle.js"); ?>"></script>

<?php if (trans('cldr') != 'en') 
{ ?>
    <script src="<?php echo base_url(); ?>assets/core/js/locales/bootstrap-datepicker.<?php _trans('cldr'); ?>.js"></script>
<?php 
} ?>

<?php $this->layout->load_view('layout/includes/model_js',array()); ?>




<div id="modal-placeholder"></div>


<?php echo $this->layout->load_view('layout/includes/fullpage-loader'); ?>

<footer class="bdT ta-c p-30 lh-0 fsz-sm c-grey-600"><span>Copyright © 2019 Designed by <a href="https://colorlib.com" target="_blank" title="Colorlib">Colorlib</a>. All rights reserved.</span></footer>
=======
  <!-- Template JS File -->
  <script src="<?php echo base_url('assets/stisla/js/scripts.js');?>"></script>
  <script src="<?php echo base_url('assets/stisla/js/custom.js');?>"></script>

  <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

  <!-- Page Specific JS File -->
  <!-- <script src="http://localhost/stisla/assets/js/page/forms-advanced-forms.js"></script> -->
>>>>>>> Stashed changes

  
</body>
</html>
