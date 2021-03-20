<div class="page-container">
<div id="headerbar">

    <h1 class="headerbar-title"><?php _trans('quotes'); ?></h1>

    <div class="headerbar-item pull-right">
        
       <a class="btn btn-primary btn-sm" href="<?php echo site_url('quotes/form'); ?>">
            <i class="fa fa-plus"></i> <?php _trans('new'); ?>
        </a>
    </div>
</div>


<!-- <div id="content" class="table-content">

    <div id="filter_results">
        <?php $this->layout->load_view('quotes/partial_quote_table', array('quotes' => $quotes)); ?>
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
                                         <th><?php _trans('status'); ?></th>
                                        <th><?php _trans('quote'); ?></th>
                                        <th><?php _trans('created'); ?></th>
                                        <th><?php _trans('due_date'); ?></th>
                                        <th><?php _trans('client_name'); ?></th>
                                        <th style="text-align: right; padding-right: 25px;"><?php _trans('amount'); ?></th>
                                        <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </thead>
                                 <tfoot>
                                    <tr>
                                            <th><?php _trans('status'); ?></th>
                                            <th><?php _trans('quote'); ?></th>
                                            <th><?php _trans('created'); ?></th>
                                            <th><?php _trans('due_date'); ?></th>
                                            <th><?php _trans('client_name'); ?></th>
                                            <th style="text-align: right; padding-right: 25px;"><?php _trans('amount'); ?></th>
                                            <th><?php _trans('options'); ?></th>
                                    </tr>
                                 </tfoot>
                                 <tbody>
                                <?php
        $quote_idx = 1;
        $quote_count = count($quotes);
        $quote_list_split = $quote_count > 3 ? $quote_count / 2 : 9999;

        foreach ($quotes as $quote) {
            // Convert the dropdown menu to a dropup if quote is after the invoice split
            $dropup = $quote_idx > $quote_list_split ? true : false;
            ?>
            <tr>
                <td>
                    <span class="label <?php echo $quote_statuses[$quote->quote_status_id]['class']; ?>">
                        <?php echo $quote_statuses[$quote->quote_status_id]['label']; ?>
                    </span>
                </td>
                <td>
                    <a href="<?php echo site_url('quotes/view/' . $quote->quote_id); ?>"
                       title="<?php _trans('edit'); ?>" class="icon_margin">
                        <?php echo($quote->quote_number ? $quote->quote_number : $quote->quote_id); ?>
                    </a>
                </td>
                <td>
                    <?php echo date_from_mysql($quote->quote_date_created); ?>
                </td>
                <td>
                    <?php echo date_from_mysql($quote->quote_date_expires); ?>
                </td>
                <td>
                    <a href="<?php echo site_url('clients/view/' . $quote->client_id); ?>"
                       title="<?php _trans('view_client'); ?>" class="icon_margin">
                        <?php _htmlsc(format_client($quote)); ?>
                    </a>
                </td>
                <td style="text-align: right; padding-right: 25px;">
                    <?php echo format_currency($quote->quote_total); ?>
                </td>
                <td>
                    <div class="options btn-group<?php echo $dropup ? ' dropup' : ''; ?>">
                        <a class="btn btn-sm btn-default dropdown-toggle" data-toggle="dropdown"
                           href="#">
                            <i class="fa fa-cog"></i> <?php _trans('options'); ?>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo site_url('quotes/view/' . $quote->quote_id); ?>" class="icon_margin">
                                    <i class="fa fa-edit fa-margin"></i> <?php _trans('edit'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('quotes/generate_pdf/' . $quote->quote_id); ?>"
                                   target="_blank" class='icon_margin'>
                                    <i class="fa fa-print fa-margin"></i> <?php _trans('download_pdf'); ?>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo site_url('mailer/quote/' . $quote->quote_id); ?>"class="icon_margin">
                                    <i class="fa fa-send fa-margin"></i> <?php _trans('send_email'); ?>
                                </a>
                            </li>
                            <li>
                                <form action="<?php echo site_url('quotes/delete/' . $quote->quote_id); ?>"
                                      method="POST">
                                    <?php _csrf_field(); ?>
                                    <button type="submit" class="dropdown-button icon_margin"
                                            onclick="return confirm('<?php _trans('delete_quote_warning'); ?>');">
                                        <i class="fa fa-trash-o fa-margin"></i> <?php _trans('delete'); ?>
                                    </button>
                                </form>
                            </li>
                        </ul>
                    </div>
                </td>
            </tr>
            <?php
            $quote_idx++;
        } ?>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </main>

      

</div>