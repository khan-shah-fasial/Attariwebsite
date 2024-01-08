<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    use HasFactory;

    protected $table = 'cms';

    protected $fillable = [
        'course_id',
        'slug',
        'replace_keyword',
        'title',
        'description',
        'rating',
        'total_review',
        'menu_title',
        'status',
    ];
}
