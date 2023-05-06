<?php
include("../vendor/autoload.php");

use Libs\Database\MySQL;
use Libs\Database\UsersTable;
use Helpers\HTTP;

print_r($_POST);

$email = $_POST['email'];
$password = md5($_POST['password']);

$table = new UsersTable(new MySQL());

$user = $table->find
