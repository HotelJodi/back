<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Lanche as Authenticatable;
use Illuminate\Notifications\Notifiable;
class Lanche extends Model
{
    use HasFactory, Notifiable;
}
