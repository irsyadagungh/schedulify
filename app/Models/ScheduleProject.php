<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleProject extends Model
{
    use HasFactory;

    protected $table = 'schedule_project';

    protected $fillable = [
        'id_user',
        'judul',
        'deskripsi',
        'room_code'
    ];
}
