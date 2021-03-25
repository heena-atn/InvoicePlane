
<?php if (!isset($hide_submit_button)) : ?>
    <button id="btn-submit" name="btn_submit" class="btn btn-success ajax-loader  mr-4 btn-sm" value="1">
        <i class="fa fa-check"></i> <?php _trans('save'); ?>
    </button>
<?php endif; ?>
<?php if (!isset($hide_cancel_button)) : ?>
    <button type="button" onclick="window.history.back()" id="btn-cancel" name="btn_cancel" class="btn btn-danger btn-sm" value="1">
        <i class="fa fa-times"></i> <?php _trans('cancel'); ?>
    </button>
<?php endif; ?>
