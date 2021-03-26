<?php
// phạm vi toàn cục
$x = 75;

$y = 25;

function addition() {
    // phạm vị cục bộ
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];

}

addition();

echo $z;
?>