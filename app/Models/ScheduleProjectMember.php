<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ScheduleProjectMember extends Model
{
    use HasFactory;

    protected $table = 'schedule_project_list_member';

    protected $fillable = [
        'id_schedule_project',
        'id_user'
    ];

    // one to many scheduleproject to scheduleprojectmember
    public function scheduleProjectMember(){
        return $this->belongsTo(ScheduleProject::class, 'id_schedule_project', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user','id');
    }
}
