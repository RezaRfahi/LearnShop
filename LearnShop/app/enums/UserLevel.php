<?php

namespace App\enums;

enum UserLevel:string
{
    case Owner = 'owner';
    case Admin = 'admin';
    case User = 'user';
}
