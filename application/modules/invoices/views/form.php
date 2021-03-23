<script>
    $(function () {

        // Enable select2 for all selects
        $('.simple-select').select2();

        <?php $this->layout->load_view('clients/script_select2_client_id.js'); ?>

        // Toggle on/off permissive search on clients names
        $('#toggle_permissive_search_clients').click(function () {
            if ($('input#input_permissive_search_clients').val() == ('1')) {
                $.get("<?php echo site_url('clients/ajax/save_preference_permissive_search_clients'); ?>", {
                    permissive_search_clients: '0'
                });
                $('input#input_permissive_search_clients').val('0');
                $('span#toggle_permissive_search_clients i').removeClass('fa-toggle-on');
                $('span#toggle_permissive_search_clients i').addClass('fa-toggle-off');
            } else {
                $.get("<?php echo site_url('clients/ajax/save_preference_permissive_search_clients'); ?>", {
                    permissive_search_clients: '1'
                });
                $('input#input_permissive_search_clients').val('1');
                $('span#toggle_permissive_search_clients i').removeClass('fa-toggle-off');
                $('span#toggle_permissive_search_clients i').addClass('fa-toggle-on');
            }
        });

        // Creates the invoice
        $('#invoice_create_confirm').click(function () {
            // Posts the data to validate and create the invoice;
            // will create the new client if necessar
            $.post("<?php echo site_url('invoices/ajax/create'); ?>", {
                    client_id: $('#create_invoice_client_id').val(),
                    invoice_date_created: $('#invoice_date_created').val(),
                    invoice_group_id: $('#invoice_group_id').val(),
                    invoice_time_created: '<?php echo date('H:i:s') ?>',
                    invoice_password: $('#invoice_password').val(),
                    user_id: '<?php echo $this->session->userdata('user_id'); ?>',
                    payment_method: $('#payment_method_id').val()
                },
                function (data) {
                    <?php echo(IP_DEBUG ? 'console.log(data);' : ''); ?>
                    var response = JSON.parse(data);
                    if (response.success === 1) {
                        // The validation was successful and invoice was created
                        window.location = "<?php echo site_url('invoices/view'); ?>/" + response.invoice_id;
                    }
                    else {
                        // The validation was not successful
                        $('.control-group').removeClass('has-error');
                        for (var key in response.validation_errors) {
                            $('#' + key).parent().parent().addClass('has-error');
                        }
                    }
                });
        });
    });

</script>

<div class="page-container">
    <form method="post">
        <input type="hidden" name="<?php echo $this->config->item('csrf_token_name'); ?>"
           value="<?php echo $this->security->get_csrf_hash() ?>">

    <div id="headerbar">
        <h1 class="headerbar-title"><?php _trans('create_quote'); ?></h1>
        <?php $this->layout->load_view('layout/header_buttons'); ?>
    </div>

    <div id="content">
        <div class="main-content bgc-grey-100">
            <div id='mainContent'>
                <div class="row mt-3">
                    <div class="col-xs-12 col-sm-12">
                        <div class="panel panel-default bgc-white p-20 bd">
                            <div class="mT-30">
                               
                                <div class="form-group has-feedback">
                                    <label for="create_invoice_client_id"><?php _trans('client'); ?></label>
                                    <div class="input-group">
                                        <select name="client_id" id="create_invoice_client_id" class="client-id-select form-control"
                                                autofocus="autofocus">
                                            <?php if (!empty($client)) : ?>
                                                <option value="<?php echo $client->client_id; ?>"><?php _htmlsc(format_client($client)); ?></option>
                                            <?php endif; ?>
                                        </select>
                                        <span id="toggle_permissive_search_clients" class="input-group-addon"
                                              title="<?php _trans('enable_permissive_search_clients'); ?>" style="cursor:pointer;">
                                            <i class="fa fa-toggle-<?php echo get_setting('enable_permissive_search_clients') ? 'on' : 'off' ?> fa-fw"></i>
                                        </span>
                                    </div>
                                </div>

                                <div class="form-group has-feedback">
                                    <label for="invoice_date_created"><?php _trans('invoice_date'); ?></label>

                                    <div class="input-group">
                                        <input name="invoice_date_created" id="invoice_date_created"
                                               class="form-control datepicker"
                                               value="<?php echo date(date_format_setting()); ?>">
                                        <span class="input-group-addon">
                                        <i class="fa fa-calendar fa-fw"></i>
                                    </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="invoice_password"><?php _trans('invoice_password'); ?></label>
                                    <input type="text" name="invoice_password" id="invoice_password" class="form-control"
                                           value="<?php echo get_setting('invoice_pre_password') == '' ? '' : get_setting('invoice_pre_password'); ?>"
                                           style="margin: 0 auto;" autocomplete="off">
                                </div>

                                <div class="form-group">
                                    <label for="invoice_group_id"><?php _trans('invoice_group'); ?></label>
                                    <select name="invoice_group_id" id="invoice_group_id"
                                        class="form-control simple-select" data-minimum-results-for-search="Infinity">
                                        <?php foreach ($invoice_groups as $invoice_group) { ?>
                                            <option value="<?php echo $invoice_group->invoice_group_id; ?>"
                                                    <?php if (get_setting('default_invoice_group') == $invoice_group->invoice_group_id) { ?>selected="selected"<?php } ?>>
                                                <?php _htmlsc($invoice_group->invoice_group_name); ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                </div>

                                 <div class="btn-group btn-group-sm">
                                    <button class="btn btn-success ajax-loader" id="invoice_create_confirm" type="button">
                                        <i class="fa fa-check"></i> <?php _trans('save'); ?>
                                    </button>                                   
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </form>

</div>
