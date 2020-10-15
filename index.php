<?php

require_once 'vendor/autoload.php';

use Ramsey\Uuid\Uuid;
use App\Models\Users;


$user = new Users();
echo 'Person ID is : ' . $user->userID();



