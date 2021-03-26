<?php

echo "<pre>";
print_r($_SERVER);
echo "</pre>";


// lấy url đang chạy
echo "<br>" . $_SERVER['PHP_SELF'];

// lấy query string
echo "<br>" . $_SERVER['QUERY_STRING'];