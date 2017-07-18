<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimelineEvent extends Model
{
    protected $table = 'events';

    protected $casts = ['what_happened' => 'object'];

    protected $dates = ['timestamp'];

    public $timestamps = false;

}
