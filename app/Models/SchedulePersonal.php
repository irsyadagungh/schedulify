<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SchedulePersonal extends Model
{

    protected $primaryKey = "id";

    protected $table = "schedule_personal";

    protected $fillable = [
        'id_user',
        'judul',
        'deskripsi',
        'tanggal_deadline',
        'warna',
        'status'
    ];
}
