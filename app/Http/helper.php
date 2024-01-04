<?php

use App\Models\User;

function users()
{
    $user = User::get()->count();
    return $user;
}
