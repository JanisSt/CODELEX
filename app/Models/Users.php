<?php

namespace App\Models;
use Ramsey\Uuid\Uuid;

class Users
{
    public string $ID;
    public function __construct()
    {

        $this->ID = Uuid::uuid1()->toString();
    }
    public function userID():string
    {
        return $this->ID;
    }
}
