<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MGuru extends Model
{
    use HasApiTokens, HasFactory, Notifiable,  HasRoles;
}
