<?php if ( ! defined( 'ABSPATH' ) ) exit;  ?>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.wpucsnotice-pro .wpucsnotice-dismiss').on('click', function() {
            $(this).closest('.wpucsnotice-pro').fadeOut();
        });
    });
</script>