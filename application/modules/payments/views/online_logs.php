<div class="page-container">
<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('payment_logs'); ?></h1>
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
                                        <th><?php _trans('payment_date'); ?></th>
                                        <th><?php _trans('invoice'); ?></th>
                                        <th><?php _trans('transaction_successful'); ?></th>
                                        <th><?php _trans('payment_date'); ?></th>
                                        <th><?php _trans('payment_provider'); ?></th>
                                        <th><?php _trans('provider_response'); ?></th>
                                        <th><?php _trans('transaction_reference'); ?></th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                    <tr>
                                             <th><?php _trans('payment_date'); ?></th>
                                            <th><?php _trans('invoice'); ?></th>
                                            <th><?php _trans('transaction_successful'); ?></th>
                                            <th><?php _trans('payment_date'); ?></th>
                                            <th><?php _trans('payment_provider'); ?></th>
                                            <th><?php _trans('provider_response'); ?></th>
                                            <th><?php _trans('transaction_reference'); ?></th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                                   <?php foreach ($payment_logs as $log) { ?>
                    <tr>
                        <td><?php echo $log->merchant_response_id; ?></td>
                        <td>
                            <a href="<?php echo site_url('invoices/view/' . $log->invoice_id); ?>"
                               title="<?php _trans('invoice'); ?>">
                                <?php echo($log->invoice_number ? $log->invoice_number : $log->invoice_id); ?>
                            </a>
                        </td>
                        <td>
                            <?php
                            echo $log->merchant_response_successful
                                ? '<i class="fa fa-check text-success"></i>'
                                : '<i class="fa fa-ban text-danger"></i>';
                            ?>
                        </td>
                        <td><?php echo date_from_mysql($log->merchant_response_date); ?></td>
                        <td><?php echo $log->merchant_response_driver; ?></td>
                        <td class="small <?php echo $log->merchant_response_successful ? '' : 'text-danger'; ?>">
                            <?php echo $log->merchant_response; ?>
                        </td>
                        <td><?php echo $log->merchant_response_reference; ?></td>
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

