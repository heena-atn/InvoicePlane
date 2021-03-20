
<div class="page-container">
<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('units'); ?></h1>

    <div class="headerbar-item pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('units/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>



</div>


<main class="bgc-grey-100">
               <div id="mainContent">
                  <div class="container-fluid">
                    
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                             
                              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                 <thead>
                                   <tr>
                                        <th><?php _trans('unit_name'); ?></th>
                                        <th><?php _trans('unit_name_plrl'); ?></th>
                                        <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                    <tr>
                                            <th><?php _trans('unit_name'); ?></th>
                                            <th><?php _trans('unit_name_plrl'); ?></th>
                                            <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                                  <?php foreach ($units as $unit) { ?>
                <tr>
                    <td><?php _htmlsc($unit->unit_name); ?></td>
                    <td><?php _htmlsc($unit->unit_name_plrl); ?></td>
                    <td>
                        <div class="options btn-group">
                            <a class="btn btn-default btn-sm dropdown-toggle"
                               data-toggle="dropdown" href="#">
                                <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="<?php echo site_url('units/form/' . $unit->unit_id); ?>" class="icon_margin">
                                        <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                    </a>
                                </li>
                                <li>
                                    <form action="<?php echo site_url('units/delete/' . $unit->unit_id); ?>"
                                          method="POST">
                                        <?php _csrf_field(); ?>
                                        <button type="submit" class="dropdown-button icon_margin"
                                                onclick="return confirm('<?php _trans('delete_record_warning'); ?>');">
                                            <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                        </button>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>
            <?php } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>


</div>