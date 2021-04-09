<?php

// file index1.php không khai báo namespace
// nên nó thuộc global namespace
include_once "app/controllers/admin/report/ReportController.php";
// khi gọi từ global namespace gọi đến namespace cụ thể thêm \ trước tên namespace kia
$report = new \App\Controller\Admin\Report\ReportController();
