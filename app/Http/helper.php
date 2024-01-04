<?php

use App\Models\User;

function users()
{
    $user = User::get()->count();
    return $user;
}

function approved_users()
{
    $user = User::where('status','approved')->get()->count();
    return $user;
}

function pending_users()
{
    $user = User::where('status','pending')->get()->count();
    return $user;
}

function rejected_users()
{
    $user = User::where('status','rejected')->get()->count();
    return $user;
}

