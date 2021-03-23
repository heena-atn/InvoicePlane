            <div class="sidebar">
            <div class="sidebar-inner">
               <div class="sidebar-logo">
                  <div class="peers ai-c fxw-nw">
                     <div class="peer peer-greed">
                        <a class="sidebar-link td-n" href="#">
                           <div class="peers ai-c fxw-nw">
                              <div class="peer">
                                 <div class="logo"><img src="<?php echo base_url('assets/admin/static/images/logo.png'); ?>" alt="">
                                 </div>
                              </div>
                              <div class="peer peer-greed">
                                 <h5 class="lh-1 mB-0 logo-text">Legaldiary</h5>
                              </div>
                           </div>
                        </a>
                     </div>
                     <div class="peer">
                        <div class="mobile-toggle sidebar-toggle"><a href="" class="td-n"><i class="ti-arrow-circle-left"></i></a></div>
                     </div>
                  </div>
               </div>
               <ul class="sidebar-menu scrollable pos-r">
                  <li class="nav-item mT-30 actived"><a class="sidebar-link icon_margin"  href="<?php echo base_url('dashboard/index'); ?>"><span class="icon-holder"><i class="c-blue-500 ti-home"></i> </span><span class="title">Dashboard</span></a></li>
                  
                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-users ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('clients'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('clients/form'); ?>"><?php _trans('add_client'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('clients/status'); ?>"><?php _trans('view_client'); ?></a>
                           </li>
                        </ul>
                  </li>

                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-file ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('quotes'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('quotes/form'); ?>"><?php _trans('create_quote'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('quotes/status'); ?>"><?php _trans('view_quotes'); ?></a>
                           </li>
                        </ul>
                  </li>

                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-file-text ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('invoices'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('invoices/form'); ?>"><?php _trans('create_invoice'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('invoices/status'); ?>"><?php _trans('view_invoices'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('invoices/recurring/index'); ?>"><?php _trans('view_recurring_invoices'); ?></a>
                           </li>
                        </ul>
                  </li>


                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-money ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('payments'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('payments/form'); ?>"><?php _trans('enter_payment'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('payments/index'); ?>"><?php _trans('view_payments'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('payments/online_logs'); ?>"><?php _trans('view_payment_logs'); ?></a>
                           </li>
                        </ul>
                  </li>

                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-database ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('products'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('products/form'); ?>"><?php _trans('create_product'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('products/index'); ?>"><?php _trans('view_products'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('families/index'); ?>"><?php _trans('view_product_families'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('units/index'); ?>"><?php _trans('view_product_units'); ?></a>
                           </li>
                        </ul>
                  </li>

                  <?php if (get_setting('projects_enabled') == 1) : ?>
                  <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-check-square-o ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('tasks'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('tasks/form'); ?>"><?php _trans('create_task'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('tasks/index'); ?>"><?php _trans('view_tasks'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('projects/form'); ?>"><?php _trans('create_project'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('projects/index'); ?>"><?php _trans('view_projects'); ?></a>
                           </li>                          
                        </ul>
                  </li>
                  <?php endif; ?>


                   <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-file ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('reports'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('reports/invoice_aging'); ?>"><?php _trans('invoice_aging'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('reports/payment_history'); ?>"><?php _trans('payment_history'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('reports/sales_by_client'); ?>"><?php _trans('sales_by_client'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('reports/sales_by_year'); ?>"><?php _trans('sales_by_date'); ?></a>
                           </li>                          
                        </ul>
                  </li>


                   <li class="nav-item dropdown">
                     <a class="dropdown-toggle" href="javascript:void(0);">
                        <span class="icon-holder">
                        <i class="fa fa-cogs ti-layout-list-thumb"></i>
                        </span><span class="title"><?php _trans('system_settings'); ?></span>
                        <span class="arrow">
                        <i class="ti-angle-right"></i>
                        </span>
                     </a>
                        <ul class="dropdown-menu">
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('custom_fields/index'); ?>"><?php _trans('custom_fields'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('email_templates/index'); ?>"><?php _trans('email_templates'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('invoice_groups/index'); ?>"><?php _trans('invoice_groups'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('invoices/archive'); ?>"><?php _trans('invoice_archive'); ?></a>
                           </li>  
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('item_lookups/index'); ?>"><?php _trans('item_lookups'); ?></a>
                           </li> 
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('tax_rates/index'); ?>"><?php _trans('tax_rates'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('settings'); ?>"><?php _trans('system_settings'); ?></a>
                           </li>
                           <li>
                              <a class='sidebar-link' href="<?php echo base_url('import'); ?>"><?php _trans('import_data'); ?></a>
                           </li>
                                                  
                        </ul>
                  </li>
                  
               </ul>
            </div>
         </div>
         
