<?php


function chia($a, $b) {
    if ($b == 0) {
        // nem ra 1 ngoại lệ
        throw new Exception("Không được chia cho số 0");
    }
    $c = $a/$b;
    return $c;
}

// bắt ngoại lệ dùng try catch
try {
    echo chia(5,1);
} catch (Exception $e) {
    echo "<br>" . $e->getMessage();
    echo "<br>" .$e->getCode();
    echo "<br>" .$e->getFile();
    echo "<br>" .$e->getLine();
    echo "<pre>";
    print_r($e);
    echo "</pre>";
    //var_dump($e);
}
