<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Sesuaikan dengan nama tabel level Anda
    protected $primaryKey = 'level_id'; // Sesuaikan dengan nama primary key yang digunakan

    // Define your relationships or other methods here
}
