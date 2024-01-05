<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleProject extends Model
{
    use HasFactory;


    protected $primaryKey = 'id';

    protected $table = 'schedule_project';

    protected $fillable = [
        'id_user',
        'judul',
        'deskripsi',
        'room_code'
    ];

    // one to many scheduleproject to scheduleprojectmember
    public function member(){
        return $this->hasMany(ScheduleProjectMember::class, 'id_schedule_project', 'id');
    }

    public function task(){
        return $this->hasMany(ScheduleProjectAddTask::class, 'id_schedule_project', 'id');
    }
}
