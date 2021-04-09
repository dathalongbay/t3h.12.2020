<?php
if (!function_exists("abc")) {
    function abc()
    {
        echo 123;
    }
}
if (!function_exists("abc")) {
    function abc(){
        echo 234;
    }
}


echo "<br> chạy đến đây ";