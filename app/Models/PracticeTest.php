<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PracticeTest extends Model
{
    use HasFactory;

    protected $table = 'practice_tests';

    protected $fillable = [
        'course_id',
        'slug',
        'heading_pdf_title',
        'pdf',
        'schedule_title',
        'testimonials_title',
        'faq_title',
        'faq',
        'status',
    ];
}
