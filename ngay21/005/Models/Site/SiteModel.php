<?php
namespace Models\Site;

// nạp namespace
// nạp namespace trong 1 namepace cụ thể
// có 2 phần ( namespaceName\className)
// namespaceName : Models\Admin
// className : AdminModel
use Models\Admin\AdminModel;

class SiteModel {

    public function info() {
        $adm = new AdminModel();
        $adm->demo1();
    }

}

// use bên ngoài class thì nó là nạp namespace
// use trong class thì nó là nạp trait