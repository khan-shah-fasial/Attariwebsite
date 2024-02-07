<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name', 
        'description',
        'url', 
        'thumbnail',
        'other_thumbnail', 
        'course_overview',
        'faq',
        
        'rating',
        'total_review',
        'key_title',

        'overview_section_heading',
        'syllabus_section_heading',
        'project_section_heading',
        'certificate_section_heading',
        'testimonials_section_heading',
        'batch_section_heading',
        'faq_section_heading',
        'status'
    ];
}



