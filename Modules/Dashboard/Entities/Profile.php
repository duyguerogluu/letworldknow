<?php

namespace Modules\Dashboard\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profile extends Model
{
    use HasFactory;
    // @todo classların başına sabitlenen değişkenler ne kadar işlevsel araştır
    protected $fillable = [
        'member_id',
        'cover_photo',
        'is_open_relation',
        'relation_status',
        'about',
        'philosophy',
        'feith',
        'current_country',
        'current_province',
        'job',
        'job_sector',
    ];




}
