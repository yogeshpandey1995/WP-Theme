<?php

include_once 'include/enqueue.php';

include_once 'include/widgets.php';

include_once 'include/customize.php';

if (class_exists('woocommerce')) :
    include_once 'include/woocommerce.php';
endif;
