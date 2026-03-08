<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = [
        'title',
        'cover',
        'content',
        'robotics_kit_id',
        'group_id'
    ];

    public function group()
    {
        return $this->belongsTo(Group::class);
    }

    public function roboticsKit()
    {
        return $this->belongsTo(RoboticsKit::class);
    }
}