<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MSiswa extends Model
{
    use HasApiTokens, HasFactory, Notifiable,  HasRoles;
}
