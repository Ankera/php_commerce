<?php

/**
 * date_default_timezone_set
 * time
 * mktime
 * date
 * microtime
 */
date_default_timezone_set('Asia/Shanghai');

echo time();

echo '<hr/>';

echo mktime(0, 0, 0, 6, 8, 2014);

echo '<hr/>';
echo date('Y--m-d h:m:s a d D j A');

echo '<hr/>';
echo microtime();
echo '===';
echo microtime(true);
