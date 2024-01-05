<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleProjectAddTask extends Model
{
    // use HasFactory;

    protected $table = 'schedule_project_list_task';

    protected $fillable = [
        'id_schedule_project',
        'id_user',
        'judul',
        'deskripsi',
        'start_date',
        'end_date',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }
    public function tasks()
    {
        return $this->hasMany(self::class, 'id_user', 'id_user');
    }
}
