<?php

setcookie("product", "điện thoại samsung note7", time() + 86400, "/");
setcookie("list_product", json_encode(["xiaomi", "huawei", "sony"]), time() + 86400, "/");

// json_encode(["xiaomi", "huawei", "sony"])

echo "<pre>";
print_r($_COOKIE);
echo "</pre>";

echo "<br>" . $_COOKIE["product"];