<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;
print_r($_GET);
$data = [
    'name' => $_GET['name'] ?? 'Unknow',
    'email' => $_GET['email'] ?? 'Unknow',
    'phone' => $_GET['phone'] ?? 'Unknow',
    'password' => md5($_GET['password']),
];

print_r($_GET);

$table = new UsersTable(new MySQL());
$http = new HTTP;
if($table){
    $table->insert($data);
    $http->redirect("/index.php","registered=true");
} else {
    $http->redirect("/register.php","error=true");
}