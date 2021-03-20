
<div class="page-container">
<div id="headerbar">

    <h1 class="headerbar-title"><?php _trans('clients'); ?></h1>

    <div class="headerbar-item pull-right">
      
        <a class="btn btn-primary btn-sm" href="<?php echo site_url('clients/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

</div>



<!-- <div id="content" class="table-content">

    <?php $this->layout->load_view('layout/alerts'); ?>

    <div id="filter_results">
        <?php $this->layout->load_view('clients/partial_client_table'); ?>
    </div>

</div> -->

 <main class="bgc-grey-100">
               <div id="mainContent">
                  <div class="container-fluid">
                    
                     <div class="row">
                        <div class="col-md-12">
                           <div class="bgc-white bd bdrs-3 p-20 mB-20">
                             
                              <table id="dataTable" class="table table-striped table-bordered" cellspacing="0" width="100%">
                                 <thead>
                                   <tr>
                                        <th><?php _trans('active'); ?></th>
                                        <th><?php _trans('client_name'); ?></th>
                                        <th><?php _trans('email_address'); ?></th>
                                        <th><?php _trans('phone_number'); ?></th>
                                        <th class="amount"><?php _trans('balance'); ?></th>
                                        <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                    <tr>
                                            <th><?php _trans('active'); ?></th>
                                            <th><?php _trans('client_name'); ?></th>
                                            <th><?php _trans('email_address'); ?></th>
                                            <th><?php _trans('phone_number'); ?></th>
                                            <th class="amount"><?php _trans('balance'); ?></th>
                                            <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                                   <?php foreach ($records as $client) : ?>
            <tr>
                <td>
                    <?php echo ($client->client_active) ? '<span class="label active">' . trans('yes') . '</span>' : '<span class="label inactive">' . trans('no') . '</span>'; ?>
                </td>
                <td><?php echo anchor('clients/view/' . $client->client_id, htmlsc(format_client($client))); ?></td>
                <td><?php _htmlsc($client->client_email); ?></td>
                <td><?php _htmlsc($client->client_phone ? $client->client_phone : ($client->client_mobile ? $client->client_mobile : '')); ?></td>
                <td class="amount"><?php echo format_currency($client->client_invoice_balance); ?></td>
                <td>
                    <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('clients/view/' . $client->client_id); ?>" class="icon_margin">
                                    <i class="fa fa-eye fa-margin"></i> <?php _trans('view'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('clients/form/' . $client->client_id); ?>" class="icon_margin">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-create-quote icon_margin"
                                   data-client-id="<?php echo $client->client_id; ?>">
                                    <i class="fa fa-file fa-margin"></i> <?php _trans('create_quote'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="client-create-invoice icon_margin"
                                   data-client-id="<?php echo $client->client_id; ?>">
                                    <i class="fa fa-file-text fa-margin"></i> <?php _trans('create_invoice'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('clients/delete/' . $client->client_id); ?>"
                                      method="POST">
                                    <?php _csrf_field(); ?>
                                    <button type="submit" class="dropdown-button icon_margin"
                                            onclick="return confirm('<?php _trans('delete_client_warning'); ?>');">
                                        <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
        <?php endforeach; ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>

      </div>
