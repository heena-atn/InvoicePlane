<div class="page-container">
<div id="headerbar">
    <h1 class="headerbar-title"><?php _trans('payments'); ?></h1>

    <div class="headerbar-item pull-right">
        <a class="btn btn-sm btn-primary" href="<?php echo site_url('payments/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>

</div>

<!-- <div id="content" class="table-content">

    <?php $this->layout->load_view('layout/alerts'); ?>

    <div id="filter_results">
        <?php $this->layout->load_view('payments/partial_payment_table'); ?>
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
                                         <th><?php _trans('payment_date'); ?></th>
                                        <th><?php _trans('invoice_date'); ?></th>
                                        <th><?php _trans('invoice'); ?></th>
                                        <th><?php _trans('client'); ?></th>
                                        <th><?php _trans('amount'); ?></th>
                                        <th><?php _trans('payment_method'); ?></th>
                                        <th><?php _trans('note'); ?></th>
                                        <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                    <tr>
                                           <th><?php _trans('payment_date'); ?></th>
                                            <th><?php _trans('invoice_date'); ?></th>
                                            <th><?php _trans('invoice'); ?></th>
                                            <th><?php _trans('client'); ?></th>
                                            <th><?php _trans('amount'); ?></th>
                                            <th><?php _trans('payment_method'); ?></th>
                                            <th><?php _trans('note'); ?></th>
                                            <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                               <?php foreach ($payments as $payment) { ?>
            <tr>
                <td><?php echo date_from_mysql($payment->payment_date); ?></td>
                <td><?php echo date_from_mysql($payment->invoice_date_created); ?></td>
                <td><?php echo anchor('invoices/view/' . $payment->invoice_id, $payment->invoice_number); ?></td>
                <td>
                    <a href="<?php echo site_url('clients/view/' . $payment->client_id); ?>"
                       title="<?php _trans('view_client'); ?>">
                        <?php _htmlsc(format_client($payment)); ?>
                    </a>
                </td>
                <td class="amount"><?php echo format_currency($payment->payment_amount); ?></td>
                <td><?php _htmlsc($payment->payment_method_name); ?></td>
                <td><?php _htmlsc($payment->payment_note); ?></td>
                <td>
                    <div class="options btn-group">
                        <a class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('payments/form/' . $payment->payment_id); ?>">
                                    <i class="fa fa-edit fa-margin"></i>
                                    <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('payments/delete/' . $payment->payment_id); ?>"
                                      method="POST">
                                    <?php _csrf_field(); ?>
                                    <button type="submit" class="dropdown-button"
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
